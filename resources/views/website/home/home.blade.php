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
                        <div class="card card-body rounded-0 bg-info">
                            <h3 class="card-title">Notice Title1</h3>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body rounded-0 bg-info">
                            <h3 class="card-title">Notice Title2</h3>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body rounded-0 bg-info">
                            <h3 class="card-title">Notice Title3</h3>
                            <hr/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/1.jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body bg-dark text-light">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature two</li>
                                        <li>Course Feature three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{ route('course-detail') }}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/2.jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body bg-dark text-light">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature two</li>
                                        <li>Course Feature three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/3.jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body bg-dark text-light">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature two</li>
                                        <li>Course Feature three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/4.jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body bg-dark text-light">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature two</li>
                                        <li>Course Feature three</li>
                                        <li>Course Feature four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 bg-info">
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
