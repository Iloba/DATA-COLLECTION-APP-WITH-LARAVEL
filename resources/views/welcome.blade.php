@include('master.header')
    <div class="main-section">
        <section class="p-5 first-section">
            <div class="container p-5">
                <h1 class="text-center welcome">Welcome to E-registration</h1>
                <div class="d-flex">
                    <a href="{{route('register_page')}}" style="max-width: 180px;" class="btn btn-danger btn-lg mx-auto d-block">Register</a>
                    <a href="{{route('login_page')}}" style="max-width: 180px;" class="btn btn-success btn-lg mx-auto d-block">Sign in</a>
                </div>
            </div>
        </section>
        <section class="mt-5 mb-5">
            <div class="container p-5" id="first-div">
               <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="{{asset('img/woman.webp')}}" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <h1>Register for Empowerment</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum non ad excepturi. 
                        Officia a quod nulla adipisci rem eligendi rerum,
                        voluptates quasi soluta placeat, aspernatur eveniet quaerat exercitationem, ducimus quidem?
                    </p>
                </div>
               </div>
            </div>
        </section>
        <section class="p-5 third-section">
            <div class="container p-4" id="second-div">
                <h2 class="text-center">The four (4) main programs under the Empowerment Investment Program</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mt-5 mb-5">
                            <div class="col-md-4">
                                <img style="width: 220px" class="img-fluid" src="{{asset('img/money.webp')}}" alt="">
                            </div>
                            <div class="col-md-8">
                                <p>
                                    <h3>Lorem</h3>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, mollitia adipisci fuga fugit quis corrupti illo ad aspernatur architecto tenetur illum veritatis corporis quae similique fugiat sapiente nam eos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, mollitia adipisci fuga fugit quis corrupti illo ad aspernatur architecto tenetur illum veritatis corporis quae similique fugiat sapiente nam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <img style="width: 220px" class="img-fluid" src="{{asset('img/market.webp')}}" alt="">
                            </div>
                            <div class="col-md-8">
                                <p>
                                    <h3>Lorem</h3>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, mollitia adipisci fuga fugit quis corrupti illo ad aspernatur architecto tenetur illum veritatis corporis quae similique fugiat sapiente nam eos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, mollitia adipisci fuga fugit quis corrupti illo ad aspernatur architecto tenetur illum veritatis corporis quae similique fugiat sapiente nam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <img style="width: 220px" class="img-fluid" src="{{asset('img/child.webp')}}" alt="">
                            </div>
                            <div class="col-md-8">
                                <p>
                                    <h3>Lorem</h3>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, mollitia adipisci fuga fugit quis corrupti illo ad aspernatur architecto tenetur illum veritatis corporis quae similique fugiat sapiente nam eos.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloremque, mollitia adipisci fuga fugit quis corrupti illo ad aspernatur architecto tenetur illum veritatis corporis quae similique fugiat sapiente nam eos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-5" id="card-section">
            <h1 class="text-center p-3">Steps to follow</h1>
            <div class="container p-5" id="third-div">
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{asset('img/hero.webp')}}" alt="">
                            </div>
                            <div class="card-body p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae, omnis suscipit magnam dolor voluptatem quisquam doloremque voluptate corrupti quod pariatur aperiam quidem cupiditate facere cumque nulla, ratione ad sit!</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{asset('img/hero.webp')}}" alt="">
                            </div>
                            <div class="card-body p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae, omnis suscipit magnam dolor voluptatem quisquam doloremque voluptate corrupti quod pariatur aperiam quidem cupiditate facere cumque nulla, ratione ad sit!</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card shadow">
                            <div class="card-img-top">
                                <img class="img-fluid" src="{{asset('img/hero.webp')}}" alt="">
                            </div>
                            <div class="card-body p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quae, omnis suscipit magnam dolor voluptatem quisquam doloremque voluptate corrupti quod pariatur aperiam quidem cupiditate facere cumque nulla, ratione ad sit!</p>
                                <a href="#" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@include('master.footer')