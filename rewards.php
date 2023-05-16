<!DOCTYPE html>

<html lang="en">

<?php include 'head.php' ?>
<style>
   .img{
    width:300px;
   }
   .li-circal{
    font-size:20px;
    font-weight:300px;
   }
   ol {
  max-width: 80%;
  counter-reset: my-awesome-counter;
  list-style: none;
  padding-left: 40px;
}
ol li {
  margin: 0 0 3.5rem 0;
  counter-increment: my-awesome-counter;
  position: relative;
}
ol li::before {
  content: counter(my-awesome-counter);
  color: #ffff;
  font-size: 1.5rem;
  font-weight: bold;
  position: absolute;
  --size: 50px;
  left: calc(-1 * var(--size) - 10px);
  line-height: var(--size);
  width: var(--size);
  height: var(--size);
  top: 0;
  /* transform: rotate(-10deg); */
  background: black;
  border-radius: 50%;
  text-align: center;
  box-shadow: 1px 1px 0 #999;
}


</style>

<body class="">

    <!-- Header -->
 <?php include 'header.php' ?>

    <!-- Hero -->
<section style="margin:10px 0 0 0;" >
    <div class="continer">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="margin-bottom:30px">JUDGE</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center" style="padding:0 200px;" >
            <div class="col-md-12">
                <div class="" >
                   
                    <ol class="ul-circal">
                        <li class="li-circal"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</span></li>
                        <li class="li-circal"><span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</li>
                        <li class="li-circal"><span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</li>
                        <li class="li-circal"><span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</li>
                        <li class="li-circal"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</span></li>
                        <li class="li-circal"><span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</li>
                        <li class="li-circal"><span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</li>
                        <li class="li-circal"><span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nesciunt.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- ------ -->
  <!-- footer -->
 <?php include 'footer.php' ?>
  <!-- --------- -->
    <!-- Footer -->
   

    <!-- #region Global ============================ -->

    <!-- Modal [search] -->
   

    <!-- Modal [sign] -->
    

    <!-- Modal [register] -->
   

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