<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ALA</title>
    <link rel="icon" type="image/png" href="{{URL::asset('/favicon.png')}}" />
    <link rel="icon" type="image/png" href="{{URL::asset('image/JPEG.png')}}" />

    <!-- nermolize -->
    <link rel="stylesheet" href="{{URL::asset('/css/normalize.css')}}"/>
    <!-- mw font awsome -->
    <link rel="stylesheet" href="{{URL::asset('/css/all.min.css')}}" />
    <!-- my file Bs -->
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}" />
    <!-- my file css -->
    <link rel="stylesheet" href="{{URL::asset('/css/main.css')}}"/>
    <!-- swiber -->



        <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="#">
        <img class="logo-nav" src="{{URL::asset('/image/JPEG.png')}}" alt="" />
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link nav-home active" href="#Home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-about" href="#about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-servies" href="#servies">Our Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-review" href="#review">Our Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-contant" href="#contant">Contact Us</a>
            </li>
        </ul>
        <a class="link-btn-nav" href=""
        ><button class="btn-nav" >Apply</button></a>
    </div>
</nav>



<!-- back to tob -->
<a href="#Home">
    <div class="back-to-top">
        <i class="fas fa-arrow-circle-up back-Up"></i>
    </div>
</a>

<!-- end Nav -->
<!-- ****************************************** -->
<div class="slider" id="Home">
    <input class="yarab" type="radio" name="slider" checked = "checked">
    <div class="imgBox">
        <img src="{{URL::asset('/image/girl-clouds-flight-the-plane-wallpaper-preview.jpg')}}" alt="">
        <div class="content">
            <h2>
                <h2>
                    We Build Your <br>
                    <span class="myspan-textPage">Dreams</span> And
                    <span class="myspan-textPage">Home</span>
                </h2>
            </h2>
            <p>The “Sky Dream” Air Hospitality Academy announces the opening of the application and receiving a new batch every year.</p>
        </div>
    </div>
    <input class="yarab" type="radio" name="slider">
    <div class="imgBox">
        <img src="{{URL::asset('/image/image 3-1.png')}}" alt="">
        <div class="content">
            <h2>
                <h2>
                    We Build Your <br>
                    <span class="myspan-textPage">Dreams</span> And
                    <span class="myspan-textPage">Home</span>
                </h2>
            </h2>
            <p>The “Sky Dream” Air Hospitality Academy announces the opening of the application and receiving a new batch every year.</p>
        </div>
    </div>
    <input class="yarab" type="radio" name="slider">
    <div class="imgBox">
        <img src="{{URL::asset('/image/wp8920338.jpg')}}" alt="">
        <div class="content">
            <h2>
                <h2>
                    We Build Your <br>
                    <span class="myspan-textPage">Dreams</span> And
                    <span class="myspan-textPage">Home</span>
                </h2>
            </h2>
            <p>The “Sky Dream” Air Hospitality Academy announces the opening of the application and receiving a new batch every year.</p>
        </div>
    </div>
    <input class="yarab" type="radio" name="slider">
    <div class="imgBox">
        <img src="{{URL::asset('/image/depositphotos_69890689-stock-photo-air-hostess-smiling.jpg')}}" alt="">
        <div class="content">
            <h2>
                <h2>
                    We Build Your <br>
                    <span class="myspan-textPage">Dreams</span> And
                    <span class="myspan-textPage">Home</span>
                </h2>
            </h2>
            <p>The “Sky Dream” Air Hospitality Academy announces the opening of the application and receiving a new batch every year.</p>
        </div>
    </div>
</div>
<!-- end seaction-one -->

<!-- start dream-seaction -->

<div class="dream" id="dream">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flex">
                    <div class="card card-1">
                        <div class="card-body">
                            <h5 class="card-title">
                                Book Library & Store
                                <i class="fas fa-chevron-right" id="headingOne"></i>
                                <i class="fas fa-chevron-down"></i>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit commodi ullam tempore consequatur facilis
                                quos, nisi saepe exercitationem inventore.
                            </p>
                        </div>
                    </div>
                    <div class="card card-3">
                        <div class="card-body">
                            <h5 class="card-title">
                                Book Library & Store <i class="fas fa-chevron-right"></i>
                                <i class="fas fa-chevron-down"></i>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit commodi ullam tempore consequatur facilis
                                quos, nisi saepe exercitationem inventore.
                            </p>
                        </div>
                    </div>
                    <div class="card card-4">
                        <div class="card-body">
                            <h5 class="card-title">
                                Book Library & Store <i class="fas fa-chevron-right"></i>
                                <i class="fas fa-chevron-down"></i>
                            </h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit commodi ullam tempore consequatur facilis
                                quos, nisi saepe exercitationem inventore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="flex-img">
                    <img src="{{URL::asset('image/Travel1 1.png')}}" alt="" />
                    <img src="{{URL::asset('image/Travel 3.png')}}" class="img-1" alt="" />
                    <img src="{{URL::asset('image/Travel3 1.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end dream -->

<!-- start about -->

<section id="about-us" class="pt-5 pb-5">
    <div class="row">
        <div class="col-md-5">
            <div class="logo">
                <img src="{{URL::asset('image/about.png')}}" class="image" />
            </div>
        </div>
        <div class="col-md-7">
            <div class="about">
                <h3 class="word bl">About <span class="sp">Us</span></h3>
                <h5 class="word">Why Aire Line</h5>
            </div>
            <div class="par">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur
                    ipsam veritatis quasi exercitationem, ab cumque in possimus
                    nostrum aperiam voluptatem molestias magni maxime quo distinctio
                    labore eligendi, placeat, assumenda delectus!Lorem ipsum, dolor
                    sit amet consectetur adipisicing elit. Pariatur ipsam veritatis
                    quasi exercitationem, ab cumque in possimus nostrum aperiam
                    voluptatem molestias magni maxime quo distinctio labore eligendi,
                    placeat, assumenda delectus
                </p>
                <div class="d-flex">
                    <img class="ceo" src="{{URL::asset('image/img.jpg')}}" />
                    <div class="info">
                        <h3>Randy wallen</h3>
                        <h6>cef,aire ,lines group</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about -->

<!-- start circle -->
<div class="container-circle" id="servies">
    <div class="circles">
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="c2 c3">
            <div class="img-circle"></div>
        </div>
        <div class="small-c1 small-c11">
            <div id="logo">
                <i class="fas fa-trophy"></i>
            </div>
            <div class="tittle0 title">Best Industry Leader</div>
        </div>
        <div class="small-c2 small-c1">
            <div id="logo">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="title1 title">Learn Courses Online</div>
        </div>
        <div class="small-c3 small-c1">
            <div id="logo">
                <i class="fas fa-university"></i>
            </div>
            <div class="title2 title">Book Library & Store</div>
        </div>
        <div class="small-c4 small-c1">
            <div id="logo">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="tittle3 title">Book Library & Store</div>
        </div>
        <div class="small-c5">
            <div class="internal-circle"></div>
        </div>
    </div>
</div>
<!-- end circle -->

<!--Start Reviews-->
<div class="container" id="review">
    <div class="edit-text"><span class="edit-span">Reviews</span></div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="background-col">
                    <div class="img">
                        <img
                            src="{{URL::asset('/image/Rectangle 25.png')}}"
                            alt=""
                            width="166px"
                            height="232px"
                        />
                    </div>
                    <div class="text">
                        <h4>01</h4>
                        <p>Hydronic SystemsEngineering</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="background-col">
                    <div class="img">
                        <img
                            src="{{URL::asset('/image/Rectangle 25.png')}}"
                            alt=""
                            width="166px"
                            height="232px"
                        />
                    </div>
                    <div class="text">
                        <h4>02</h4>
                        <p>Hydronic SystemsEngineering</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="background-col">
                    <div class="img">
                        <img
                            src="{{URL::asset('/image/Rectangle 25.png')}}"
                            alt=""
                            width="166px"
                            height="232px"
                        />
                    </div>
                    <div class="text">
                        <h4>03</h4>
                        <p>Hydronic SystemsEngineering</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="background-col">
                    <div class="img">
                        <img
                            src="{{URL::asset('/image/Rectangle 25.png')}}"
                            alt=""
                            width="166px"
                            height="232px"
                        />
                    </div>
                    <div class="text">
                        <h4>04</h4>
                        <p>Hydronic SystemsEngineering</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="background-col">
                    <div class="img">
                        <img
                            src="{{URL::asset('/image/Rectangle 25.png')}}"
                            alt=""
                            width="166px"
                            height="232px"
                        />
                    </div>
                    <div class="text">
                        <h4>05</h4>
                        <p>Hydronic SystemsEngineering</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="background-col">
                    <div class="img">
                        <img
                            src="{{URL::asset('/image/Rectangle 25.png')}}"
                            alt=""
                            width="166px"
                            height="232px"
                        />
                    </div>
                    <div class="text">
                        <h4>06</h4>
                        <p>Hydronic SystemsEngineering</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<!--End Reviews-->

<!--Start ContactUs-->
<div class="add-color" id="contant">
    <div class="container">
        <div class="edit-contact"><span>Contact</span> US</div>
        <hr />
        <div class="row">
            <div class="col-md-4">
                <div class="textt text-center d-flex align-items-center h-75 mt-3">
                    <p>
                        For More Information, <br />
                        Sign Up With Us Here:
                    </p>
                </div>
            </div>
            <div class="col-md-8 edit-formm">
                <form action="" name="submit">
                    <label for="fname">Your Name</label><br />
                    <input
                        type="text"
                        id="fname"
                        name="firstname"
                        class="edit-form"
                    /><br />

                    <label for="lname">Your E-mail</label><br />
                    <input
                        type="email"
                        id="emaill"
                        name="lastname"
                        class="edit-form"
                    /><br />

                    <label for="lname">Your Mobile Number</label><br />
                    <input type="text" id="Nmobile" name="phone" class="edit-form" />

                    <button class="edit-button">JOIN</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End ContactUs-->

<!--Start Footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Products</a></li>
            </div>
            <div class="col-3">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
            </div>
            <div class="col-3">
                <li><a href="#">Privacy Policy & Terms of use</a></li>
                <li><a href="#">About Us</a></li>
            </div>
            <div class="col-3 foot">
                <p>Follow Us on:</p>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->



<script src="{{URL::asset('/js/jquery-3.6.0.min.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{URL::asset('/js/popper.min.js')}}"></script>
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{URL::asset('/js/main.js')}}"></script>
</body>
</html>
