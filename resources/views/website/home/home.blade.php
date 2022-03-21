@extends('master.front.master')

@section('title')
    Home Page
@endsection

@section('body')
    <section class="notice-section py-5">
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body rounded-0 bg-opacity-75 bg-info">
                            <h3 class="card-title text-center">BITM</h3>
                            <hr/>
                            <p class="text-center"><b>746+ Regular programs 327+ Trainers 58+ Client Organizations</b></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body rounded-0 bg-opacity-75 bg-info">
                            <h3 class="card-title text-center">|| BITM ||</h3>
                            <hr/>
                            <p class="text-center"><b>746+ Regular programs 327+ Trainers 58+ Client Organizations</b></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body rounded-0 bg-opacity-75 bg-info">
                            <h3 class="card-title text-center">||| BITM |||</h3>
                            <hr/>
                            <p class="text-center"><b>746+ Regular programs 327+ Trainers 58+ Client Organizations</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset($subject->image)}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body bg-dark text-light">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>{{$subject->title}}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                           {{$subject->teacher->name}}
                                        </figcaption>
                                    </figure>
                                    <div>{!! $subject->short_description !!}</div>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail',['id' => $subject->id])}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn opacity-75 btn-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-4 bg-opacity-25 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body bg-transparent border-0">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control" placeholder="Enter Your Email Here">
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-dark w-100"  value="Subscribe Now">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
