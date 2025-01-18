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
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/9ea31ab7a0.js" crossorigin="anonymous"></script>
    <style>

.top_sec{
  width: 100%;
  margin: auto;
  position: relative;
  background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),url('amazing-sunrise-in-mount-bromo (1).jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  top: 0;
  height: 80vh;

}
nav{
  position: absolute;
  top:15px;
}
.navbar-brand h2:hover{
    color: rgb(231, 200, 163);
}
.nav-item a:hover{  
    color: rgb(231, 200, 163);
}
.dropbtn:hover{
  color: rgb(231, 200, 163);
}
.button {
    background: rgb(255, 255, 255);
    color: rgb(0, 0, 0);
    border-radius: 45%;
    border-bottom: 2px solid rgb(102, 69, 40);
    border-right: 2px solid rgb(105, 74, 40);
    border-top: 2px solid beige;
    border-left: 2px solid beige;
 
   }
   
.button:hover {
    border-top: 2px solid  rgb(105, 74, 40);
    border-left: 2px solid  rgb(105, 74, 40);
    border-bottom: 2px solid bisque;
    border-right: 2px solid bisque;
    box-shadow: rgba(98, 61, 24, 0.4) 5px 5px, rgba(188, 140, 72, 0.3) 10px 10px, rgba(124, 35, 12, 0.2) 15px 15px;
   }
.top_sec h3{
  position: absolute;
  bottom:20vh;
  left: 70px;
  font-weight: bolder;
  font-size: 45px;
  line-height: 1.5;
  font-family:Georgia, 'Times New Roman', Times, serif;
  color: rgb(238, 223, 223);
  text-shadow: 0 1px 2px rgba(0,0,00.1);


}
.top_sec .contact_icons{
  position: absolute;
  bottom:18vh;
  right: 100px;
  font-weight: bolder;
  font-size: 37px;
  display: flex;
  flex-direction: column;
  

}
.top_sec .contact_icons a{
  text-decoration: none;
  color:whitesmoke;
  line-height:1.8;
}

.top_sec .contact_icons a :hover{
  color: rgb(231, 200, 163);
}
.section-title{
            text-align:start;
            padding: 10px 0px;
        }
.section-title h3{
            font-size: 35px;
            text-transform: uppercase;
            font-family:Georgia, 'Times New Roman', Times, serif;
            font-weight: 700;
            text-shadow: 0 1px 2px rgb(98, 57, 57);
}
.section-title h3 span{
            color: rgb(92, 81, 81);
        }
        
.contact-area{
            margin-top: 100px;
            height: 100vh;
        }
.contact-form{
            background-color:rgb(244, 244, 242);
            box-shadow:rgba(0,0,00.3) 0 5px 12px;
            padding: 35px 25px;
        }

.btn-form {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: rgb(92, 81, 81);
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 17px;
}

.sign svg path {
  fill: white;
}
/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.btn-form:hover {
  width: 125px;
  border-radius: 40px;
  transition-duration: .3s;
}

.btn-form:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.btn-form:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.btn-form:active {
  transform: translate(2px ,2px);
}
.map-area{
   width: 600px; 
   height: 525px;
   background-color: aliceblue;
   box-shadow:rgba(0,0,00.35) 0 5px 15px;
}
.map-area iframe{
    width: 100%;
    height: 100%;
    border: none;
}
@media (max-width: 990px) 
{
    .contact-form{
        margin-bottom: 28px;
    }
    .map-area{
        width: 100%;
        height: 400px;
    }
    .top_sec h3{
      font-size:35px;
    }
    .top_sec .contact_icons a{
      display: none;
    }

}

.footer_body{
  margin-top: 100px;
}
</style>
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
            <!-- <a class="nav-link" href="gallery.html">pages 
                   <i class="fa-solid fa-server"></i>
                 </li> --></a>
             <div class="dropdown">
                <button class="dropbtn">Pages
                  <i class="fa-solid fa-server"></i>
                </button>
                <div class="dropdown-content">
                <a href="#gallery">gallery</a>
                <a href="#FRQ">FRQ</a>
                </div>
              </div></a>
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
    Contact Us & Get
     Special Promo</pre>
    </h3>
  </div>
  <div class="contact_icons">
   <a href="#"><i class="fa-brands fa-facebook"></i></a> 
   <a href="#"><i class="fa-brands fa-instagram "></i></a> 
   <a href="#"><i class="fa-brands fa-x-twitter "></i></a> 
   </div>
</section>
   <div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-8 col-xs-6">
               <div class="section-title">
                <h3>Get<span> Closer</span>  With Us</h3>
               </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">UserName</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name ">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="your number">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                      </div>
                      <button class="btn-form">
                        <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                        <div class="text">send</div>
                      </button>
   
                    </form>
                    </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="map-area">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13806.997491017635!2d31.3727315!3d30.1013634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458166b49cd8643%3A0x55d541d46994e361!2sWanderlust%20Travel!5e0!3m2!1sar!2seg!4v1702471398720!5m2!1sar!2seg" width="600" height="450" 
                  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
   </div>

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
<?php
}else{
    header('location:login.php');
}
?>