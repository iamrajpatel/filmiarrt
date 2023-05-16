<!DOCTYPE html>

<html lang="en">

<?php include 'head.php' ?>

<body class="theme-mode-dark">

    <!-- Header -->
 <?php include 'header.php' ?>

    <!-- Hero -->
    
<!-- ------ -->
  <!-- footer -->
 <?php include 'footer.php' ?>
  <!-- --------- -->
    <!-- Footer -->
   

    <!-- #region Global ============================ -->

    <!-- Modal [search] -->
    <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    Search <i class="icon-close"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>What are you looking for?</h2>
                                    <p>Search for services and news about the best that happens in the world.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button"><i class="icon-magnifier"></i>SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [sign] -->
    <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    Sign In Form <i class="icon-close"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Sign In</h2>
                                    <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button"><i class="icon-login"></i>LOGIN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [register] -->
    <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    Register Form <i class="icon-close"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Register</h2>
                                    <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button"><i class="icon-rocket"></i>REGISTER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [responsive menu] -->
    <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    Menu <i class="icon-close"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                        <div class="contacts p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll [to top] -->
    <div id="scroll-to-top" class="scroll-to-top">
        <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
    </div>

    <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

    <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <!-- JavaScript -->
    <script src="js/script.js"></script> 
    <!-- javaScript end -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/jquery.easing.min.js"></script>
    <script src="assets/js/vendor/jquery.inview.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/ponyfill.min.js"></script>
    <script src="assets/js/vendor/slider.min.js"></script>
    <script src="assets/js/vendor/animation.min.js"></script>
    <script src="assets/js/vendor/progress-radial.min.js"></script>
    <script src="assets/js/vendor/bricklayer.min.js"></script>
    <script src="assets/js/vendor/gallery.min.js"></script>
    <script src="assets/js/vendor/shuffle.min.js"></script>
    <script src="assets/js/vendor/cookie-notice.min.js"></script>
    <script src="assets/js/vendor/particles.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- #endregion Global ========================= -->

</body>

</html>