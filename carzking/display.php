<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php 

include 'connection.php';
include 'suggestions.php';
// This is To Avoid Undefined Index Error Message !!!!!!!

error_reporting (E_ALL ^ E_NOTICE);
sleep(1);

session_start();

?>
   
  <!-- This Is My -->

 <form action="" method="GET" id="form">
<div class="search" style="max-width:90%; margin: auto;">
  <input type="text" list="cars" name="search" id="search" placeholder="Type Car's Name / Company Name" 
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

    
<form action="" method="GET">

<?php

$box = "SELECT * FROM cars_data";
$box_qry = mysqli_query($conn, $box);

if(mysqli_num_rows($box_qry) > 0){

  foreach($box_qry as $boxes){
    $checked = [];
    if(isset($_GET['fuel'])){
      $checked = $_GET['fuel'];
    }
    ?>


<li>
<input type="checkbox" name="fuel[]" value="<?php $boxes['special_id']; ?>"
<?php if(in_array($boxes['special_id'],$checked)){echo "Checked";}
?>
>
<?= $boxes['fuel']; ?>
</li>

    <?php
  }


}


?>

<button type="submit">Submit</button>
</form>


<?php

/*
if(isset($_GET['fuel'])){

  $branchchecked = [];
  $branchchecked = $_GET['fuel'];

  foreach($branchchecked as $rowbrand){
    echo $rowbrand['special_id'];

  }

}



if(isset($_GET['search'])){

$filtervalues = $_GET['search'];
$select = "SELECT * from cars_data where CONCAT(cname, model) LIKE '%$filtervalues%'";
$queryrun = mysqli_query($conn, $select);

$row = mysqli_fetch_assoc($queryrun);



if(mysqli_num_rows($queryrun) > 0 ){
  foreach($queryrun as $items){
?>
    <div class='special_id'>   <?php $page = $items['special_id']; echo $page;?>
</div>

<?php
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
    
        
                
                <form method='GET'>
                <button name='button' id='button'>Full Details
                &nbsp;&nbsp;<i class='fa-solid fa-arrow-right-long'></i></button>
              
                </form>
    
                <a href= 'all.php?id=$items[special_id]'>Full Details</a>;

                </div>
    
                </div>


  ";

  

}}}



*/
?>

</body>
</html>