<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>e-Rapor|SMKTH</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/frontend/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/frontend/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/frontend/plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/frontend/plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/frontend/plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/frontend/plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="<?= base_url(); ?>/assets/frontend/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/frontend/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?= base_url(); ?>/assets/frontend/images/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="<?= base_url(); ?>/assets/frontend/images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <header class="fixed-top header">
        <!-- top header -->
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li> -->
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
                            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="index.html"><img src="<?= base_url(); ?>/assets/frontend/images/logo.png" alt="logo" width="60px"></a>
                    <!-- <button data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" > -->
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    </button>
                    <h3 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">SMK Terpadu Hadziqiyyah</h3>


                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li><?= esc($value) ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-warning" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    } ?>

                    <?php
                    if (session()->getFlashdata('Sukses')) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    } ?>
                    <?= form_open('auth/cek_login') ?>
                    <div class="input-group mb-3">
                        <input name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="far fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="level" class="form-control">
                            <option value="">Hak Akses</option>
                            <option value="1">Admin</option>
                            <option value="2">Wali Kelas</option>
                            <option value="3">Guru</option>
                            <option value="4">Siswa</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>

    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="<?= base_url(); ?>/assets/frontend/images/banner/biground.jpg">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->



    <!-- footer -->
    <footer>
        <!-- copyright -->
        <div class="copyright py-4 bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-sm-left text-center">
                        <p class="mb-0">Copyright
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>
                            © <a href="https://smkth.sch.id">SMK Terpadu Hadziqiyyah</a>
                        </p>
                    </div>
                    <div class="col-sm-5 text-sm-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/venobox/venobox.min.js"></script>
    <!-- filter -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- google map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> -->
    <script src="<?= base_url(); ?>/assets/frontend/plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="<?= base_url(); ?>/assets/frontend/js/script.js"></script>

</body>

</html>