<?php 

include 'connection.php';
// This is To Avoid Undefined Index Error Message !!!!!!!

error_reporting (E_ALL ^ E_NOTICE);
sleep(1);

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- This is For SEO -->
<title>car s | second hand cars | used car prices | used cars | used cars for sale | car prices | used cars near me | car best</title>

<meta name="description" itemprop="description" content="Carz King - Buy used cars from a wide range of cars and at a very cheap price. call now to grab a beautiful car at a very great price. our motto is to provide best service in cars sector.">

<meta name="keywords" itemprop="keywords" content="carz king,About Us,
car s,second hand cars,used car prices,used cars,used cars for sale,car prices,used cars near me,car best,car sale,cars car,best used cars,used cars for sale online,2nd hand car,buy used cars,showroom cars,buy a car
">
<!-- This is An End -->


    

<!-- Boot --> <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- This is An End -->

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

  <link rel="stylesheet" href="gallery.css">
    <title>Carz King</title>


    <style>

nav{
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
margin-top: -1.7rem;
}

nav ul{
margin-left: 25rem;
}

nav ul li a{
    line-height: 99px !important;

}

 
    body{
      overflow-x: hidden;
    }
      main{
    width: 100%;
    height: 100%;
    }
    


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
    form{
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
    }

    .search{
     width: 45%;
        margin: auto;
        margin-top: -40rem;
        border: 1.7px solid lightgrey;
        padding: 5px 10px;
        height: fit-content;
        position: relative;
        border-radius: 4px;
        background: white;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;        margin-bottom: 20rem;

    }
    
    form .search input{
    border: none;
    outline: none;
    height: 5rem;
    color: slategray;
    margin-right: 2rem;
    width: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 20px;
    }

    
    
    form button{
        background: #0084c2;
        color: white;
        height: 5rem;
        font-size: 19px;
        font-weight: 600;
        width: 45%;
        margin: 2% auto;
        position: relative;
        outline: none;
        border-radius: 4px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .gayab{
      color: lightgray; font-size: 22px;  margin: auto; margin-top: 1rem;
  margin-bottom: 5rem; width: 60%;
    }
    
    .cars{
      width: 100%;
        height: fit-content;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
    }
    
    
    .cars .cars-inner{
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
        margin: 3% auto;   
        width: 65%;
        height: fit-content;
        background: white;
        padding: 5px 7px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        border-radius: 5px;
        cursor: pointer;
    }
    .cars .cars-inner:hover{
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

 
    .line-under{
        height: 2px;
        background: slateblue;
        width: 20%;
        margin-bottom: 1.23rem;
    }
    
    .filters{
      width: 97%;
      margin: auto;
      margin-top: 20rem;
      margin-bottom: 10rem;
    }
    .filters fieldset{

      width: 100%; 
      background-color: #f6f4f8;
       border-radius: 5px; 
  color: steelblue;
  font-size: 20px;
  margin-bottom: -5rem;
   padding: 10px 20px;
    }

    .cars-img img{
      
        width: 300px;
        height: 90%;
    }

  
    
    .cars-inner .cars-det{
      margin-left: 2.35rem;
    }
    
    .cars-inner .cars-det h1{
        font-size: 23px;
    }
    
    .cars-inner .cars-det fieldset{
        font-size: 16px;
        color: steelblue;
        font-weight: 600;
    }
    
    .cars-inner .cars-det .cars_details{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin: auto;
        margin-top: 2%;
        margin-bottom: 4%;
    }
    .cars-inner .cars-det .cars_details span{
        font-size: 16px;
        color: darkslategray;
        margin-right: 2rem;
        border: 1px dashed grey;
        border-radius: 3px;
        padding: 5px 10px;
        margin-top: 1.5rem;
    }
    
    .btn{
        width: 100%;
        text-align: right;
        outline: none;
    }
    
    .btn a{
        width: 100%;
        height: fit-content;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 10px 20px;
        font-size: 17px;
        outline: none;
        background: #5086fc;
        cursor: pointer;
    }
    
    .btn a:hover{
        transition: 0.5s cubic-bezier(0.6, -0.28, 0.735, 0.045);
        background: #292929;
    }

    /* This is My cars Full Section */
.cars_full{
  width: 70%;
  margin: auto;
  margin-bottom: 10rem;
  position: relative;
  height: fit-content;
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  transition: 2s ease;
  display: none;

}

.carousel-fade{
  width: 90%;
  margin: 3% auto;
  height: fit-content;
  position: relative;
  padding: 10px;
  box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
  border-radius: 8px;
}

.carousel-fade img{
width: 100%;
height: 300px;
}


.desc .desc_in{
  width: 100%;
  height: fit-content;
  padding: 10px 20px;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  cursor: pointer;
}

.desc .desc_in li{
  border-top: 1.7px solid lightgray;
  padding: 5px 10px;
  font-weight: 600;
  font-size: 17px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.desc .desc_in li:hover{
  background: #f6f4f8;
}


/* These Are My Feauters Card */

.other{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  height: fit-content;
  justify-content: center;
  text-align: start;
  border: 1.7px dashed grey;
  border-radius: 8px;
}

.other li{
  margin: 3%;
  color: slategray;
  font-size: 17px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.other i{
  background-color:#00a136;
  color: white;
  padding: 5px;
  border-radius: 50%;
  margin-right: 0.5rem;
}

.other .other1{
  margin-right: 7rem;
}

.other .other2{
  margin-right: 7rem;
}

.other .other3{
  margin-right: 4rem;
}

.other .other1 h1{
  color: #ec6409;
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 2rem;
}

.other .other2 h1{
  color: #0973ec;
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 2rem;
}


.other .other3 h1{
  color: #7309ec;
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 2rem;
}

    /* This is An End */

/* This is My Section */


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

.accordion-item{
  height: fit-content;
}

.accordion-header h2 {
  font-size: 22px;
}

.accordion-button{
  height: 5rem;
  font-size: 22px;
}

.card_inner{
    border-top: 1.7px solid lightgrey;
    padding: 7px 13px;
    font-family: sans-serif;
    font-size: 17px;
    cursor: pointer;
}

.card-body h2{
    color: steelblue;
    font-size: 20px;
}

input[type="checkbox"]{
    color: black;
    cursor: pointer;

}

.filter_btn{
    background: #f6f4f8;
    border: 2px solid #f6f4f8;
    color: darkslategrey;
    border-radius: 5px;
    width: 100%;
    height: 3.23rem;
    margin-top: 3rem;
    font-size: 18px;
    outline: none;
    cursor: pointer;
}

footer{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
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
    background-color: #e31b1b;
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
    color: #e31b1b;
}

details[open] summary ~ * {
    animation: sweep .5s ease-in-out;
}

@keyframes sweep {
    0%    {opacity: 0; margin-left: -10px}
    100%  {opacity: 1; margin-left: 55px}
}

details[open] summary {
    color: #e31b1b;
}

details[open] p {
    border-left: 2px solid #e31b1b;
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
    width: 95%;
    margin: 4em auto;
    border-radius: 4px;
    border-radius: 0.2em;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    padding: 20px 30px;
    background-color: #fff;
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
    color: #e31b1b;
    float: left;
    font-size: 1.8em;
    font-weight: bold;
    margin: -0.3em 0.65em 0 0;
    padding: 0;
    text-align: center;
    width: 25px;
}


/* This is My Footer */
footer{
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  background: rgb(255, 254, 254);
  height: fit-content;
  padding: 20px;
  box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}

/* This is My First Footer Section */

footer .footer1{
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  width: 33%;
  margin-right: 1.2rem;
}

footer .footer1 h1{
  color: #292929;
  font-weight: 600;
  font-size: 20px;
}

footer .footer1 p{
  color: #717171;
  font-size: 18px;
  
}

.footer1 .social{
  display: flex;
  flex-direction: row;
  margin: 3%;
}
.footer1 .social{
  display: flex;
  flex-direction: row;
  margin: 3%;
}.footer1 .social i{
  border-radius: 50%;
  color: darkslategray;
  font-size: 23px;
  margin-right: 1rem;
  line-height: 32px !important;
  padding: 5px 12px;
  cursor: pointer;
}

.footer1 .social i:hover{
    transition: 0.5s ease-in;
    background: darkslategrey;
    color: white;
}

.fa-facebook-f{
  border: 1.5px solid lightgrey;
  color: darkslategray;
  font-weight: 600;
  font-size: 19px;
  border-radius: 50%;
  padding: 15px;
  cursor: pointer;
}

.fa-instagram{
  border: 1.5px solid lightgrey;
  color: darkslategray;
  font-weight: 600;
  font-size: 19px;
  border-radius: 50%;
  padding: 15px;
  cursor: pointer;
}

.fa-twitter{
  border: 1.5px solid lightgrey;
  color: darkslategray;
  font-weight: 600;
  font-size: 19px;
  border-radius: 50%;
  padding: 15px;
  cursor: pointer;
}

.fa-linkedin-in{
  border: 1.5px solid lightgrey;
  color: darkslategray;
  font-weight: 600;
  font-size: 19px;
  border-radius: 50%;
  padding: 15px;
  cursor: pointer;
}

.footer2{
  width: fit-content;
  padding:5px;
  width: 33%;
  margin-right: 1.2rem;
}

.footer2 .f-inner{
  padding: 5px 10px;
  margin-bottom: 0.2rem;
}

.footer2 .f-inner i{
  border: 1.5px solid lightgrey;
  color: darkslategray;
  font-weight: 600;
  font-size: 19px;
  border-radius: 50%;
  padding: 15px;
  cursor: pointer;
}

.footer2 .f-inner p{
  color: darkslategray;
  font-size: 17px;
}


.footer3{
  width: fit-content;
  padding: 3px 10px;
  width: 30%;
  text-align: center;
}
.footer3 form{
  background: white;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  padding: 10px;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
}

.footer3{
  display: flex;
  flex-direction: column;
  text-align: left;
}

.footer3 h3{
  font-size: 22px;
}

.footer3 .f3{
  display: flex;
  flex-direction: column;

}

.footer3 .f3 a{
  margin-top: 1.2rem;
  font-size: 16px;
  color: grey;
  outline: none;
  font-weight: 500;
}

.f3 i{
  margin-right: 1.2rem;
}

footer .f-bottom{
  margin-top: 3%;
  width: 100%;
  height: fit-content;
  text-align: center;
  border-top: 1.7px solid lightgrey;
  padding: 10px 20px;
  font-size: 19px;
}

/* This is My Line */

.line{
  width: 92%;
  margin-bottom: 1.5rem;
  height: 1.7px;
  background: #f5f1f1;
}

.line .line-inner{
  width: 30%;
  height: 2px;
  background: rgb(0, 132, 255);
}
/* This is An End */

nav ul{
  margin-left: 60rem;
  margin-top: -8.7rem;
}

nav ul li a{
  line-height: 90px;
}

nav img{
  width: 25%;
  margin-top: 1.5rem;
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

  nav{
    padding: 0rem;
  }

  nav ul{
      display: flex;
      height: 100vh;
      position: absolute;
      width: 100%;
      margin-left: -200%;
      float: left;
      justify-self: left;
      border-right: 2px solid #f6f4f8;
      background-color: rgb(254, 255, 254);
      flex-direction: column;
  }

  nav ul li{
      margin-top: 1rem;
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

  @media screen and (max-width: 768px){
    .card-body{
        width: 90%;
        margin: auto;
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

  form .search{
    width: 97%;
    margin: 5% auto;
  }

  form button{
    width: 90%;
    margin: 5% auto;
  }
  
.cars{
    width: 100%;
    padding: 0px 0px;
  }

.cars .cars-inner{
    width: 97%;
    margin: 5% auto;
  }

  .cars .cars-inner span{
    margin-top: 1rem;
  }

#button{
  margin-top: 3rem;
}

.cars_full{
width: 97%;
margin: auto;
}

.cars_full a{
  width: 100%;
  margin: 3%;
}

.stop{
  display: flex;
  flex-direction: column;
}

.stop button{
  width: 100%;
}


}}

    </style>

</head>
<body>
    
    
<nav id="navbar" style="height: 90px;">
    <img src="services/logo.jpg"  alt="none" style="margin: 1%; margin-left: 2rem;   margin-top: 1.5rem;
">

   
    <ul id="nav">



        <li id="active"><a href="index.php">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="services.html">Our Services</a></li>
        <li><a href="gallery.php" class="active">Preowned Cars</a></li>
        

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
<i class="fa-solid fa-angles-right"></i>
<span>Preowned Cars</span>

<i class="fa-solid fa-angles-right"></i>
<span><?=  $_GET['search']; ?></span>
</div>
<!-- This is My End -->

 

  <!-- This is My Scroll To Top Button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up-long"></i></button>
    <!-- This is My End -->


<div>
  <img src="images/bg.webp" alt="" style="margin-top: 0px; height: 100vh; width: 100%;">


  <div style="position: relative; margin-top: -50rem;
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  justify-content: center;
  text-align: center;
  ">
  <h1 id="hd" style="color: white; font-weight: 600; font-size: 44px;">Find Your Dream Car !</h1>
  <p class="gayab" id="gayab">Get Your car and view it's full info. <strong>Genuine Cars Only</strong>
    Call our Sales Team and be the owner of your loved Luxury !
  </p>
  <a style="margin: auto; margin-bottom: 2rem; cursor: pointer;">#CarzKing</a>
</div>




  <!-- This Is My -->

 <form action="" method="GET" id="form">
<div class="search" style="max-width:90%; margin: auto;">
  <input type="text" list="cars" name="search" id="search" placeholder="Type Car's Name / Company Name " 
  style="margin-right: 2rem;
  padding: 5px 10px;" value="<?=  $_GET['search'] ?>" >

<datalist id="cars">

<option value="BMW">BMW</option>
 <option value="Mercedes">Mercedes</option>
 <option value="Porsche">Porsche</option>
 <option value="Maruti Suzuki">Maruti Suzuki</option>
 <option value="Suzuki">Suzuki</option>
 <option value="Mahindra">Mahindra</option>
 <option value="Maruti">Maruti</option>
 <option value="Audi">Audi</option>
 <option value="Tata">Tata</option>
 <option value="Ford">Ford</option>
 <option value="Fiat">Fiat</option>
 <option value="Lexus">Lexus</option>
 <option value="Hyundai">Hyundai</option>
 <option value="Honda">Honda</option>
 <option value="Datsun">Datsun</option>
 <option value="Renault">Renault</option>
 <option value="Volvo">Volvo</option>
 <option value="Jeep">Jeep</option>
 <option value="KIA">KIA</option>
 <option value="MG - Morris Garages">MG - Morris Garages</option>
 <option value="MG">MG</option>
 <option value="Range Rover">Range Rover</option>
 <option value="Land Rover">Land Rover</option>
 <option value="Nissan">Nissan</option>
 <option value="Toyota">Toyota</option>
 <option value="Volkswagen">Volkswagen</option>
 <option value="Skoda">Skoda</option>
 <option value="Jaguar">Jaguar</option>
 <option value="Chevrolet">Chevrolet</option>

</datalist>

</div>


<button name="submit" id="submit" value="/search">Search</button>

</form>
<!-- This is An End -->


    </div>


    <!-- This is My Slider -->
 
    <!-- This is An End -->


    <!-- This Are My Cars Para -->


     <div class="filters">

<fieldset id="srch"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;Your Searched Term For " <?=  $_GET['search'] ?> "</fieldset>

  
        </div>
 
      
<!-- This is My Filter Table -->
<?php include('action.php'); ?>
<!-- This is An End -->
  


<div id="result">
   

<?php




if(isset($_GET['search'])){

$filtervalues = $_GET['search'];
$select = "SELECT * from cars_data where CONCAT(cname, model) LIKE '%$filtervalues%'";
$queryrun = mysqli_query($conn, $select);

$row = mysqli_fetch_assoc($queryrun);

$page_id = $row['id'];

if(mysqli_num_rows($queryrun) > 0 ){
  foreach($queryrun as $items){
  
    echo "<div class='cars'>
    
    <div class='cars-inner'>
            
                <div class='cars-img'>
                <img src='".$items['file1']."'>
            </div>
    
    <div class='cars-det'>
                <h1><strong>".$items['cname']."</strong> -  ".$items['model']."</h1>
                <div class='line-under'></div>
    
                <fieldset><i class='fa-solid fa-indian-rupee-sign'></i>&nbsp;&nbsp;".$items['price']."
                </fieldset>
    
                <div class='cars_details'>
                <span><i class='fa-solid fa-brush'></i>&nbsp;&nbsp;".$items['color']."</span>
    
                    <span><i class='fa-solid fa-calendar-check'></i>&nbsp;&nbsp;".$items['year']."</span>
                    <span><i class='fa-solid fa-fill'></i>&nbsp;&nbsp;".$items['fuel']."</span>
                    <span><i class='fa-solid fa-road'></i>&nbsp;&nbsp;".$items['kms']." Km</span>
    
                </div>
    
                <span style='border-left: 2px solid  #ec6409; padding: 5px 10px; color: #ec6409;
                margin-right: 1.3rem; font-weight: 600;'>
                <i class='fa-solid fa-user'></i>
                &nbsp;&nbsp;".$items['owner']."</span>
    
                <a href='tel:9292898920' style='border-left: 2px solid slateblue;
                padding: 5px 10px; color: slateblue;
                margin-right: 1.3rem; font-weight: 600;'>
                <i class='fa-solid fa-phone'></i>&nbsp;Inquire Now</a>
    
    
    
                <div class='btn'>
    
        
                
                <a href='all.php?id=$items[special_id]' target='_blank' name='button' id='button'>Full Details
                &nbsp;&nbsp;<i class='fa-solid fa-arrow-right-long'></i></a>
              
    
                </div>
    
                </div>
                </div>
";

  }
          
        }
      }
    
?>


<!-- This Is My Accordion -->

<div id="faq" class="faq-body">
      <div class="faq-header">
        <h3 class="faq-title">FAQ's</h3>
        <div class="seperator"></div>
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
      <a href = "tel: 9292898920">Pick Up Services</a> , All kinds of Accidental Repair, Regular Car Checkups, Steering Adjustment 
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
   
   <a href="tel:9292898920">Click Here</a></p>
            </details>
            </div>
          <div>
          
      </div>
    </div>
</div>


<!-- This is An End -->

<footer style="display: flex; flex-direction: row; flex-wrap: wrap;">
      <div class="footer1">
        <img src="images\mercedes.png" alt="" style="width: 150px; height: 50px; margin-bottom: 1rem;">
        <div class="line"><div class="line-inner"></div></div>

        <p>We are a One Stop Solution for all your car needs.
We have experts that will cater to all your demands regarding cars at an affordable price.
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
 C : +91 95126 17191 /92* </br>O : +91 792991 7191 /92*
</p>  
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

    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Sitemap</a>
  </div>

</div>

<div class="f-bottom">
  <p>All Rights Reserved. <i class="fa-regular fa-copyright"></i> 2022 - <a href="">Carz King</a> </p>
</div>
    </footer>

 
<script>
 
 const open = document.getElementById('open');
const close = document.getElementById('close');
const navbar = document.getElementById('nav');
const main = document.getElementsByTagName('main');

/* This is My Script For Gallery Page (p TAG - NAME = gayab) */

const gayab = document.getElementById('gayab');
const hd = document.getElementById('hd');
const form = document.getElementById('form');



open.addEventListener('click', ()=> {
    navbar.style.marginLeft="0%";
    navbar.style.padding="0px";
    open.style.display="none";
    close.style.display="block";
    gayab.style.display="none";
    hd.style.display="none";
    form.style.display="none";

})

close.addEventListener('click', ()=> {
    navbar.style.marginLeft="-200%";
    open.style.display="block";
    close.style.display="none";
    gayab.style.display="block";
    hd.style.display="block";
    form.style.display="flex";

})

</script>



    <script>

const all =  document.getElementById("button");
   
   const full = document.getElementById("cars_full");
   const shut =  document.getElementById("stop");


function openPara(){
  full.style.display="block";

}
     
   all.addEventListener("click", ()=>{
     full.style.display="block";
   })

  
   shut.addEventListener("click", ()=>{
     full.style.display="none";
   })

    </script>

    <!-- This is My Script Area For the Description -->
    <script>// This is For Toggle Option For the Cars Details //



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

    <!-- This is An End -->



    </body>
</html>