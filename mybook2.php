

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="mybook.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ea31ab7a0.js" crossorigin="anonymous"></script>
  </head>
<body>

   
   <section class="top_sec">
        <img src="WhatsApp Image 2023-12-20 at 09.22.38_0dc9e077.jpg" class="book_img1" alt="">
        <img src="WhatsApp Image 2023-12-20 at 09.17.00_e9a35a17.jpg" class="book_img2" alt="">
        <nav class="navbar navbar-expand-lg mt-0">
          <div class="container">
            <a class="navbar-brand" href="Home.html">
              <h2>WanderLust</h2>
              <p>ADVENTAURE AT ITS BEST</p>
              </a>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <div>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex">
                  <a class="nav-link" aria-current="page" href="Home.html">Home
                      <i class="fa-solid fa-house"></i>
                  </a>
                </li>
                <li class="nav-item d-flex">
                  <a class="nav-link" href="About.html">About
                      <i class="fa-brands fa-envira"></i>
                  </a>
                </li>
                <li class="nav-item d-flex">
                  <a class="nav-link" href="Tours.html">Tours
                      <i class="fa-solid fa-plane"></i>
                  </a>
                </li>
                <li class="nav-item d-flex">
                   <div class="dropdown">
                      <button class="dropbtn">Pages
                        <i class="fa-solid fa-server"></i>
                      </button>
                      <div class="dropdown-content">
                      <a href="#gallery">gallery</a>
                      <a href="#FRQ">FRQ</a>
                      </div>
                    </div>
                  </li>
                <li class="nav-item d-flex">
                  <a class="nav-link" href="contact.html">Contact
                      <i class="fa-solid fa-paper-plane"></i>
                  </a>
                </li>
                <li class="nav-item d-flex" >
                    <a class="nav-link" href="book.html" >Books
                      <i class="fa-solid fa-ticket"></i>
                    </a>
                  </li>
              </ul>
          </div>
          <div class="d-flex">
            <a href="Login.html"><button class="button">Log In
          </button></a>
          <a href="Home.html"><button class="button">Register
          </button></a>
          </div>
          </div>
          </div>
        </nav>

    <div>
        <h3>We hope you return with <br> oceans of pleasant memories.</h3>
    </div>

  </section>

<section class="table_sec">
<img src="WhatsApp Image 2023-12-20 at 10.29.35_f48eadfe.jpg" class="tab_imd1" alt="">
<img src="WhatsApp Image 2023-12-20 at 10.29.35_f48eadfe.jpg" class="tab_imd2" alt="">
<h3>Your Reservations</h3>

<?php
    $zz=0;
    while($zz<=4){
        
        
        if($zz==0){
            echo'
            <table class="table table-hover table-responsive" style=" width: 70%;
            margin-left: 230px;
            margin-right: 150px;
            border: 2px solid rgb(224, 224, 224);
            margin-top: 150px;
            position: absolute;
            z-index: 1000;">
            <thead class="table-success">
                    <tr>
                    <th scope="col">number</th>
                    <th scope="col">name</th>
                    <th scope="col">trip_name</th>
                    <th scope="col">num_tictet</th>
                    <th scope="col">price</th>
                    <th scope="col">phone</th>
                    </tr>
                </thead>';
                
        }
        $zz++;
       
        
        echo"
        <table class='table table-hover table-responsive' style=' width: 70%;
        margin-left: 230px;
        margin-right: 150px;
        border: 2px solid rgb(224, 224, 224);
        margin-top: 150px;
        position: absolute;
        z-index: 1000;'>
                <tbody>
                    <tr>
                    <th scope='row'>1</th>
                    <td>mostafa</td>
                    <td>qqqqqqq</td>
                    <td>15</td>
                    <td>100$</td>
                    <td>01229138</td>
                    </tr>
                </tbody>
                </table>
                ";
        

    }
    ?>

</section>

<div class="d-flex flex-column footer_body ">
    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1">WanderLust</h5>
                    <p >Time To Travel Is Time To Live.</p>
                    <p class="mb-0">&copy; Copyrights. All rights reserved. <a class="link_text" href="http://www.wanderlust-travel.net/">wanderlust-travel</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Pages</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="Home.html">Home</a></li>
                        <li><a href="About.html">About</a></li>
                        <li><a href="Tours.html">Tours</a></li>
                        <li><a href="FAQ.html">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Payment methods</h5>
                    <ul class="list2 text-muted">
                        <li><a href="#"><i class="fa-brands fa-cc-visa fa-2xl"></i></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-cc-paypal fa-2xl"></i></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-cc-mastercard fa-2xl" ></i></a></li>
                    </ul>
                    <h5 class="text-white mb-3">Social Links</h5>
                    <ul class="list2 text-muted">
                        <li><a href="#"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter fa-xl"></i></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>