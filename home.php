<?php

session_start();
include('config.php');
if(isset($_SESSION['id']) && isset($_SESSION['email'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wanderlust-travel</title>
    <link rel="stylesheet" href="">
    <script src="https://kit.fontawesome.com/9ea31ab7a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
<section class="main_sec">
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container">
          <a class="navbar-brand" href="Home.html">
            <div>
            <h2>WanderLust</h2>
            <p>ADVENTAURE AT ITS BEST</p></div>
            </a>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <div class="list">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mr-auto">
              <li class="nav-item d-flex">
                <a class="nav-link active" aria-current="page" href="Home.html">Home
                    <i class="fa-solid fa-house"></i>
                </a>
              </li>
              <li class="nav-item d-flex">
                <a class="nav-link" href="#about">About
                    <i class="fa-brands fa-envira"></i>
                </a>
              </li>
              <li class="nav-item d-flex">
                <a class="nav-link" href="#Tours">Tours
                    <i class="fa-solid fa-plane"></i>
              
              </li>
              <li class="nav-item d-flex">
              <a href=""><div class="dropdown">
                <button class="dropbtn">Pages
                  <i class="fa-solid fa-server"></i>
                </button>
                <div class="dropdown-content">
                <a href="#gallery">gallery</a>
                <a href="#FRQ">FRQ</a>
                </div>
              </div></a> 
            </li>
              <li class="nav-item d-flex" >
                <a class="nav-link" href="#contact" >Contact
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
        <a href="register.html"><button class="button">Register
        </button></a>
        </div>
        </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pexels-alex-azabache-3185490.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Zakynthos</h5>
              <p>Explore The Majestic Landscape Now.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pexels-grafixartphoto-samir-belhamra-4254556.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>ًwaves rock ocean</h5>
              <p>Explore The Majestic Landscape Now.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pexels-pok-rie-613826.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Maldives Islands</h5>
              <p>Explore The Majestic Landscape Now </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon d-none d-md-block" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon d-none d-md-block" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

<section class="enjoy d-flex">
<div class="left">
  <div class="head_des">
  <h2>Experience The <br> New 
    Adventure <span>&#128746;</span></h2>
  <p>Always say yes to new adventures.
    Traveling,it leaves <br> you speechless,then turns you into a storyteller.</p>
</div>
  <div class="icons_left">
    <div class="box_icon">
      <div class="icon_enjoy">
        <i class="fa-solid fa-shield-halved fa-lg"></i>
      </div>
      <div class="icon_des">
        <h3>Safe Traveling</h3>
        <p>Keep your travel plans, including accommodation details, <br> to yourself.</p>
      </div>
    </div>
    <div class="box_icon">
      <div class="icon_enjoy">
        <i class="fa-solid fa-money-bill-wave fa-lg"></i>
      </div>
      <div class="icon_des">
        <h3>Affordable Price</h3>
        <p>Having a cost that is not too high.</p>
      </div>
    </div>
    <div class="box_icon">
      <div class="icon_enjoy">
        <i class="fa-solid fa-door-closed fa-lg"></i>
      </div>
      <div class="icon_des">
        <h3>Comfort Accommodation</h3>
        <p>It makes you feel physically relaxed when you spend time in it.</p>
      </div>
    </div>
  </div>
</div>

<div class="right">
  <img src="pexels-fabian-wiktor-994605.jpg" alt="">
  <div class="iframes">
    <iframe width="180" height="150" class="iframe1" src="https://www.youtube.com/embed/ioYqFtr2D0Q?si=y6yW9v2YfJx5EDOT" title="YouTube video player" frameborder="0" allow="accelerometer; 
    autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="180" height="150" class="iframe2" src="https://www.youtube.com/embed/MLpWrANjFbI?si=rS9_W5yGErfg9lBF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
     encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
</div>
</section>

<section class="tours" id="Tours">
  <div>
  <h3>Discover The World</h3>
  <img src="WhatsApp Image 2023-12-18 at 18.24.06_a5c3c252.jpg" class="back_ground1" alt="">
  <img src="WhatsApp Image 2023-12-18 at 18.14.29_4c7cc3e9.jpg" class="back_ground2" alt=""></div>
 <div class="row row-cols-3 row-cols-md-3">
    <div class="col">
      <div class="card">
        <img src="pexels-photo-3560024.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Italy</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="Tours.html" class="card_btn">More Details</a>   
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card ">
        <img src="pexels-tarek-hagrass-13420332.jpg" width="900px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Egypt</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="Tours.html" class="card_btn">More Details</a>         
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="pexels-pierre-blaché-2901212.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">france</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="Tours.html" class="card_btn">More Details</a>        
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="pexels-photo-4388167.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Amman</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="Tours.html" class="card_btn">More Details</a>       
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card ">
        <img src="pexels-sunil-poudel-2758567.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jaban</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="Tours.html" class="card_btn">More Details</a>         
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Mysore-Flickr.jpg.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">India</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="Tours.html" class="card_btn">More Details</a>         
        </div>
      </div>
    </div>
  </div>
</section>

<section class="FRQ" id="FRQ">
  <h2>Enjoy Our Best Quality <br>Tour & Experience</h2>
  <img src="WhatsApp Image 2023-12-19 at 00.58.18_f039be71.jpg" class="FRQ_backimg1" alt="">
  <img src="WhatsApp Image 2023-12-19 at 01.24.15_bf4957a1.jpg" class="FRQ_backimg2" alt="">
  <img src="WhatsApp Image 2023-12-19 at 01.24.15_f26983de.jpg" class="FRQ_backimg4" alt="">
  <img src="WhatsApp Image 2023-12-19 at 01.24.15_2ab10ee1.jpg" class="FRQ_backimg3" alt="">
  <div class="questions">
  <div class="questions_left">
  <details>
    <summary>1. What to prepare trip to Asia?</summary>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </details><hr>
  <details>
    <summary>2. What document you need before go to asia?</summary>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </details> <hr>
  <details>
    <summary>3. How to scheduling Asia trip itinerary?</summary>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </details>
  </div>
  <div class="questions_right">
  <details>
    <summary>4. 8 Website must read before your trip?</summary>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </details> <hr>
  <details>
    <summary>5. This is the best budget you need to prepare?</summary> 
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </details> <hr>
  <details>
    <summary>6. This site give you the information about travel to Asia?</summary> 
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </details>
</div>
</div>
</section> 

<section class="container_fluid" id="gallery">
  <h2>Our Gallery &hearts;</h2>
  <div class="container_gallery">
    <div id="slide">
        <div class="item" style="background-image: url(island-3542290_1280.jpg);">
            <div class="content">
                <div class="name">Heart Island</div>
                <div class="des">Vacation calories don’t count. Right?</div>         
            </div>
        </div>
        <div class="item" style = "background-image: url(pexels-david-bartus-586687.jpg);">
            <div class="content">
                <div class="name">Italy</div>
                <div class="des">A ship in a harbor is safe, but it not what ships are built for.</div>
            </div>
        </div>
        <div class="item" style = "background-image: url(pexels-tarek-hagrass-13420332.jpg);">
            <div class="content">
                <div class="name">Egypt</div>
                <div class="des">Traveling,it leaves you speechless, then turns you into a storyteller.</div>
            </div>
        </div>
        <div class="item" style="background-image: url(HiddenBeach.jpg);">
          <div class="content">
              <div class="name">Philippines</div>
              <div class="des">Always say yes to new adventures.</div>
              
          </div>
      </div>
        <div class="item" style="background-image: url(pexels-efrem-efre-18881261.jpg);">
            <div class="content">
                <div class="name">Turkiye</div>
                <div class="des">A journey of a thousand miles begins with a single step.</div>
               
            </div>
        </div>
        <div class="item" style="background-image: url('WhatsApp Image 2023-12-15 at 07.41.27_4ff79529.jpg');">
          <div class="content">
              <div class="name">Egypt</div>
              <div class="des">Traveling,it leaves you speechless, then turns you into a storyteller.</div>
             
          </div>
      </div>
        <div class="item" style = "background-image: url(pexels-oliver-sjöström-931007.jpg);">
          <div class="content">
              <div class="name">Indonesia </div>
              <div class="des">Traveling,it leaves you speechless, then turns you into a storyteller.</div>
          </div>
      </div>
        <div class="item" style="background-image: url(petra-jordan-treasury-trail_unsplash_1365x1745.png);">
            <div class="content">
                <div class="name">petra jordan</div>
                <div class="des">Life is either a daring adventure or nothing at all.</div>
            
            </div>
        </div>
        <div class="item" style="background-image: url(c.avif);">
            <div class="content">
                <div class="name">France</div>
                <div class="des">Travel is about the gorgeous feeling of teetering in the unknown</div>
                
            </div>
        </div>
        <div class="item" style="background-image: url(pexels-oleksandr-p-2070485.jpg);">
            <div class="content">
                <div class="name">India</div>
                <div class="des">Live life with no excuses, travel with no regret</div>
               
            </div>
        </div>
        
    </div>
    <div class="buttons">
        <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
        <button id="next"><i class="fa-solid fa-angle-right"></i></button>
    </div>
  </div>
</section>

<section class="about_us" id="about">
  <div class="left_about">
<img src="WhatsApp Image 2023-12-16 at 11.56.03_7319246f.jpg" class="about_img1" alt="">
<img src="dhammayazika-pagoda-bagan-pagan-buddhist-temples-and-ancient-city-myanmar-burma--e1687500176351.jpg" class="about_img4" alt="">
<img src="WhatsApp Image 2023-12-16 at 11.56.03_254d314c.jpg" class="about_img3" alt="">
  </div>
  <div class="right_about">
    <h1>About Us</h1>
    <p>
       At Wander Lust, we are passionate about creating unforgettable travel experiences. As a premier provider of travel services, we specialize in curating unique adventures that immerse travelers in the rich tapestry of cultures, landscapes, and histories across the globe.
    </p>
    <h1>Our Mission</h1>
       <p>Our mission is simple: to inspire and empower travelers to explore the world with confidence. We strive to deliver exceptional service, unparalleled expertise, and personalized attention to ensure that every journey exceeds expectations.</p>
    <h1>Our Experience</h1>
      <p>  Our team comprises seasoned travel enthusiasts with extensive knowledge and expertise in crafting bespoke travel itineraries.<br>
        Tailored Experiences: We understand that every traveler is unique. </p>

  </div>
</section>

<section class="review" id="review">
<div class="swiper review-slider">
  <div class="swiper-wrapper">
    <div class="swiper-slide box">
      <img src="images.jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>David</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star-half-stroke"></i>
         </div>
    </div>
    <div class="swiper-slide box">
      <img src="images (4).jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>Wilson</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
         </div>
    </div>
    <div class="swiper-slide box">
      <img src="images (5).jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>Sarah</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
         </div>
    </div>
    <div class="swiper-slide box">
      <img src="images (3).jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>Jessica</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star-half-stroke"></i>
         </div>
    </div>
    <div class="swiper-slide box">
      <img src="images (1).jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>Oscar</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star-half-stroke"></i>
         </div>
    </div>
    <div class="swiper-slide box">
      <img src="images (2).jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>Olivia</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          
         </div>
    </div>
    <div class="swiper-slide box">
      <img src="download (2).jpeg" alt="">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda voluptatibus saepe corrupti unde officiis repudiandae</p>
         <h3>Smith</h3>
         <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-regular fa-star-half-stroke"></i>
         </div>
    </div>
  </div>
</div>
</section> 

<section class="contact-us_sec" id="contact">
<h2><pre>Contact Us & Get
  Special Promo</pre></h2>
  <p>Always say yes to new adventures.</p>
   <a href="contact.html">
    <button class="cont_btn"> Contact Us</button>
   </a>

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


<script src="script.js">
</script>
<script src="bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".review-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 1,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

</body>
</html>  

<?php
}else{
    header('location:login.php');
}
?>