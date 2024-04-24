<?php

session_start();

include 'connection.php';


$success = "<div id='success' style='width: 100%; border-radius: 5px; font-size: 20px; 
font-weight: 600; cursor:pointer; height: fit-content; background: lightseagreen; color: white; padding: 10px 20px;
text-align: left;'><p>Messge Sent Successfully !</p></div>";

$fail = "<div id='success' style='width: 100%; border-radius: 5px; font-size: 20px; font-weight: 600; cursor:pointer; height: fit-content; background: red; color: white; padding: 10px 20px;
text-align: left;'><p>Message Not Sent Successfully ! Please, Try Again.</p></div>";




if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $date = mysqli_real_escape_string($conn,$_POST['date']);
  $subject = mysqli_real_escape_string($conn,$_POST['subject']);
  $message = mysqli_real_escape_string($conn,$_POST['message']);

  $query = "INSERT INTO contact_us (name,email,date,subject,message)
   VALUES('$name', '$email', '$date', '$subject', '$message') ORDER BY email ASC";
  $insert_query = mysqli_query($conn, $query);

  if($query){
    echo $success;
  }
  else{
    echo $fail;
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- This is For SEO -->
<title>Carz King | Contact Us | Contact for sell car | Contact us to Buy Used cars | cars for sale</title>

<meta name="description" itemprop="description" content="Carz King - Buy used cars from a wide range of cars and at a very cheap price. Contact our team to book your car or visit our exclusive showroom today and grab your loved car today.">

<meta name="keywords" itemprop="keywords" content="carz king,Carz king Ahmedabad ,Contact Us, sell car, buy used cars, cars for sale, used car dealers, car online, buy used cars, car s, cars for sale in ahmedabad, used car for sale in ahmedabad, car dealers in ahmedabad">
<!-- This is An End -->

    
<!-- Boot -->
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
  <link rel="stylesheet" href="https://www.google.com/maps/place/CARZ+KING,+Sarkhej+-+Gandhinagar+Hwy,+opp.+Hathi+Mandir,+Gota,+Ahmedabad,+Gujarat+382480/@23.0992669,72.5397566,14z/data=!4m2!3m1!1s0x395e83981014eab9:0x792a164bb3678139">

  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="home.css">


<!-- This is For Email Send Script -->
<!-- This is An End -->

<style>

nav ul{
  text-align: center;
margin-left: 25rem;
}

nav ul li a{
    line-height: 90px !important;

}

  
nav img{
    width:25%;
    height: 63px;
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

  .main img{
    width: 40%;
  }

  .main-inner{
    width: 60%;
  }

  .main .main-inner p{
    font-size: 23px;
  }

  body{
    overflow-x: hidden;
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

@media screen and (max-width: 768px){
  .main{
    width:100%;
    height: fit-content;
display: flex;
flex-direction: column;
  }
  .main img{
width: 100%;
  }

  main form{
    width: 97%;
    margin: auto;
  }

  .main-inner{
    width: 90%;
    margin: auto;
    text-align:center;
    padding: 20px;
  }

}

@media screen and (max-width: 768px){
   /* This is My Footer */

   nav img{
     width: 30%;
     height: 64px;
   }

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
</style>

</head>
<body>


  
  <!-- This is My Header -->
      
  <nav id="navbar" style="height: 90px;">
    <img src="services/logo.jpg" alt="none" style="margin: 1%;">

    <ul id="nav">



        <li id="active"><a href="index.php">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.php" class="active">Contact Us</a></li>
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
<i class="fa-solid fa-angles-right"></i>
<span>Contact Us</span>
</div>
<!-- This is My End -->



<!-- This is An End -->


  <div class="main">
  <img src="images/contact.webp" alt="" style="min-height: 80vh; margin-top: 3rem;">

  <div class="main-inner" style="display: flex; flex-direction: column; flex-wrap: nowrap;">
  <h1 style="margin-bottom: 4rem; border-bottom: 2px solid #242424; width: fit-content;
  padding-bottom: 5px;"><i class="fa-solid fa-hands-praying"></i>&nbsp;&nbsp;We are available for you 24/7</h1>
  <p>If you have any query regarding selling or buying of cars, accesories purchasing,
    Insurance claim, Loan for cars, repair work or any other kind of
    work/ business proposals. please feel free to Contact Us !



  </p>
  <button>Scroll Down To fetch the Contact Form&nbsp;&nbsp;<i class="fa-solid fa-arrow-down-long"></i></button>

</div>
</div>
  <main>

    <!-- This is An Map For The Location -->
    <div class="map" style="width: 100%; height: 100vh; margin: auto; margin-top: 5rem;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.584112325399!2d72.53389711428422!3d23.11231541876932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83981014eab9%3A0x792a164bb3678139!2sCARZ%20KING!5e0!3m2!1sen!2sin!4v1656045583767!5m2!1sen!2sin" 
    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- This is An End -->

    <form action="" method="POST">
      <h1>Contact Us</h1>
    

      <div class="input">

        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" placeholder="e.g. Harsh Chauhan" required>

        <label for="email">Your Email</label>
        <input type="email" name="email" id="email" placeholder="e.g. abc.xyz@gmail.com" required> 

        <label for="date">Date of submission</label>
        <input type="date" name="date" id="date" required>

        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required placeholder="e.g. Buying of Bmw 7 series">



        <label for="message">Type your query</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="e.g. Start from here to Write..."
        required></textarea>
      </div>

      <div>
        <p>
&nbsp;&nbsp;* By Clicking on Submit. You hereby declare to accept our all policy and terms and conditions.           
        </p>
      </div>


      <button type="submit" name="submit">Submit</button>

  </form>
  </main>

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

    <a href=""><i class="fa-solid fa-arrow-right-long"></i>Sitemap</a></div>

</div>

<div class="f-bottom">
<p>All Rights Reserved. <i class="fa-regular fa-copyright"></i> 2022 - <a href="">Carz King</a> </p>
</div>
</footer>


  <script src="cars.js"></script>

<script>
const success = document.getElementById("success");
success.addEventListener('click', ()=>{
    success.style.display="none";
})
</script>




</body>
</html>