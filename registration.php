<!DOCTYPE html>

<html lang="en">

<?php include 'head.php' ?>
<style>
    .faq-card-body:hover{
        background-color:#fff;
    }
    .btn-link{
        text-decoration:none;
        color:#000;
    }
    .btn-link:hover{
        text-decoration:none;
        color:#fff;
    }
</style>

<body class="">

    <!-- Header -->
 <?php include 'header.php' ?>

    <!-- Hero -->
    
    <section style="margin-top:100px;">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2 class="text-center">REGISTRATION</h2>
    </div>
    </div>
  </div>
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $option = $_POST["option"];

    // File uploads
    $video = $_FILES["video"];
    $document = $_FILES["document"];

    // Email recipient
    $to = "rudraraazpatel@gmail.com";

    // Email subject
    $subject = "Contact Form Submission";

    // Email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Email body
    $body = "Name: $name\n";
    $body .= "Number: $number\n";
    $body .= "Email: $email\n";
    $body .= "Option: $option\n";

    // Upload directory
    $uploadDir = "uploads/";

    // Handle video upload
    if ($video["error"] == UPLOAD_ERR_OK) {
        $videoName = basename($video["name"]);
        move_uploaded_file($video["tmp_name"], $uploadDir . $videoName);
        $body .= "Video: $uploadDir$videoName\n";
    }

    // Handle document upload
    if ($document["error"] == UPLOAD_ERR_OK) {
        $documentName = basename($document["name"]);
        move_uploaded_file($document["tmp_name"], $uploadDir . $documentName);
        $body .= "Document: $uploadDir$documentName\n";
    }

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email sent successfully!</p>";
    } else {
        echo "<p>Email sending failed.</p>";
    }
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
<div class="container">
  
  <div class="form-row">
     <div class="col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="name" required><br>
    </div>
    <div class="col-md-6 mb-3">
        <label for="number">Last Name:</label>
        <input type="text" name="Last Name" required><br>
    </div>
  </div>

  <div class="form-row">
  <div class="col-md-4 mb-3">
         <label for="name">Team Name:</label>
        <input type="text" name="name" required><br>
  </div>
  <div class="col-md-4 mb-3">
  <label for="option">Choose Option:</label>
    <select name="option" required>
        <option value="Director">Director</option>
        <option value="Script Writer">Script Writer</option>
        <option value="Music Director">Music Director</option>
        <option value="Actor">Actor</option>
    </select><br>
  </div>
  <div class="col-md-4 mb-3">
        <label for="number">Number:</label>
        <input type="text" name="number" required><br>
  </div>
</div>
<div class="form-row">
  <div class="col-md-4 mb-3">
         <label for="name">Team Name:</label>
        <input type="text" name="name" required><br>
  </div>
  <div class="col-md-4 mb-3">
  <label for="option">Choose Option:</label>
    <select name="option" required>
        <option value="Director">Director</option>
        <option value="Script Writer">Script Writer</option>
        <option value="Music Director">Music Director</option>
        <option value="Actor">Actor</option>
    </select><br>
  </div>
  <div class="col-md-4 mb-3">
        <label for="number">Number:</label>
        <input type="text" name="number" required><br>
  </div>
</div>
<div class="form-row">
  <div class="col-md-4 mb-3">
         <label for="name">Team Name:</label>
        <input type="text" name="name" required><br>
  </div>
  <div class="col-md-4 mb-3">
  <label for="option">Choose Option:</label>
    <select name="option" required>
        <option value="Director">Director</option>
        <option value="Script Writer">Script Writer</option>
        <option value="Music Director">Music Director</option>
        <option value="Actor">Actor</option>
    </select><br>
  </div>
  <div class="col-md-4 mb-3">
        <label for="number">Number:</label>
        <input type="text" name="number" required><br>
  </div>
</div>
<div class="form-row">
  <div class="col-md-4 mb-3">
         <label for="name">Team Name:</label>
        <input type="text" name="name" required><br>
  </div>
  <div class="col-md-4 mb-3">
  <label for="option">Choose Option:</label>
    <select name="option" required>
        <option value="Director">Director</option>
        <option value="Script Writer">Script Writer</option>
        <option value="Music Director">Music Director</option>
        <option value="Actor">Actor</option>
    </select><br>
  </div>
  <div class="col-md-4 mb-3">
        <label for="number">Number:</label>
        <input type="text" name="number" required><br>
  </div>
</div>
<div class="form-row">
  <div class="col-md-12 mb-3">
    <label for="email">Email ID:</label>
    <input type="email" name="email" required><br>
  </div>
</div>
<div class="form-row">
  <div class="col-md-6 mb-3">
    <label for="email">Contact Number:</label>
    <input type="text" name="Number" required><br>
  </div>
  <div class="col-md-6 mb-3">
    <label for="email">City:</label>
    <input type="text" name="City" required><br>
  </div>
</div>
<div class="form-row">
   <div class="col-md-6 mb-3">
      <label for="video">Upload Video:</label>
      <input type="file" name="video"><br>
   </div>
   <div class="col-md-6 mb-3">
    <label for="document">Upload Document:</label>
    <input type="file" name="document"><br>
   </div>
</div>
<div class="form-row">
  <div class="col-md-4 mb-3">
     <input type="submit" name="submit" value="Send">
  </div>
</div>
</div>  
</form>
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