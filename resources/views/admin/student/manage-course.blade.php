@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Student Course</h4>
                    <p class="text-success">{{Session::get('message')}}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Title</th>
                                <th>Teacher NAME</th>
                                <th>Student Name</th>
                                <th>Student Mobile</th>
                                <th>Enroll Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$enroll['course_title']}}</td>
                                    <td>{{$enroll['teacher_name']}}</td>
                                    <td>{{$enroll['student_name']}}</td>
                                    <td>{{$enroll['student_mobile']}}</td>
                                    <td>{{$enroll['enroll_status']}}</td>
                                    <td>{{$enroll['payment_status']}}</td>
{{--                                    @if($enroll->status == 1)--}}
{{--                                        <td class="badge rounded-pill bg-success text-white">Active</td>--}}
{{--                                    @else--}}
{{--                                        <td class="badge rounded-pill bg-danger text-white">inactive</td>--}}
{{--                                    @endif--}}


                                    <td>
                                        <a href="{{route('update-enroll-status',['id'=> $enroll['enroll_id']])}}" class="btn {{$enroll['enroll_status'] == 'Pending' ? 'btn-warning' : 'btn-success disabled'}} btn-sm">
                                            <i class="fa fa-upload"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


