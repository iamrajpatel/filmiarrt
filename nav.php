<?php include 'head.php' ?>
<style>
  .navbar {
  background: #000;
  box-shadow: 0 4px 6px rgba(22, 22, 26, 0.18);
  height:100px;
}
.navbar-toggler{
    color:#fff;
}
span{
    color:#fff;
}
.navbar-brand img{
    width:80px;
}
.navbar .navbar-nav .nav-link {
  color: #fff;
}
.navbar .navbar-nav .nav-link:hover{
  color: #E0040B;
}
.btn-outline-dark {
  border-radius: 0;
}
.btn-outline-dark:focus {
  box-shadow: none;
}

@media screen and (max-width: 768px) {
  .btn-outline-dark {
    border: none;
    padding: 0;
    outline: none;
  }

  .btn-outline-dark:hover {
    background: none;
    color: gray;
  }
  .navbar .navbar-nav .nav-link {
  text-align:center;
}
}

</style>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">
        <img src="Assets/images/filmi art.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">Link</a>
        </li>
      </ul>
      <ul class="navbar-nav icons">
           
           <li class="nav-item social">
               <a href="#" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
           </li>
           <li class="nav-item social">
               <a href="#" class="nav-link"><i class="fa-brands fa-instagram"></i></a>
           </li>
           <li class="nav-item social">
               <a href="#" class="nav-link"><i class="fa-brands fa-youtube"></i></a>
           </li>
           <li class="nav-item social">
               <a href="#" class="nav-link"><i class="fa-brands fa-twitter"></i></a>
           </li>
       </ul>
    </div>
  </div>
</nav>

