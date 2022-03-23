<?php

namespace App\Http\Controllers;

use App\Mail\enrollConfirmationMail;
use App\Models\Enroll;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Session;

class WebController extends Controller
{
    private $subjects;
    private $subject;
    private $student;
    private $enroll;
    private $data = [];
    private $check = false;
    public function index(){

        $this->subjects = Subject::where('status', 1)->orderBy('id', 'desc')->get();

        return view('website.home.home',['subjects' => $this->subjects]);
    }

    public function detail($id){

        $this->subject = Subject::find($id);
        if(Session::get('student_id'))
        {
            $this->enroll = Enroll::where('student_id',Session::get('student_id'))->where('subject_id', $id)->first();
            if($this->enroll)
            {
                $this->check = true;
            }
        }
        return view('website.course.detail',['subject' => $this->subject,'check' =>$this->check]);
    }
    public function enroll($id)
    {
        if (Session::get('student_id'))
        {
            $this->enroll = new Enroll();
            $this->enroll->subject_id = $id;
            $this->enroll->student_id = Session::get('student_id');
            $this->enroll->enroll_date  =date('Y-m-d');
            $this->enroll->enroll_timestamp  =strtotime(date('Y-m-d'));
            $this->enroll->save();
            return redirect('/student-dashboard')->with('message','new course registration sucessfully');

        }
    else {
        return view('website.course.enroll', ['id' => $id]);
    }
    }
    public function newEnroll(Request $request, $id)
    {
        Student::where('email',$request->email)->first();
        if ($request->student)
        {
            $this->enroll = Enroll::where('student_id',$this->student->id)->where('subject_id',$id)->first();
            if($this->enroll)
            {

              return redirect('/course-detail/'.$id)->with('message', ' You are already enrolled this course please try another one');
            }
        }


        else{

            $this->student = new Student();
            $this->student->name = $request->name;
            $this->student->email = $request->email;
            $this->student->password = bcrypt($request->mobile);
            $this->student->mobile = $request->mobile;
            $this->student->save();
        }




        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);






        $this->enroll = new Enroll();
        $this->enroll->subject_id = $id;
        $this->enroll->student_id = $this->student->id;
        $this->enroll->enroll_date  =date('Y-m-d');
        $this->enroll->enroll_timestamp  =strtotime(date('Y-m-d'));
        $this->enroll->save();
        /*======Email Mail======*/
        $this->data = [
            'name' => $request->name,
            'user_id' => $request->email,
            'password' => $request->mobile,

        ];


        Mail::to($request->email)->send(new enrollConfirmationMail($this->data));

        return redirect('/course-detail/'.$id)->with('message','Registration Sucessfully Complete');



    }
}
