<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ setting('site.title') }} | Wedding</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">


</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar py-3" role="banner">

            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2" data-aos="fade-down">
                        <h1 class="mb-0"><a href="/" class="text-white h2 mb-0">T & W</a></h1>
                    </div>
                    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                        <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active"><a href="#">Upload</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>

        <div class="site-section" data-aos="fade">
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center">

                <div class="row justify-content-center">

                    <div class="col-md-7">
                        <div class="row mb-5">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center">Upload</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <form id="upload" method="post" action="{{ route('upload_photo') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nome</label>
                            <input
                                type="text"
                                class="form-control"
                                name="owner"
                                id=""
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted">Nao obrigatorio</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="" rows="3"></textarea>
                            <small id="helpId" class="form-text text-muted">Nao obrigatorio</small>
                        </div>


                    </div>
                    <div id="drop">
                        Drop Here

                        <a>Browse</a>
                        <input type="file" name="upl" multiple />
                    </div>

                    <ul>
                        <!-- The file uploads will be shown here -->
                    </ul>

                </form>

            </div>
        </div>
        <div class="footer py-4">
            <div class="container-fluid text-center">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved by <a href="https://mazedeve.com"
                        target="_blank">Mazedev</a>
                </p>
            </div>
        </div>

        <a href="{{ route('home') }}" class="float">
            <i class="fa-regular fa-image my-float"></i>
        </a>



    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/picturefill.min.js') }}"></script>
    <script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- JavaScript Includes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.knob.js') }}"></script>
    <!-- jQuery File Upload Dependencies -->
    <script src="{{ asset('js/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('js/upload.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>

</body>

</html>
