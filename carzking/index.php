<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- This is For SEO -->

<title>car s | second hand cars | used car prices | used cars | used cars for sale | car prices | used cars near me | car best | car sale | 2nd hand car | buy used car</title>

<meta name="description" itemprop="description" content="Carz King - Buy used cars from a wide range of cars and at a very cheap price. We have many used cars for sale online. Get best car prices and book your car today">

<meta name="keywords" itemprop="keywords" content="car s,second hand cars,used car prices,used cars,used cars for sale,car prices,used cars near me,car best,car sale,2nd hand car,buy used car, buy a car,showroom cars,used cars for sale online,cars car,best online car buying sites">

<!-- This is An End -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- This is An End -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/ec3a451c3a.js" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="home.css">
</head>

<style>
  
  body{
    overflow-x: hidden;
  }

nav{
  text-decoration: none;
  font-style: none;
  width:100% !important;
  display: flex;
  flex-direction: row;
  background: white;
  height: 65px;
  border-bottom: 2px solid #f6f4f8;
}

nav img{
  width:25%;
  height: 63px;
}

nav ul{
  display: flex;
  flex-direction: row;
  margin-left: 30rem;
}

nav ul li{
  height: 65px;
  list-style: none;
  display: inline-block;
  font-size: large;
  margin-left: 1.7rem;
  font-weight: 500;
}


nav ul li a{
  height: 100%;
  padding: 2px;
  padding-bottom: 17px !important;
  color: grey;
  text-decoration: none;
  font-weight: 600;
  font-size: 20px;
  height: cover !important;
  line-height: 90px !important;
  cursor: pointer;
  transition: 0.2ms;
}

nav ul li i{
  color: grey;
}

nav ul li a:hover{
  color: black;
  text-decoration: none;
}


.active{
  color: black;
}

#signin{
  cursor: pointer;
  margin-left: 30rem;
  border-bottom: 3px solid rgb(255, 138, 96);

}

#signin:hover{
  color: black;
  border-bottom:  3px solid rgb(255, 138, 96);
}


/* This is My Scroll To Top Button */
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #0a5eb1; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 20px; /* Some padding */
    border-radius: 8px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
    border: 2px solid #0a5eb1;

  }
  
  #myBtn:hover {
    background-color: #ffffff;
    color: #0a5eb1; /* Add a dark-grey background on hover */
    border: 2px solid #0a5eb1;
  }
  

.toggle{
    height: 80%;
    display: none;
    margin: auto;
    margin-right: 20px;
    float: right;
    border-radius: 4px;
    background: #f5f5f5;
padding: 5px 15px;
}

.toggle i{
    line-height: 45px;
    color: grey;
    font-size: 30px;
    cursor: pointer;
}
/* This is My Path */



    .path{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    height: 4rem;
    border-bottom: 1.7px solid lightgrey;
    cursor: pointer;
    padding: 0px 20px;
}

.path p{
    line-height: 4rem;
    color: darkslategrey;
}

.path span{
    line-height: 4rem;
    color: lightslategrey;
}

.path i{
    line-height: 4rem;
    margin: 0px 10px;
}

.fa-house-chimney{
    color: slateblue;
}

/* This is An End */

.r_all{
  flex-direction: row;
  flex-wrap: wrap;
  padding: 25px;
  cursor: pointer;
  display: none;
}
  .test{
    margin: 10% auto;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 25px;
    justify-content: center;
    background: linear-gradient(164deg, #f7f8fd 50%, transparent 50%);

  }

  .test h1{
    font-weight: 600;
    text-align: center;
    width: 100%;
    color: slateblue;
    font-size: 34px;
    margin-bottom: 2rem;
  }

  .test p{
    color: slategray;
    font-size: 20px;
    margin-bottom: 3rem;
    width: 100%;
    text-align: center;
  }

  .test .test-inner{
    width: 25%;
    margin-right: 4rem;
    margin-top: 4rem;
    height: fit-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    background: white;
    border-radius: 8px;
    padding: 10px 20px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    cursor: pointer;
  }

  .test .test-inner img{
    width: 30%;
    margin: auto;
    margin-bottom: 1.5rem;
    height: 40%;
    border-radius: 50%;
  }

  .test .test-inner span{
    color: lightslategrey;
    margin-top: 1rem;
    font-size: 16px;
  }

  .btn_test{
    margin-top: 7rem;
    width: 100%;
    height: fit-content;
    text-align: center;
    justify-content: center;
  }
  .btn_test a{
    border: 2px solid darkslategray;
    color: white;
    padding: 10px 60px;
    font-weight: 500;
    outline: none;
    background: darkslategray;
    width: 400px;
    margin: auto;
    height: 5rem;
  }
.contact{
  width:100%;
    margin: auto;
    margin-top: -10rem;
    height: fit-content;
    padding: 10px;
    position: relative;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
    background: white;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}


/* This is My Cars Showing section */
/* This Are My Cars Data For My Boxes */

.table{
  width: 1200px;
  height: fit-content;
  overflow: scroll;
  margin: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

table{
  width: 97%;
  margin: 10% auto;
}

table thead{
color: white;
background: tomato;
}

.table table thead tr th{
  padding: 10px 20px;
}

.table table tbody tr td{
  padding: 30px 20px;
  color: darkslategrey;
  border-bottom: 1.7px solid lightgrey;
  border-collapse: collapse;
}

table tbody tr:hover{
  cursor: pointer;
  background: #f6f4f8;
}
/* This is An End */

.view_all{
  width: 100%;
}

.view_all a{
  background: tomato;
  color: white;
  height: 3.5rem;
  
  border: 2px solid tomato;
  border-radius: 5px;
}

/* This is An End */
.accordion-item{
  height: fit-content;
}

.accordion-header h2 {
  font-size: 22px;
}

.accordion-button{
  height: 5rem;
  font-size: 20px;
  color: #fff;
  background: #0ab12e;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.accordion-body{
  font-size: 18px;
}


/* This is My Accordion */

div + div {
    clear: both;
}

p {
    line-height: 1.4em;
    color: #9e9e9e;
}

.faq-title {
    font-size: 2em;
    margin: 0.4em 0;
}

div.seperator {
    width: 7.5em;
    background-color: #0ab12e;
    height: 0.17em;
    margin-left: -1.8em;
}

.faq-list > div {
    border-bottom: 0.07em solid #ededed;
    padding: 1.5em 0em;
} 

.faq-list > div:last-child {
    border: unset;
}

details > summary {
    list-style: none;
}
details > summary::-webkit-details-marker {
    display: none;
}

summary {
    font-size: 1.4em;
    font-weight: bold;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none; 
    user-select: none;
    transition: all 0.3s ease;
}

summary:hover {
    color: #0ab12e;
}

details[open] summary ~ * {
    animation: sweep .5s ease-in-out;
}

@keyframes sweep {
    0%    {opacity: 0; margin-left: -10px}
    100%  {opacity: 1; margin-left: 55px}
}

details[open] summary {
    color: #0ab12e;
}

details[open] p {
    border-left: 2px solid #0ab12e;
    margin-left: 10px;
    padding-left: 15px;
    opacity: 100;
    transition: all 3s ease;
}

details[open] summary:after {
    content: "-";
    font-size: 3.2em;
    margin: -33px 0.35em 0 0;
    font-weight: 200;
}

.faq-body {
    width: 97%;
    margin: 4em auto;
    border-radius: 4px;
    border-radius: 0.2em;
    background-color: #fff;
    border: 2px dashed lightgrey;
    border-radius: 8px;
}

.faq-list {
    width: 80%;
    margin: 1em auto;
    padding: 2em 0;
}

summary::-webkit-details-marker {
    display: none;
}

summary:after {
    background: transparent;
    border-radius: 0.3em;
    content: "+";
    color: #0ab12e;
    float: left;
    font-size: 1.8em;
    font-weight: bold;
    margin: -0.3em 0.65em 0 0;
    padding: 0;
    text-align: center;
    width: 25px;
}




/* This is An End */


  /* These Are My Media Queries */
  @media screen and (max-width: 760px){
    
  .why .why_right{
    width: 100%;
    margin: auto;
    margin-bottom: 10rem;
    height: fit-content;
    float: center;
  }

  .repair{
    margin-top: 60rem;
  }

  .gal{
    height: 123vh;
  }

  .test .test-inner{
    width: 50%;
  }



  /* This is My Footer */

  footer{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

 footer .footer1{
    width: 100%;
  }

  .footer1 p{
    width: 100%;
  }

  .footer2{
    width: 100%;
  }

  .footer3{
    width: 100%;
  }


}

@media screen and (max-width: 425px){
  .test .test-inner{
    width: 90%;
    margin: 5% auto;
  }
  .contact{
    margin-top: 50rem;
  }

  .contact i{
    padding: 5px;
  }

  .what .what_inner{
    width: 97%;
    margin-bottom: 2rem;
  }

  .slide1{
    width: 90%;
    margin: auto;
    height: fit-content;
    margin-left: 2rem;
    position: relative;
    margin-top: 0rem;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

  .why_left img{
height: 60vh;
  }

  .gal{
    height: 140vh;
  }

  .repair{
    margin-top: 75rem;
  }

  .r_in{
    width: 100%;
    margin: 3% auto;
  }

  

}

@media screen and (max-width: 320px){
  .repair{
    margin-top: 110rem;
  }


}





@media screen and (max-width: 1024px){
  main{
      height: fit-content;
      padding-bottom: 20px;
  }

  .fa-bars{
      display: block;
  }

  .toggle{
   right: 0rem;
   position: relative;
   display: block;
  }


  nav ul{
      display: flex;
      height: 100vh;
      position: absolute;
      width: 100%;
      margin-left: -100%;
      float: left;
      justify-self: left;
      border-right: 2px solid #f6f4f8;
      background-color: rgb(254, 255, 254);
      flex-direction: column;
  }

  nav ul li{
      margin-top: 1rem;
      border-left: 2px solid #f6f4f8;
      padding: 10px 15px;
      border-bottom: none;
  }

  nav ul li:hover{
      color: #262626;
  }

  nav ul li a:hover{
      border-bottom: none;
  }

  .active{
      border-bottom: none; 
  }

  #active{
      border-bottom: none;
      color: black;

  }

  #signin{
      margin-left: 0rem;
  }

  #signin:hover{
      border-left: none;
  }

}


</style>
<body>

  <!-- This is My Header -->
      
  <nav id="navbar" style="height: 90px;">
    <img src="services/logo.jpg" alt="none" style="margin: 1%;">


    <ul id="nav">



        <li id="active"><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="services.html">Our Services</a></li>
        <li><a href="gallery.php?search=&submit=%2Fsearch">Preowned Cars</a></li>
        

    </ul>



    <div class="toggle">
        <i class="fa-solid fa-bars" id="open"></i>
        <i class="fa-solid fa-xmark" id="close" style="display: none;"></i>

    </div>
</nav>


<!-- This is My Path From My Home page -->
<div class="path">
  <a href="index.php"><i class="fa-solid fa-house-chimney"></i></a>
<p>Home</p>

</div>
<!-- This is My End -->

  <!-- This is An End -->


  <!-- This is My Prloader -->
  <!-- This is An End -->


  <!-- This is My Main Section -->
  <main>
   



    <div class="main" id="main">
      <!-- Slideshow container -->
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="images/comp_cars1.jpg" class="d-block w-100" alt="none" 
            style="width: 100%; 
            height: 100vh;">
        
            <div class="slide1">
              <h1>Cars Are Our Passion !</h1>
              <p>Get best Quality assured cars from our place. For more details 
                check out our <a href="gallery.php?search=&submit=%2Fsearch">gallery</a> to get your desired car. Hover from
                <b>18+</b> cars brands and book a slot to purchase your desired car !
              </p>
            </div>

          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/comp_cars2.jpg" class="d-block w-100" alt="none" 
            style="width: 100%; height: 100vh;">
          
            <div class="slide3">
              <h1>Wanna Buy a Car ?</h1>
              <p>We provide all kinds of Insurance from <b>20+</b> companies. Get your Loan approved on One shot and 
                have a ride on your desired Car. <a href="index.php">Carz King </a> 
                is with you whether buying, insuring, repairing,
                car washing, Loan approving. The <b>Second Home</b> for car Exclusively in Ahmedabad. 
                Please Have a Visit Today...

              </p>

              
              <div style="width: 100%; text-align: left;">
                <a href="contact.php" style="margin-right: 2.5rem;">Contact Us</a>
                <a href="gallery.php?search=&submit=%2Fsearch">Car Gallery</a>
               </div>
            </div>
          
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/comp_cars3.jpg" class="d-block w-100" alt="none" 
            style="width: 100%; height: 100vh;">
             
            <div class="slide2">
              <h1>Doctor for Cars</h1>
              <p>We provide all kinds of repair work. Don't worry ! the doctor for cars is here. 
                We make sure to repair your car into a new brand luxury. Visit our workshop for 
                all kinds of accidental repair or call us to tow your car from the place of incident.

                <fieldset  style="margin-top: 2rem; font-size: 20px;"><i class="fa-solid fa-phone"></i>+91 95126 17191 /92</fieldset>
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

    <div class="contact" id="contact">


      <p><i class="fa-solid fa-phone"></i> C : +91 95126 17191 /92* || O : +91 792991 7191 /92*</p>
            <p><i class="fa-solid fa-envelope"></i>  carzking.helpdesk@gmail.com</p>
    
    
          </div>
    <!-- This is My Paragraph For Carz King-->
    <div class="p" style="margin: 5% auto; width: 90%;
    background: #f3f6fa; border: 1.7px dashed lightgrey; border-radius: 8px; padding: 20px;">
      <h1 style="color: seagreen; font-weight: 600; font-size: 44px;">Why We are Recognized ?</h1>
      <p style="color: darkslategray; font-size: 24px; margin-top: 3%;">Carz King is the one stop destination for all kinds of cars. If you wanna buy a car get cars from almost all 
        brands and review your car online from our cars <a href="gallery.php">gallery</a>. Genunity is in our nature, we provide all  
        kinds of genuine cars only. Have a finance crunch ? - Don't worry We also provides loan from
        top indian banks along with a low rate of interest. You can get all kinds of accesories related to car at our 
        exclusive showroom. Whether you wanted to have a repair work, Accidental help/repair, Insurance, 
        guaranted car washing, Dent works, wheel alignment, equipments, Paint work etc Carz king is the one stop Solution
        for all kinds of your needs. Just fasten your belt and have a look at our exclusive showroom today only
        <span>@ S.G. Highway, Ahmedabad.</span> 

      </p>

      <fieldset style="
      width: fit-content;
      font-weight: 600; border: 1.7px solid rgb(76, 181, 230); background: rgb(76, 181, 230);  padding: 10px 20px;
      border-radius: 5px;">
      <a href="https://www.google.com/search?q=carz+king+ahmedabad&rlz=1C1CHBD_enIN981IN981&oq=carz+king+ahmedabad&aqs=chrome.0.69i59l2j69i57j69i59j69i60l4.3679j0j7&sourceid=chrome&ie=UTF-8" style=" color: white; font-size: 16px;"><i class="fa-solid fa-circle-check"></i>
      &nbsp;&nbsp;See Our Reviews On Google</a></fieldset>

    </div>
    <!-- This is An End -->

    <!-- This is My Scroll To Top Button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up-long"></i></button>
    <!-- This is My End -->


    <!-- This are Our Specialities -->
   
    <div class="why">
      <div class="why_left">
        <img src="images\offer.jpg" alt="">

        <div class="why_right">

        
  
          <fieldset style="font-weight: 600; color: white;
           background: #0ab134; border-radius: 4px; width: fit-content;
          padding: 10px 20px;">Industry Expert</fieldset>
          <h2>Why <span style="color: #0077f0; font-weight: 700;">Carz King</span> ?</h2>
          <p><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Our motto is to offer "Dream Car, Quality Service at cheap price".
            Our Real Networth is Customer's <b>100%</b> Satisfaction. We always tends to add value in our services.
               
          </p>
       
  
        <div class="what">
          <h3>What We Offer :</h3>
  
          <div class="what-inner">
            <i class="fa-solid fa-car"></i>
            <h4>Buy Cars</h4>
            <p>Cars are our weakness. Get cars of almost all brands at a very cheap and affordable
              prices. You can view our <a href="gallery.php">Cars gallery</a> also.
            </p>
          </div>
  
  
          <div class="what-inner">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <h4>Repair Workshop</h4>
            <p>We provide all Kinds of Repair Work including <strong>Pickup & Drop Facility</strong>
              , Paint Work, Dent Accidental Repair & many more...
            </p>
          </div>
  
  
          <div class="what-inner">
            <i class="fa-solid fa-gear"></i>
            <h4>Accesories</h4>

            <p>Get All kinds of Cars Accesories only @CarzKing at very cheap prices and you can even 
              get in bulk at our exclusive showroom.
            </p>
          </div>
  
  
  
          <div class="what-inner">
  <i class="fa-solid fa-file"></i>    
  <h4>Insurance</h4>      
  <p>Insure Your Car with us. Get 100% claim to protect your car from all kinds 
    of accidents at very cheap rates and instant approval for Insurance.
            </p>
          </div>
  
  
        </div>

       

      </div>
      </div>
      
  

    </div>
    <!-- This is An End -->

<!-- This is Our Para About Carz King Repair Workshop -->
<div class="repair">

  <div class="repair_inner" style="margin-top: 5rem;">
    <span style="background-color: #f6f4f8; 
    border-radius: 5px; padding: 10px 20px; color: black;">Doctor For Cars</span>
    <h1>One Stop Destination For Cars :</h1>
  </div>

  <div class="r_in">
    <img src="images\repair3.svg" alt="" class="image" style="width: 120px; height: 100px;">
    <h1>Car Washing</h1>
    <p class="para">Get Your Car washed within minutes at carz king. All Car cleaning along with guarantee.</p>
    <fieldset style="background-color:rgb(20, 190, 220); color: white; padding: 5px 10px; border-radius: 3px;
    width: fit-content;">Washing</fieldset>
  </div>

  
  <div class="r_in">
    <img src="images\repair1.png" alt="" class="image" style="width: 120px; height: 100px;">
    <h1>Denting Work</h1>
    <p class="para">Your ca has dents. No problem , We are here to get all your denting works in a couple
      of minutes and make it like a new brand car.
    </p>
    <fieldset style="background-color:rgb(63, 54, 55); color: white; padding: 5px 10px; border-radius: 3px;
    width: fit-content;" >Repair</fieldset>
  </div>

  
  <div class="r_in">
    <img src="images\repair4.svg" alt="" class="image" style="width: 120px; height: 100px;">
    <h1>Wheel AlignMent</h1>
    <p class="para">Wheel Alignment matters most in terms of safety as well as performance. Get your 
      car aligned today using Ultra Modern Technology.
    </p>
    <fieldset style="background-color:rgb(20, 140, 220); color: white; padding: 5px 10px; border-radius: 3px;
    width: fit-content;">Tyres</fieldset>
  </div>

  
  <div class="r_in">
    <img src="images\repair2.svg" alt="" class="image" style="width: 120px; height: 100px;">
    <h1>Accidental Repair</h1>
    <p class="para">
      Our team has an expertise in Accidental repairs, As well as in creating a new brand look to your car.
    </p>
    <fieldset style="background-color:crimson; color: white; padding: 5px 10px; border-radius: 3px;
    width: fit-content;">Accident</fieldset>

  </div>


  <div id="many" style="width: 100%; margin: 5%; text-align: center;">
  <a href="services.html" style="width: 40%; height: 4rem;
    background: #2488fa; color: rgb(255, 255, 255);
    padding: 10px 20px; border-radius: 4px; margin: auto; font-size: 17px;">
    & Many More... </a></div>

</div>

<!-- This is An End -->


    <!-- This is My Cars Gallery With All Logos 

    <div class="gallery">

      <img src="images\cars_section.jpg" alt="" style="position: absolute; height: 100vh; width: 100%;">



      <div class="gal" id="gal">

        <div class="gal_head" style="position: relative; width: 100%;">
          <h1>Find Your <span style="color: #0ab134;">Dream !</span> Car from our Gallery</h1>
          <p style="font-weight: 600;"><span style="color: #0a5eb1; ">Carz King</span> helps you to ride on your desired
            car</p>

          <fieldset>Browse from over<span style="color: #b15b0a;"> 18+ </span>Car Brands</fieldset>
          <div id="gal-btn" style="width: 100%; padding-top: 5px;">

            <button id="view" style="position: relative; height: fit-content; width: 200px; 
      background: rgb(242, 247, 244); padding: 5px 10px; 
      color: rgb(85, 85, 85); cursor: pointer; 
      right: 7rem;
      float: right;
      border-radius: 4px;">View All</button>
  
          </div>
        </div>

        <a href="http://localhost/Carz%20King/gallery.php?search=Maruti+Suzuki&submit=%2Fsearch"><img src="images/maruti.jpg" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Tata&submit=%2Fsearch"><img src="images/tata.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Mahindra&submit=%2Fsearch"><img src="images/mahindra.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Hyundai&submit=%2Fsearch"><img src="images/hyundai.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Skoda&submit=%2Fsearch"><img src="images/skoda.png" alt=""></a>

        <a href="http://localhost/Carz%20King/gallery.php?search=Jeep&submit=%2Fsearch"><img src="images/jeep.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Toyota&submit=%2Fsearch"><img src="images/toyota.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Honda&submit=%2Fsearch"><img src="images/honda.png" alt=""></a>



        

        <a href="http://localhost/Carz%20King/gallery.php?search=Datsun&submit=%2Fsearch"><img src="images/datsun.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Nissan&submit=%2Fsearch"><img src="images/nissan.jpg" alt=""></a>

        <a href="http://localhost/Carz%20King/gallery.php?search=BMW&submit=%2Fsearch"><img src="images/bmw.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Audi&submit=%2Fsearch"><img src="images/audi.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Jaguar&submit=%2Fsearch"><img src="images/jaguar.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Mercedes&submit=%2Fsearch"><img src="images/mercedes.png" alt=""></a>

        <a href="http://localhost/Carz%20King/gallery.php?search=Volkswagen&submit=%2Fsearch"><img src="images/volkswagen.jpg" alt=""></a>

        <a href="http://localhost/Carz%20King/gallery.php?search=Renault&submit=%2Fsearch"><img src="images/renault.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Kia&submit=%2Fsearch"><img src="images/kia.png" alt=""></a>   
        <a href="http://localhost/Carz%20King/gallery.php?search=Chevrolet&submit=%2Fsearch"><img src="images/chevrolet.jpg" alt=""></a>

        <a href="http://localhost/Carz%20King/gallery.php?search=MG&submit=%2Fsearch"><img src="images/mg.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Porsche&submit=%2Fsearch"><img src="images/porsche.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Volvo&submit=%2Fsearch"><img src="images/volvo.png" alt=""></a>
        <a href="http://localhost/Carz%20King/gallery.php?search=Ford&submit=%2Fsearch"><img src="images/ford.png" alt=""></a>




      </div>
    </div>
-->


<!-- This is My Cars Registered AT-->

<div class="table" style="overflow-x: scroll;">

<table>
            <thead>
                     <tr>
                         <th>Company Name</th>
                         <th>Model</th>
                         <th>Version</th>
                         <th>Ownership</th>
                         <th>Price</th>
                         <th>Full Details</th>
                     </tr>
            </thead>  

<?php
include("connection.php");

$query = "SELECT * FROM cars_data ORDER BY model ASC LIMIT 5";
$sql = mysqli_query($conn, $query);

if(mysqli_num_rows($sql) > 0){
  foreach($sql as $items){

  
echo "


            <tbody>
                   <tr>
                         <td><i class='fa-solid fa-car'></i> &nbsp;".$items['cname']."</td>
                         <td><i class='fa-solid fa-gear'></i> &nbsp;".$items['model']."</td>
                         <td><i class='fa-solid fa-file'></i> &nbsp;".$items['version']."</td>
                         <td><i class='fa-solid fa-user'></i> &nbsp;".$items['owner']."</td>
                         <td><i class='fa-solid fa-indian-rupee-sign'></i> &nbsp;".$items['price']."</td>
                         <td><a href='all.php?id=".$items['special_id']."' target='_blank'><i class='fa-solid fa-arrow-right-long'></i>&nbsp;Full Details</a></td>
                   </tr>
            </tbody>

";  

  }


}

?>
</table>
</div>

<div class="view_all" style="display: flex; justify-content: center;">
  <a href="gallery.php" style="padding: 10px 90px; line-height: 1rem;">View All</a>
</div>

<!-- This is An End -->


    <div class="test">
      <h1>Testimonials</h1>
      <p>See What Our Customer Says</p>

      <div class="test-inner">
<img src="images/review1.png" alt="">
<b><i>- By </i>Kirit Chauhan</b>
<span>
  Carz King is best for all kinds of buying and selling of cars. Their Team is So Gentle and Good.

</span>
      </div>

      
      <div class="test-inner">
        <img src="images/review2.png" alt="">
        <b><i>- By </i>Kamlesh Patel</b>

        <span>
          I bet you, You will find your car care taker here.
          One of the best car services provider.
          One of the best car cleaning provider.  
</span>
      </div>
     
      <div class="test-inner">
        <img src="images/review3.png" alt="">
        <b><i>- By </i>Anuj Shah</b>

        <span>
          Thankful to Carz king for the many years of service they provide to me and my family. I’ve been going to them for over 1 year to service my cars and always receive the best treatment.

        </span>

      </div>

      <div class="btn_test">
        <a href="https://www.google.com/search?q=carz+king&rlz=1C1CHBD_enIN981IN981&sxsrf=ALiCzsbKbRpQo1c7sAVDKlm0gfwlw905_g%3A1657538898995&ei=UgnMYrexPKTv4-EP-d-h6A4&ved=0ahUKEwi3oprK3fD4AhWk9zgGHflvCO0Q4dUDCA4&uact=5&oq=carz+king&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAgjECcyCgguEMcBEK8BEAoyBAgAEAoyBAgAEAoyBAgAEAoyBAgAEAoyBAgAEAoyCgguEMcBEK8BEAoyBwgAEMkDEAo6BwgjEOoCECc6DQguEMcBEK8BEOoCECc6BQgAEJECOgQIABBDOgsIABCABBCxAxCDAToECC4QQzoKCC4QxwEQrwEQQzoICAAQyQMQkQI6BQgAEJIDOgoIABCxAxCDARBDOgoIABCABBCHAhAUOgcIABCxAxBDOgsILhDHARCvARCRAjoFCAAQgAQ6DgguEIAEEMcBENEDEMkDOgoIABCxAxCDARAKOgcIABCxAxAKSgQIQRgASgQIRhgAUM0FWKIUYOgWaAFwAXgAgAHWAogBpxGSAQUyLTguMZgBAKABAbABCsABAQ&sclient=gws-wiz">View Full</a>
      </div>
      
    </div>


<!-- This Is My Accordion -->

<div id="faq" class="faq-body">
  <div class="faq-header">
    <h2 class="faq-title" style="color: darkslategrey; margin-left: 2rem;">FAQ's</h2>
  </div>
  <div class="faq-list">
      <div>
        <details open>
          <summary title="How can I pay for my appointment?">Why Carz King ?</summary>
          <p class="faq-content"> <strong>Carz King          
    </strong> is the best car dealers in Ahmedabad. Here, you can buy all brand cars at very 
  easy and cheap rate. Moreveover, If you don't have enough cash to buy your loved car, then we also provide
all kinds of Vehicle Loan along with an <b>Excellent</b> Rate of Success. You can Checkout our exclusive showroom
to get all kinds of cars only <code>S.G. Highway</code>. We are open 24/7 all 365 days.</p>
        </details>
        </div>
      <div>
        <details>
          <summary title="What can I expect at my first consultation?">What are All Services offered by carz King ?</summary>
          <p class="faq-content"><b>Carz King</b> is the one stop destination for cars. you can check all kinds of services related to cars. It includes Buying
  & Selling of cars, Multibrand workshop where you can get to repair all kinds of cars. We are well known for <b>Loan Approval Services</b>, Moreover
  If you want to secure your car having an <b>Insurance</b>, we are here to cater all your needs. All workshop services includes Car Washing,
  All kinds of Detailing Works, PPF Works (Paint Protection Film), Wheel Alignment, Accessories Repair, Denting & Painting Works, 
  <a href = "tel: 95126 17191">Pick Up Services</a> , All kinds of Accidental Repair, Regular Car Checkups, Steering Adjustment 
  & Many More...      </p>
        </details>
        </div>
      <div>
        <details>
          <summary title="What are your opening hours?">Do Carz King Provides Services at our Door Step ?</summary>
          <p class="faq-content"> Yes, <b>Carz King</b> offers services related to cars at your doorstep. If you are outdoor for a while and wants your car 
    to have a Repair work orn just a Regular Checkup then our <b>Pickup & Drop</b> team is ready for you. If you Met With an accident
then our <b>Tow Team </b>  will help you at the spot of Incidence, You can even call our <b>Tow team</b> to help you If your
car damaged midway. To Call Us Just :

<a href="tel: 95126 17191">Click Here</a></p>
        </details>
        </div>
      <div>
      
  </div>
</div>
</div>


<!-- This is An End -->

    <!-- This is An Footer -->

    <footer>
      <div class="footer1">
        <img src="images\mercedes.png" alt="" style="width: 150px; height: 50px; margin-bottom: 1rem;">
        <div class="line"><div class="line-inner"></div></div>

        <p>We are a One Stop Solution for all your car needs. We have experts that will cater to all your demands regarding cars at an affordable price.
        </p>


<h3 style="margin-top: 10rem;">Follow Us On :</h3>
<div class="line"><div class="line-inner"></div></div>

<div class="social">


  <i class="fa-brands fa-facebook-f"></i>
  <i class="fa-brands fa-instagram"></i>
  <i class="fa-brands fa-twitter"></i>
  <i class="fa-brands fa-linkedin-in"></i>
</div>
</div>


<div class="footer2">

  <h3>Meet Us Live </h3>
  <div class="line"><div class="line-inner"></div>
</div>

 <div class="f-inner">
  <p>
  <i class="fa-solid fa-location-dot"></i>
  CARZ KING, Opp. Hathi Mandir and Shell Petrol Pump, S.G. Highway, Gota, Ahmedabad 382481.</p>
 </div>

 
 <div class="f-inner">
  <p>
  <i class="fa-solid fa-envelope"></i>
  carzking.helpdesk@gmail.com</p>
 </div>


 <div class="f-inner">
  <p>
  <i class="fa-solid fa-phone"></i>
  C : +91 95126 17191 /92* </br>O : +91 792991 7191 /92*</p>
 </div>

 <div class="f-inner">
  <p>
  <i class="fa-solid fa-calendar"></i>
   10:00 Am - 8:00 Pm</p>
 </div>
</div>


<div class="footer3">

  <h3>Our Services :</h3>
  <div class="line"><div class="line-inner"></div>
</div>

  <div class="f3">
    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Multibrand Car Service and Accidental Workshop</a>
    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Buy and Sell of Used Cars</a>
    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Insurance Services</a>
    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Accesories Marketplace</a>
    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Repair Workshop</a>
    <a href="privacy.html"><i class="fa-solid fa-arrow-right-long"></i>Privacy Policy</a>
    <a href="terms.html"><i class="fa-solid fa-arrow-right-long"></i>Terms & Conditions</a>
    <a href="services.html"><i class="fa-solid fa-arrow-right-long"></i>Our Services</a>

    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Sitemap</a>  </div>

</div>

<div class="f-bottom">
  <p>All Rights Reserved. <i class="fa-regular fa-copyright"></i> 2022 - <a href="">Carz King</a> </p>
</div>
    </footer>

    <!-- This is An End -->
  <script>


const open = document.getElementById('open');
    const close = document.getElementById('close');
    const navbar = document.getElementById('nav');
const below = document.getElementById("main");

    open.addEventListener('click', ()=> {
        navbar.style.marginLeft="0%";
        open.style.display="none";
        close.style.display="block";
        below.style.marginTop="50rem";
    })

    close.addEventListener('click', ()=> {
        navbar.style.marginLeft="-100%";
        open.style.display="block";
        close.style.display="none";
        below.style.marginTop="0rem";
    })


    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
  </script>

 

  <script>
    const view = document.getElementById("view");
    const all = document.getElementsByTagName("a");
    var gallery = document.getElementById("gal");
    var gal_btn = document.getElementById("gal-btn")

    view.addEventListener("click", () => {
      gallery.style.height = 'fit-content';
      gallery.style.overflow = "visible";
      gal_btn.style.display = "none";
    })


      
      
        </script>

<script>
  const all = document.getElementById("many");
const r_all = document.getElementsByClassName("r_all");

all.addEventListener("click", ()=>{
    r_all.style.display="flex";
})

</script>

</body>

</html>