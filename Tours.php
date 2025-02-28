<?php

session_start();
include('config.php');
if(isset($_SESSION['id']) && isset($_SESSION['email'])){

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="tours.css">
</head>
<body>
    <section class="top_sec">
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
          <h3>
            <pre>
                Discover A Mesmerizing Nature 
                Landscape & Stunning Culture</pre>
          </h3>
        </div>
      </section>
 
  <section class="tour" id="tour">
    <div class="container">
        <div class="box">
            <img src="tropical-water-home-villas.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> korea</h3>
                <p>Discover Korea's Enchanting Fusion: Tradition and Innovation. Immerse in Seoul's vibrant energy, explore ancient palaces, and indulge in world-renowned cuisine</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
               <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="padar-island-labuan-bajo-indonesia.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i></h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>  
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="wat-benchamabophit-temple-in-bangkok-thailand-the-marble-temple-in-bangkok-e1687500082664.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> hawaii</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="woman-with-amazing-view-of-padar-island-in-komodo-national-park-indonesia-enjoying-tropical-e1687500365952.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> italy</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="pura-taman-saraswati-e1687500316374.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> japan</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="kelingking-beach-nusa-penida-bali-indonesia-1-1-e1687500287123.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> india</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="amazing-sunrise-in-mount-bromo (1).jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> korea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="lovely-pool-in-bali.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> korea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="pexels-tarek-hagrass-13420332.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>egypt</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="view-of-thai-traditional-longtail-boat-over-clear-sea-and-sky-in-the-sunny-day-e1687500260641.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> korea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="WhatsApp Image 2023-12-16 at 11.56.03_9866d20b.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> korea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <img src="WhatsApp Image 2023-12-16 at 11.56.03_785899cb.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> korea</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">$90.00 <span>$120.00</span></div>
                <a href="#" class="box_btn">Book Now</a>
            </div>
        </div>
    </div>
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

    <script src="project.js"></script>
</body>
</html>
<?php
}else{
    header('location:login.php');
}
?>