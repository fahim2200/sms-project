@extends('master.front.master')

@section('title')
    Course Detail Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body bg-info">
                        <img src="{{ asset('/') }}img/1.jpg" alt="" class="w-100"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body bg-dark text-white">
                        <h1>Course Title</h1>
                        <p>Course Fee : 15,687tK</p>
                        <hr/>
                        <h2>Trainer Name</h2>
                        <ul>
                            <li><a href="">Trainer LinkedIn Link</a></li>
                            <li><a href="">Trainer Facebook Link</a></li>
                            <li><a href="">Trainer Twitter Link</a></li>
                        </ul>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, veniam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0 bg-info">
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid dignissimos dolore dolores ea esse laborum maiores molestias, nihil obcaecati odit optio quaerat repudiandae rerum similique, suscipit tenetur velit veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid dignissimos dolore dolores ea esse laborum maiores molestias, nihil obcaecati odit optio quaerat repudiandae rerum similique, suscipit tenetur velit veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid dignissimos dolore dolores ea esse laborum maiores molestias, nihil obcaecati odit optio quaerat repudiandae rerum similique, suscipit tenetur velit veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid dignissimos dolore dolores ea esse laborum maiores molestias, nihil obcaecati odit optio quaerat repudiandae rerum similique, suscipit tenetur velit veniam.</p>
                        <hr/>
                        <a href="" class="btn btn-dark w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
