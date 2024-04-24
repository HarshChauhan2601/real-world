<?php 

include 'connection.php';
// This is To Avoid Undefined Index Error Message !!!!!!!

error_reporting (E_ALL ^ E_NOTICE);
sleep(1);

session_start();

?>
<?php 
$result = mysqli_query($conn,"SELECT * FROM cars_data WHERE special_id = '".$_GET['id']."' ORDER BY `cname` DESC");

$items = mysqli_fetch_assoc($result);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- This is For SEO -->

<title>carz king | <?=  $items['cname']; ?> | car s | used cars | cars for sale</title>

<meta name="description" itemprop="description" content="Carz King - Buy used cars and avail many great offers today.">

<meta name="keywords" itemprop="keywords" content="car s,second hand cars,car s,second hand cars,used car prices,used cars,used cars for sale,car prices,used cars near me,car best,car sale,2nd hand car,buy used car">

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
  <link rel="stylesheet" href="gallery.css">


<style>
body{
  background: #f6f4f8;
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


.cars_full{
  width: 90%;
  margin: auto;
  margin-bottom: 10rem;
  position: relative;
  height: fit-content;
  background: white;
  padding: 20px;
  padding-bottom: 70px;
  border-radius: 8px;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  transition: 2s ease;

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
height: 250px;
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

.other1 h1{
  margin-top:3.5rem;
  color: #0077f9;
}

.other2 h1{
  margin-top:3.5rem;
  color: #0077f9;
}


.other3 h1{
  margin-top:3.5rem;
  color: #0077f9;
}

.other1 i{
  color: #0077f9;
  font-weight: 600;
  margin-right: .3rem;
}



.other2 i{
  color: #0077f9;
  font-weight: 600;
  margin-right: .3rem;
}




.other3 i{
  color: #0077f9;
  font-weight: 600;
  margin-right: .3rem;
}

/* This is My Carousel */
.carousel {
  margin-top: 10rem;
   
  padding: 20px;
}

.carousel ul.slides {
    display: block;
    position: relative;
    height: 500px;
    margin: 0;
    padding: 0;
    overflow: hidden;
    list-style: none;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

.carousel ul.slides input {
    display: none; 
}


.slide-container { 
    display: block; 
}

.slide-image {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    opacity: 0;
    transition: all .7s ease-in-out;
}   

.slide-image img {
    width: auto;
    min-width: 100%;
    height: 100%;
    border-radius: 5px;
}

.carousel-controls {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
    font-size: 50px;
    line-height: 600px;
    color: #fff;
}

.carousel-controls label {
    display: none;
    position: absolute;
    padding: 0 10px;
    opacity: 0;
    transition: opacity .2s;
    cursor: pointer;
}

.slide-image:hover + .carousel-controls label{
    opacity: 0.5;
}

.carousel-controls label:hover {
    opacity: 1;
}

.carousel-controls .prev-slide {
    width: 49%;
    text-align: left;
    left: 0;
}

.carousel-controls .next-slide {
    width: 49%;
    text-align: right;
    right: 0;
}

.carousel-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    z-index: 999;
    text-align: center;
}

.carousel-dots .carousel-dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #fff;
    opacity: 0.5;
    margin: 10px;
    cursor: pointer;
}

input:checked + .slide-container .slide-image {
    opacity: 1;
    transform: scale(1);
    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .carousel-controls label {
     display: block; 
}

input#img-1:checked ~ .carousel-dots label#img-dot-1,
input#img-2:checked ~ .carousel-dots label#img-dot-2,
input#img-3:checked ~ .carousel-dots label#img-dot-3,
input#img-4:checked ~ .carousel-dots label#img-dot-4,
input#img-5:checked ~ .carousel-dots label#img-dot-5,
input#img-6:checked ~ .carousel-dots label#img-dot-6 {
	opacity: 1;
}


input:checked + .slide-container .nav label { display: block; }

/* This is An End */

</style>

</head>


 <!-- This is My Path From My Home page -->
 <div class="path">
  <a href="index.php"><i class="fa-solid fa-house-chimney"></i></a>
<p>Home</p>
<i class="fa-solid fa-angles-right"></i>
<span>Preowned Cars</span>

<i class="fa-solid fa-angles-right"></i>
<span><?=  $items['cname']; ?></span>


<i class="fa-solid fa-angles-right"></i>
<span>Car ID : <?=  $items['special_id']; ?></span>
</div>
<!-- This is My End -->

 
<body>

<?php


echo "  
<div class='cars_full' id='cars_full' style='margin-top: 10rem;'>


<div class='car'  style='color: steelblue; border: 1.7px dashed darkslategrey; 
border-radius: 5px;
padding: 10px 20px; 
margin-bottom: 3rem;'>
<fieldset><i class='fa-solid fa-car'></i>&nbsp;&nbsp;Carz King - Cars Section</fieldset>

</div>

<strong style='font-size: 20px; color: tomato; padding: 10px 20px; 
border: 1.7px dashed slategrey; 
border-radius: 5px;'>Status : ".$items['sold']."</strong>


<h1 style='color: darkslateblue; margin-top: 7rem;'><strong>".$items['cname']."</strong>
 - ".$items['model']."</h1>
<div class='lines' style='height: 2px; 
width: 15%; background: darkslategray; margin-top: 1.5rem;
margin-bottom: 3rem;'></div>

<!-- This is My Images Slide Show -->
<div>
<div class='carousel'>
  <ul class='slides'>
    <input type='radio' name='radio-buttons' id='img-1' checked />
    <li class='slide-container'>
      <div class='slide-image'>
      <img src='".$items['file1']."'>
      </div>
      <div class='carousel-controls'>
        <label for='img-3' class='prev-slide'>
          <span>&lsaquo;</span>
        </label>

        <label for='img-2' class='next-slide'>
          <span>&rsaquo;</span>
        </label>
      </div>
    </li>

    <li class='slide-container'>
    <div class='slide-image'>
    <img src='".$items['file2']."'>
    </div>
    <div class='carousel-controls'>
      <label for='img-3' class='prev-slide'>
        <span>&lsaquo;</span>
      </label>
      
      <label for='img-2' class='next-slide'>
        <span>&rsaquo;</span>
      </label>
    </div>
  </li>

  <li class='slide-container'>
  <div class='slide-image'>
  <img src='".$items['file3']."'>
  </div>
  <div class='carousel-controls'>
    <label for='img-3' class='prev-slide'>
      <span>&lsaquo;</span>
    </label>
    
    <label for='img-2' class='next-slide'>
      <span>&rsaquo;</span>
    </label>
  </div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file4']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file5']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file6']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file7']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file8']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file9']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file10']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file11']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>

<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file12']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>
<li class='slide-container'>
<div class='slide-image'>
<img src='".$items['file13']."'>
</div>
<div class='carousel-controls'>
  <label for='img-3' class='prev-slide'>
    <span>&lsaquo;</span>
  </label>
  
  <label for='img-2' class='next-slide'>
    <span>&rsaquo;</span>
  </label>
</div>
</li>
    <input type='radio' name='radio-buttons' id='img-2' />
    <li class='slide-container'>
      <div class='slide-image'>
        <img src='".$items['file14']."'>
      </div>
      <div class='carousel-controls'>
        <label for='img-1' class='prev-slide'>
          <span>&lsaquo;</span>
        </label>
        <label for='img-3' class='next-slide'>
          <span>&rsaquo;</span>
        </label>
      </div>
    </li>
    <input type='radio' name='radio-buttons' id='img-3' />
    <li class='slide-container'>
      <div class='slide-image'>
      <img src='".$items['file15']."'>
      </div>
      <div class='carousel-controls'>
        <label for='img-2' class='prev-slide'>
          <span>&lsaquo;</span>
        </label>
        <label for='img-1' class='next-slide'>
          <span>&rsaquo;</span>
        </label>
      </div>
    </li>
    <div class='carousel-dots'>
      <label for='img-1' class='carousel-dot' id='img-dot-1'></label>
      <label for='img-2' class='carousel-dot' id='img-dot-2'></label>
      <label for='img-3' class='carousel-dot' id='img-dot-3'></label>
    </div>
  </ul>
</div>
</div>
<!-- This is An End -->


 <div class='desc'>


<div class='desc_in' style='list-style: none; margin-top: 10rem;'>
    <li>Company : ".$items['cname']."</li>
    <li>Model : ".$items['model']."</li>
    <li>Version : ".$items['version']."</li>
    <li>Registration City : ".$items['register']."</li>
    <li>color : ".$items['color']."</li>
    <li>KMS Travelled : ".$items['kms']."</li>
    <li>Manufacturing Year : ".$items['year']."</li>
    <li>Fuel Type : ".$items['fuel']."</li>
    <li>Owner : ".$items['owner']."</li>
    <li>Insurance Date : ".$items['insure']."</li>
    <li>Transmission Type : ".$items['trans']."</li>
    <li>Seating Capacity : ".$items['seat']."</li>
    <li>Body Type : ".$items['type']."</li>
</div>
</div>

<!-- These Are My Other Details -->
<div class='other' style='list-style: none; margin-top: 5rem;'>

<div class='other1'>
<h1>Security Features :</h1>
<div class='lines' style='height: 2px; width: 15%; 
background: darkslategray; margin-top: 0.5rem;
margin-bottom: 3rem;'></div>


<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec1']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec2']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec3']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec4']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec5']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec6']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['sec7']."</li>
</div>


<div class='other2'>
<h1>Comfort Features :</h1>
<div class='lines' style='height: 2px; width: 15%;
 background: darkslategray; margin-top: 0.5rem;
margin-bottom: 3rem;'></div>



<li><i class='fa-solid fa-check'></i>&nbsp;".$items['com1']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['com2']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['com3']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['com4']."</li>
<li><i class='fa-solid fa-check'></i>&nbsp;".$items['com5']."</li></div>


<div class='other3'>
  <h1>Other Features :</h1>
  <div class='lines' style='height: 2px; width: 15%;
   background: darkslategray; margin-top: 0.5rem;
margin-bottom: 3rem;'></div>

  
  <li><i class='fa-solid fa-check'></i>&nbsp;".$items['other1']."</li>
  <li><i class='fa-solid fa-check'></i>&nbsp;".$items['other2']."</li>
  <li><i class='fa-solid fa-check'></i>&nbsp;".$items['other3']."</li>
  <li><i class='fa-solid fa-check'></i>&nbsp;".$items['other4']."</li>
  <li><i class='fa-solid fa-check'></i>&nbsp;".$items['other5']."</li>
  </div>

</div>


<div class='stop' style='width: 100%; height: fit-content; 
text-align: end; margin: auto; 
margin-top: 7rem;
border-top: 1.7px solid lightgray;
padding: 10px;'>


<a href='tel:9512617191' style='background-color: #f6f4f8; color: darkslategrey;
padding: 5px 10px; float: left; height: 4.5rem; width: fit-content; border-radius: 4px;
text-align: center; line-height:4.3rem; '>
<i class='fa-solid fa-user'></i>
&nbsp;&nbsp;Contact Sales</a>


<a href='contact.php' target='_blank' style='background-color:#f6f4f8;
color: darkslategrey; height: 4.5rem; text-align: center; line-height:4.3rem;  padding: 5px 10px; width: fit-content; border-radius: 4px;'>
<i class='fa-solid fa-address-card'></i>
&nbsp;&nbsp;Contact via Inquiry Form
</a>
</div>

</div>
</div>


</div>

";
?>

<?php



?>


</body>
</html>
