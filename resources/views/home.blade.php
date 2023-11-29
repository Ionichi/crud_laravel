@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <section class="p-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/girl.jpg') }}" width="350" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">Ionichi</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Repudiandae laboriosam sunt ad, nam assumenda, id nihil, ex placeat iusto
                                        repellendus laudantium accusantium nobis vero ipsa excepturi! Omnis voluptatibus
                                        asperiores amet aut tempora impedit error, qui nobis eaque mollitia quaerat non
                                        aliquid maxime alias rerum adipisci iste corrupti sed dolorem excepturi,
                                        inventore repudiandae consequatur repellendus.</p>
                                    <p>Animi repellendus, odio beatae,
                                        commodi, perferendis dicta ipsam repellat odit accusantium corrupti enim itaque
                                        ex aperiam doloribus nihil error debitis sapiente! Hic excepturi tenetur aliquid
                                        error quas! Ex fuga odit ut eveniet maxime natus, voluptatum nihil adipisci,
                                        molestiae cumque eaque repellendus. Nobis tempore saepe autem porro!</p>

                                    <button type="button" class="btn btn-outline-dark">Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3 text-center">
                    <h3>Subscribe Information</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem blanditiis id fuga
                        temporibus ab quam neque molestias sit ipsam animi, dolores dolorum corporis quas nostrum nam
                        maiores incidunt enim alias obcaecati, voluptates a cum excepturi? Deleniti, atque quae culpa
                        ipsam officia hic alias at commodi! Recusandae aliquam ducimus officia doloribus?</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email..." aria-label="Email..."
                            aria-describedby="button-addon2">
                        <button class="btn btn-dark" type="button" id="button-addon2">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
