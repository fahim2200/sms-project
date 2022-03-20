<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use function Symfony\Component\String\upper;

class TeacherController extends Controller
{
    private $code;
    private $id;
    private $name;
    private $teacher;
    private $teachers;
    private $year;


    public function index(){

        return view('admin.teacher.add');
    }

    public function manage(){
//        $this->teachers = Teacher::all();
//        $this->teacher = Teacher::orderBy('id','desc')->first();
        $this->teachers = Teacher::orderBy('id','desc')->get();
//        $this->teacher = Teacher::orderBy('id','desc')->take(2)->get(1);
//        $this->teacher = Teacher::orderBy('id','desc')->skip(1)->take(2)->first(1);
//        $this->teacher = Teacher::orderBy('id','desc')->skip(1)->take(2)->first(1);

        return view('admin.teacher.manage',['teachers' => $this->teachers]);
    }
    public function create( Request $request){


            Teacher::newTeacher($request,$this->getTeacherCode($request));
            return redirect('/add-teacher')->with('message','Teacher info Created Successfully');
////        return $request->all();
    }
    private function getTeacherCode($request)
    {
        $this->teacher = Teacher::orderBy('id', 'desc')->first();
        if($this->teacher)
        {
            $this->id = $this->teacher->id + 1;
        }
        else{
            $this->id = 1;
        }
        $this->updateString = preg_replace('/[^A-Za-z0-9]/',"",$request->name);
        $this->name = strtoupper(substr($this->updateString,0,3));
//            return substr($request->name,0,3);
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
        return $this->code;
    }
    public function edit($id){
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',['teacher' => $this->teacher]);

//        Teacher::editTeacher($request, $id);
//        return redirect('/edit-teacher')->with('message','Teacher Info Update Successfully');
    }
    public function update (Request $request, $id)
    {
        Teacher::updateTeacher($request, $id,$this->getTeacherCode($request));
        return redirect('/manage-teacher')->with('message','Teacher Info Update Successfully');
    }

    public function delete($id)
    {
        $this->teacher = Teacher::find($id);
        if(file_exists($this->teacher->image))
        {
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return redirect('/manage-teacher')->with('message','Teacher Info delete Successfully');
    }
}
