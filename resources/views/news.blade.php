@extends('layouts.main')
@section('title')
    News
@endsection
@section('content')
    <section class="container p-2 pb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="heading pt-4">
                    <h1 class="text-start">#Trending News</h1>
                </div>

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/landscape_view.jpg') }}" class="d-block rounded-start"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/landscape_view.jpg') }}" class="d- rounded-start" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/landscape_view.jpg') }}" class="d-block rounded-start"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="heading pt-4">
                    <h1 class="text-start d-inline">#Hot News</h1>
                    <span class="ms-2 mb-2 p-1 badge bg-dark text-white">Selengkapnya</span>
                </div>
                <div class="row flex-column">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/img/girl.jpg') }}" width="130"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/img/girl.jpg') }}" width="130"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="heading pt-4">
                    <h1 class="text-start d-inline">#News Feeds</h1>
                    <span class="ms-2 mb-2 p-1 badge bg-dark text-white">Selengkapnya</span>
                </div>
                <div class="row flex-column">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/img/girl.jpg') }}" width="130"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="{{ asset('assets/img/girl.jpg') }}" width="130"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="heading pt-4 pb-2">
                    <h1 class="text-start d-inline">#Tags News</h1>
                    <span class="ms-2 mb-2 p-1 badge bg-dark text-white">Selengkapnya</span>
                </div>
                <div class="tags">
                    <div class="each-tags d-flex">
                        <div class="col-1 text-secondary">
                            <h2>#1</h2>
                        </div>
                        <div class="col-11 text-secondary">
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, est.</h5>
                        </div>
                    </div>
                    <div class="each-tags d-flex">
                        <div class="col-1 text-secondary">
                            <h2>#2</h2>
                        </div>
                        <div class="col-11 text-secondary">
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, est.</h5>
                        </div>
                    </div>
                    <div class="each-tags d-flex">
                        <div class="col-1 text-secondary">
                            <h2>#3</h2>
                        </div>
                        <div class="col-11 text-secondary">
                            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, est.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
