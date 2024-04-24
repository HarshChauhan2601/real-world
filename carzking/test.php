<?php

$success = "<div class='error-notice'> <div class='oaerror success'>
<strong>Congrats</strong> - Data Inserted Successfully !
</div></div>";

$fail = "<div class='error-notice'> <div class='oaerror danger'>
<strong>Error</strong> - Due To Some Reasons Data Not Inserted Successfully. Please, Try Again in a While !
</div></div>";


$thu = "<div class='error-notice'> <div class='oaerror danger'>
<strong>Error</strong> - This Special ID for Car is Already exists. Please, try another one !
</div></div>";
?>

<?php

error_reporting(0);


require_once 'connection.php';


if(isset($_POST['submit'])){
 

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $special_id = mysqli_real_escape_string($conn, $_POST['special_id']);

    $file1 = $_FILES['file1'];
// This is to print All The Images
$file1_name = $file1['name'];
$file1_path = $file1['tmp_name'];
$file1_error = $file1['error'];


$file2 = $_FILES['file2'];
// This is to print All The Images
$file2_name = $file2['name'];
$file2_path = $file2['tmp_name'];
$file2_error = $file2['error'];



$file3 = $_FILES['file3'];
// This is to print All The Images
$file3_name = $file3['name'];
$file3_path = $file3['tmp_name'];
$file3_error = $file3['error'];



$file4 = $_FILES['file4'];
// This is to print All The Images
$file4_name = $file4['name'];
$file4_path = $file4['tmp_name'];
$file4_error = $file4['error'];



$file5 = $_FILES['file5'];
// This is to print All The Images
$file5_name = $file5['name'];
$file5_path = $file5['tmp_name'];
$file5_error = $file5['error'];



$file6 = $_FILES['file6'];
// This is to print All The Images
$file6_name = $file6['name'];
$file6_path = $file6['tmp_name'];
$file6_error = $file6['error'];



$file7 = $_FILES['file7'];
// This is to print All The Images
$file7_name = $file7['name'];
$file7_path = $file7['tmp_name'];
$file7_error = $file7['error'];



$file8 = $_FILES['file8'];
// This is to print All The Images
$file8_name = $file8['name'];
$file8_path = $file8['tmp_name'];
$file8_error = $file8['error'];



$file9 = $_FILES['file9'];
// This is to print All The Images
$file9_name = $file9['name'];
$file9_path = $file9['tmp_name'];
$file9_error = $file9['error'];



$file10 = $_FILES['file10'];
// This is to print All The Images
$file10_name = $file10['name'];
$file10_path = $file10['tmp_name'];
$file10_error = $file10['error'];


$file11 = $_FILES['file11'];
// This is to print All The Images
$file11_name = $file11['name'];
$file11_path = $file11['tmp_name'];
$file11_error = $file11['error'];


$file12 = $_FILES['file12'];
// This is to print All The Images
$file12_name = $file12['name'];
$file12_path = $file12['tmp_name'];
$file12_error = $file12['error'];


$file13 = $_FILES['file13'];
// This is to print All The Images
$file13_name = $file13['name'];
$file13_path = $file13['tmp_name'];
$file13_error = $file13['error'];


$file14 = $_FILES['file14'];
// This is to print All The Images
$file14_name = $file14['name'];
$file14_path = $file14['tmp_name'];
$file14_error = $file14['error'];


$file15 = $_FILES['file15'];
// This is to print All The Images
$file15_name = $file15['name'];
$file15_path = $file15['tmp_name'];
$file15_error = $file15['error'];




if($file1_error == 0){
    $file1_dest = "cars/".$file1_name; 
    move_uploaded_file($file1_name,$file1_dest);
    
   if(!file_exists($file1_dest)){
       if(move_uploaded_file($_FILES['file1']['tmp_name'], $file1_dest)){
          // $ins1 = "INSERT INTO cars_data (file1) VALUES('$file1_dest')";
          // $sql1 = mysqli_query($conn, $ins1);
       }
   }

    $file2_dest = "cars/".$file2_name; 
    move_uploaded_file($file2_name,$file2_dest);
    if(!file_exists($file2_dest)){
        if(move_uploaded_file($_FILES['file2']['tmp_name'], $file2_dest)){
           // $ins2 = "INSERT INTO cars_data (file2) VALUES('$file2_dest')";
            //$sql2 = mysqli_query($conn, $ins2);
        }
    }
   
    $file3_dest = "cars/".$file3_name; 
    move_uploaded_file($file3_name,$file3_dest);
   
    if(!file_exists($file3_dest)){
        if(move_uploaded_file($_FILES['file3']['tmp_name'], $file3_dest)){
           // $ins3 = "INSERT INTO cars_data (file3) VALUES('$file3_dest')";
           // $sql3 = mysqli_query($conn, $ins3);
        }
    }
   
    $file4_dest = "cars/".$file4_name; 
    move_uploaded_file($file4_name,$file4_dest);
 
    if(!file_exists($file4_dest)){
        if(move_uploaded_file($_FILES['file4']['tmp_name'], $file4_dest)){
           // $ins4 = "INSERT INTO cars_data (file4) VALUES('$file4_dest')";
           // $sql4 = mysqli_query($conn, $ins4);
        }
    }
   
    $file5_dest = "cars/".$file5_name; 
    move_uploaded_file($file5_name,$file5_dest);
     
    if(!file_exists($file5_dest)){
        if(move_uploaded_file($_FILES['file5']['tmp_name'], $file5_dest)){
           // $ins5 = "INSERT INTO cars_data (file5) VALUES('$file5_dest')";
           // $sql5 = mysqli_query($conn, $ins5);
        }
    }
   
    $file6_dest = "cars/".$file6_name; 
    move_uploaded_file($file6_name,$file6_dest);
     
    if(!file_exists($file6_dest)){
        if(move_uploaded_file($_FILES['file6']['tmp_name'], $file6_dest)){
           // $ins6 = "INSERT INTO cars_data (file6) VALUES('$file6_dest')";
          //  $sql6 = mysqli_query($conn, $ins6);
        }
    }
   
    $file7_dest = "cars/".$file7_name; 
    move_uploaded_file($file7_name,$file7_dest);
   
    if(!file_exists($file7_dest)){
        if(move_uploaded_file($_FILES['file7']['tmp_name'], $file7_dest)){
            //$ins7 = "INSERT INTO cars_data (file7) VALUES('$file7_dest')";
            //$sql7 = mysqli_query($conn, $ins7);
        }
    }

    $file8_dest = "cars/".$file8_name; 
    move_uploaded_file($file8_name,$file8_dest);
    if(!file_exists($file8_dest)){
        if(move_uploaded_file($_FILES['file8']['tmp_name'], $file8_dest)){
           // $ins8 = "INSERT INTO cars_data (file8) VALUES('$file8_dest')";
           // $sql8 = mysqli_query($conn, $ins8);
        }
    }
    
    $file9_dest = "cars/".$file9_name; 
    move_uploaded_file($file9_name,$file9_dest);
   
    if(!file_exists($file9_dest)){
        if(move_uploaded_file($_FILES['file9']['tmp_name'], $file9_dest)){
           // $ins9 = "INSERT INTO cars_data (file9) VALUES('$file9_dest')";
           // $sql9 = mysqli_query($conn, $ins9);
        }
    }

    $file10_dest = "cars/".$file10_name; 
    move_uploaded_file($file10_name,$file10_dest);
   
    if(!file_exists($file10_dest)){
        if(move_uploaded_file($_FILES['file10']['tmp_name'], $file10_dest)){
           // $ins10 = "INSERT INTO cars_data (file10) VALUES('$file10_dest')";
          //  $sql10 = mysqli_query($conn, $ins10);
        }
    }

    $file11_dest = "cars/".$file11_name; 
    move_uploaded_file($file11_name,$file11_dest);
   
    if(!file_exists($file11_dest)){
        if(move_uploaded_file($_FILES['file11']['tmp_name'], $file11_dest)){
           // $ins11 = "INSERT INTO cars_data (file11) VALUES('$file11_dest')";
           // $sql11 = mysqli_query($conn, $ins11);
        }
    }

    $file12_dest = "cars/".$file12_name; 
    move_uploaded_file($file12_name,$file12_dest);
   
    if(!file_exists($file12dest)){
        if(move_uploaded_file($_FILES['file12']['tmp_name'], $file12_dest)){
            //$ins12 = "INSERT INTO cars_data (file12) VALUES('$file12_dest')";
            //$sql12 = mysqli_query($conn, $ins12);
        }
    }

    $file13_dest = "cars/".$file13_name; 
    move_uploaded_file($file13_name,$file13_dest);
     
    if(!file_exists($file13dest)){
        if(move_uploaded_file($_FILES['file13']['tmp_name'], $file13_dest)){
           // $ins13 = "INSERT INTO cars_data (file13) VALUES('$file13_dest')";
           // $sql13 = mysqli_query($conn, $ins13);
        }
    }
 
    $file14_dest = "cars/".$file14_name; 
    move_uploaded_file($file14_name,$file14_dest);
     
    if(!file_exists($file14dest)){
        if(move_uploaded_file($_FILES['file14']['tmp_name'], $file14_dest)){
           // $ins14 = "INSERT INTO cars_data (file14) VALUES('$file14_dest')";
           // $sql14 = mysqli_query($conn, $ins14);
        }
    }
  
    $file15_dest = "cars/".$file15_name; 
    move_uploaded_file($file15_name,$file15_dest);
 
    if(!file_exists($file15dest)){
        if(move_uploaded_file($_FILES['file15']['tmp_name'], $file15_dest)){
          //  $ins15 = "INSERT INTO cars_data (file15) VALUES('$file15_dest')";
           // $sql15 = mysqli_query($conn, $ins15);
        }
    }
   

    $cname = mysqli_real_escape_string($conn,$_POST['cname']);
    $model = mysqli_real_escape_string($conn,$_POST['model']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);
    $version = mysqli_real_escape_string($conn,$_POST['version']);


    $register = mysqli_real_escape_string($conn,$_POST['register']);
    $color = mysqli_real_escape_string($conn,$_POST['color']);
    $kms = mysqli_real_escape_string($conn,$_POST['kms']); 

    $year = mysqli_real_escape_string($conn,$_POST['year']);
    $fuel = mysqli_real_escape_string($conn,$_POST['fuel']);
    $sold = mysqli_real_escape_string($conn,$_POST['sold']);
    $owner= mysqli_real_escape_string($conn,$_POST['owner']);
    $insure = mysqli_real_escape_string($conn,$_POST['insure']);

    $type = mysqli_real_escape_string($conn,$_POST['type']);

    $trans = mysqli_real_escape_string($conn,$_POST['trans']);
    $seat = mysqli_real_escape_string($conn,$_POST['seat']);

    $sec1 = mysqli_real_escape_string($conn,$_POST['sec1']);
    $sec2 = mysqli_real_escape_string($conn,$_POST['sec2']);
    $sec3 = mysqli_real_escape_string($conn,$_POST['sec3']);
    $sec4 = mysqli_real_escape_string($conn,$_POST['sec4']);
    $sec5 = mysqli_real_escape_string($conn,$_POST['sec5']);
    $sec6 = mysqli_real_escape_string($conn,$_POST['sec6']);
    $sec7 = mysqli_real_escape_string($conn,$_POST['sec7']);

    $com1 = mysqli_real_escape_string($conn,$_POST['com1']);
    $com2 = mysqli_real_escape_string($conn,$_POST['com2']);
    $com3 = mysqli_real_escape_string($conn,$_POST['com3']);
    $com4 = mysqli_real_escape_string($conn,$_POST['com4']);
    $com5 = mysqli_real_escape_string($conn,$_POST['com5']);

    $other1 = mysqli_real_escape_string($conn,$_POST['other1']);
    $other2 = mysqli_real_escape_string($conn,$_POST['other2']);
    $other3 = mysqli_real_escape_string($conn,$_POST['other3']);
    $other4 = mysqli_real_escape_string($conn,$_POST['other4']);
    $other5 = mysqli_real_escape_string($conn,$_POST['other5']);

    $fuel_id = mysqli_real_escape_string($conn,$_POST['fuel_id']);
    $own_id = mysqli_real_escape_string($conn,$_POST['own_id']);
    $trans_id = mysqli_real_escape_string($conn,$_POST['trans_id']);
    $price_id = mysqli_real_escape_string($conn,$_POST['price_id']);



/* This is To check If Special ID is Already exists */
/* This is To check Th path of the Image*/



/* This Is An End */

    $myquery = "INSERT INTO cars_data (special_id, file1,file2,file3,file4,
    file5,file6,file7,file8,file9,file10,file11,file12,file13,file14,file15,
     cname, model, price,version, register, color,kms,year,fuel,sold,owner,insure,type,trans,seat,
    sec1,sec2,sec3,sec4,sec5,sec6,sec7,com1,com2,com3,com4,com5,other1,other2,other3,other4,other5,fuel_id,own_id,trans_id,price_id)
     VALUES('$special_id','$file1_dest','$file2_dest','$file3_dest','$file4_dest','$file5_dest','$file6_dest','$file7_dest','$file8_dest','$file9_dest','$file10_dest','$file11_dest','$file12_dest','$file13_dest','$file14_dest','$file15_dest',
     '$cname', '$model', '$price','$version','$register', 
     '$color','$kms', '$year', '$fuel', '$sold' , '$owner', '$insure', '$type','$trans', '$seat',
      '$sec1', '$sec2', '$sec3', '$sec4', '$sec5', '$sec6', '$sec7', '$com1', '$com2',
     '$com3', '$com4', '$com5', '$other1', '$other2', '$other3', '$other4', '$other5','$fuel_id', '$own_id', '$trans_id', '$price_id')";

$query_run = mysqli_query($conn, $myquery);

     if($query_run){
         echo $success;
     }

     else{
        echo $fail;
     }

    

    
}
}


?>

<!--

https://sg2plzcpnl453265.prod.sin2.secureserver.net:2083/cpsess9160892642/frontend/paper_lantern/index.html

https://sg2plzcpnl453265.prod.sin2.secureserver.net:2083/cpsess9160892642/frontend/paper_lantern/filemanager/editit.html?file=all.php&fileop=&dir=%2Fhome%2Fcu3egezmqohi%2Fpublic_html&dirop=&charset=&file_charset=utf-8&baseurl=&basedir=&edit=1
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form/Carz-King</title>
</head>
<body>

<style>

body{
    background: #f6f4f8;
    overflow-x: hidden;
}

/* These Are My Error Messages */
.error-notice{
  margin:5px; /* Make sure to keep some distance from all sides */
}

.oaerror{
  width:90%;
  background-color: #ffffff;
  padding: 20px;
  border: 1px solid #eee;
  border-left-width:5px;
  border-radius: 3px;
  margin:10px auto;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
}

.danger{
  border-left-color: #d9534f; /* Left side border color */
  background-color: rgba(217, 83, 79, 0.1); /*Same color as the left border with reduced alpha to 0.1*/
}

.danger strong{
  color:#d9534f;
}

.warning{
  border-left-color: #f0ad4e;
  background-color: rgba(240, 173, 78, 0.1);
}

.warning strong{
  color:#f0ad4e;
}

.info {
  border-left-color: #5bc0de;
  background-color: rgba(91, 192, 222, 0.1);
}

.info strong {
  color: #5bc0de;
}

.success {
  border-left-color: #2b542c;
  background-color: rgba(43, 84, 44, 0.1);
}

.success strong {
  color: #2b542c;
}


/* This is An End */
    
    form{
        width: 90%;
        margin: 10% auto;
        background: white;
        padding: 10px 20px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
    }

    form input[type="text"]{
        width: 95%;
        margin-top: 2rem;
        height: 3rem;
        outline: none;
        border-radius: 4px;
        padding: 5px 10px;
        border: 1.7px solid lightgrey;
    }

    form input[type="file"]{
        margin-top: 2rem;
        padding: 10px 20px;
        border: 1.7px solid lightgrey;
        border-radius: 5px;
        cursor: pointer;
    }

   form select{
        width: 95%;
        margin-top: 2rem;
        height: 3rem;
        outline: none;
        border-radius: 4px;
        padding: 5px 10px;
        border: 1.7px solid lightgrey;
        cursor: pointer;
    }

    input[type="checkbox"]{
        cursor: pointer;

    }

    span{
        margin-top: 1rem;
        margin-bottom: 1rem;
        font-size: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: row;
    }

    input[type="submit"]{
        margin-top: 2.5rem;
        width: 40%;
        height: 3.5rem;
        background: #009329;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        padding: 10px 20px;
        outline: none;
    }

    .enable select{
        margin-right: 2.35rem;
    }
</style>

<!-- This is My Form -->

<form action="" method="POST" enctype="multipart/form-data">

<h1 style="color: steelblue; font-size: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" >Carz King</h1>
<p style="color: seagreen; font-size: 20px; font-weight: 600; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Cars Registration Form :</p>


<div class="input">


<div style="display: flex; flex-direction: column;">

<label for="file1" style="font-size: 20px; color: darkslategrey; font-weight: 600;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
">Please, Upload Cars Images. Only 3 pics are allowed !</label>


<input type="text" name="special_id" minlength="9" maxlength="9" placeholder="Please, Type An Specific ID For Any Car">

<input type="file" name="file1" placeholder="Car Image 1" name="file1" required>
<input type="file" name="file2" placeholder="Car Image 2">
<input type="file" name="file3" placeholder="Car Image 3">
<input type="file" name="file4" placeholder="Car Image 4">
<input type="file" name="file5" placeholder="Car Image 5">
<input type="file" name="file6" placeholder="Car Image 6">
<input type="file" name="file7" placeholder="Car Image 7">
<input type="file" name="file8" placeholder="Car Image 8">
<input type="file" name="file9" placeholder="Car Image 9">
<input type="file" name="file10" placeholder="Car Image 10">
<input type="file" name="file11" placeholder="Car Image 11">
<input type="file" name="file12" placeholder="Car Image 12">
<input type="file" name="file13" placeholder="Car Image 13">
<input type="file" name="file14" placeholder="Car Image 14">
<input type="file" name="file15" placeholder="Car Image 15">


</div>

<input type="text" name="cname" placeholder="Company Name" required>

<input type="text" name="model" placeholder="model" required>

<input type="text" name="price" placeholder="Car's Onroad Price" maxlength="10" required>


<input type="text" name="version" placeholder="version" required>

<input type="text" name="register" placeholder="Registration City">

<input type="text" name="color" placeholder="color" required>

<input type="text" name="kms" placeholder="Total Distance Travelled" required>


<input type="text" name="year" placeholder="Manufacturing Year" required>


<select name="fuel" id="fuel"  required>
    <option value="None" disabled="" enabled="">- Fuel Type -</option>
    <option value="petrol">Petrol</option>
    <option value="diesel">Diesel</option>
    <option value="petrol + Gas">Petrol + Gas</option>
    <option value="electric">Electric</option>
    <option value="N.A.">N.A.</option>
</select>


<select name="sold" id="sold"  required>
    <option value="None" disabled="" enabled="">- Availibilty -</option>
    <option value="Sold">Sold</option>
    <option value="Booked">Booked</option>
    <option value="sale">On Sale</option>
   
</select>



<select name="owner" id="owner"  required>
    <option value="None" id="" disabled="" enabled="" >- Owner Data -</option>
    <option value="1st owner">1st Owner</option>
    <option value="2nd owner">2nd Owner</option>
    <option value="3rd owner">3rd Owner</option>
    <option value="other">Other</option>
</select>


<input type="text" name="insure" id="" placeholder="Insurance Date" required>

<select name="trans" id="trans" required>
<option value="None" id="" disabled="" enabled="" >- Transmission Type -</option>
    <option value="Manual">Manual</option>
    <option value="Automatic">Automatic</option>
    <option value="Semi Automatic">Semi Automatic</option>
    <option value="Flaps">Flaps</option>
</select>


<select name="type" id="type" required>
<option value="None" id="" disabled="" enabled="" >- Car Structure Type -</option>
    <option value="HatchBack">HatchBack</option>
    <option value="Sedan">Sedan</option>
    <option value="SUV">SUV</option>
    <option value="Coupe">Coupe</option>
</select>


<select name="seat" required>
    <option value="None" id="" disabled="" enabled="" >- Seats In a Car -</option>
    <option value="2 seater">2 Seater</option>
    <option value="4 seater">4 Seater</option>
    <option value="5 seater">5 Seater</option>
    <option value="6 seater">6 seater</option>
    <option value="6+ seater">6+ Seater</option>
</select>


</div>

<div class="feat">
    <h2>If the Car has follwing Requirements Done, Then Only Click On IT</h2>


    <p style="color: darkslategrey; margin-top: 2.5rem; font-size: 22px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Security Measures :</p>
    <span><input type="checkbox" name="sec1" id="" value="Driver Air Bag">&nbsp;Driver Air Bag</span>
    <span><input type="checkbox" name="sec2" id="" value="Passenger Air Bag">&nbsp;Passenger Air Bag</span>
    <span><input type="checkbox" name="sec3" id="" value="Anti-lock Brakes">&nbsp;Anti-lock Brakes</span>
    <span><input type="checkbox" name="sec4" id="" value="Child Safety Lock">&nbsp;Child Safety Lock</span>
    <span><input type="checkbox" name="sec5" id="" value="Traction Control">&nbsp;Traction Control</span>
    <span><input type="checkbox" name="sec6" id="" value="Central Locking">&nbsp;Central Locking</span>
    <span><input type="checkbox" name="sec7" id="" value="Steering Adjustment">&nbsp;Steering Adjustment</span>

    
    <p style="color: darkslategrey; margin-top: 2.5rem; font-size: 22px; font-family: 'Segoe UI', 
Tahoma, Geneva, Verdana, sans-serif;">Comfort Measures :</p>
    <span><input type="checkbox" name="com1" id="" value="Air Conditioning">&nbsp;Air Conditioning</span>
    <span><input type="checkbox" name="com2" id="" value="Power Window">&nbsp;Power Window</span>
    <span><input type="checkbox" name="com3" id="" value="Power Steering">&nbsp;Power Steering</span>
    <span><input type="checkbox" name="com4" id="" value="Power Door Locks">&nbsp;Power Door Locks</span>
    <span><input type="checkbox" name="com5" id="" value="Defogger">&nbsp;Defogger</span>
   

    <p style="color: darkslategrey; margin-top: 2.5rem;
     font-size: 22px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Other Features :</p>
    <span><input type="checkbox" name="other1" id="" value="Audio System">&nbsp;Audio System</span>
    <span><input type="checkbox" name="other2" id="" value="Cup Holder">&nbsp;Cup Holder</span>
    <span><input type="checkbox" name="other3" id="" value="Tubeless Tires">&nbsp;Tubeless Tires</span>
    <span><input type="checkbox" name="other4" id="" value="Fog Lights">&nbsp;Fog Lights</span>
    <span><input type="checkbox" name="other5" id="" value="Tachometer">&nbsp;Tachometer</span>
   


</div>

<span style="width: 100%; margin: 4% auto;">* If you want to enable Filters in This Search . Please Select Below Values</span>

<div class="enable" style=" width: 100%; display: flex; flex-direction: row; justify-content: center;">


<select name="fuel_id" id="">
<option value="" enabled="" disabled="">-SELECT FUEL TYPE TO ENABLE FILTERS -</option>
<option value="1">Enable filters for - Petrol</option>
<option value="2">Enable filters for - Diesel</option>
<option value="3">Enable filters for - Petrol + Gas</option>
<option value="4">Enable filters for - Electric</option>

</select>


<select name="own_id" id="">
<option value="" enabled="" disabled="">-SELECT OWNER TYPE TO ENABLE FILTERS -</option>
<option value="1">Enable filters for - 1st Owner</option>
<option value="2">Enable filters for - 2nd owner</option>
<option value="3">Enable filters for - 3rd owner</option>
<option value="4">Enable filters for - +3rd owner</option>

</select>


<select name="trans_id" id="">
<option value="" enabled="" disabled="">-SELECT TRANSMISSION TYPE TO ENABLE FILTERS -</option>
<option value="1">Enable filters for - Manual / Gear</option>
<option value="2">Enable filters for - Automatic</option>
<option value="3">Enable filters for - Semi Automatic</option>
<option value="4">Enable filters for - Flaps</option>
</select>

</div>


<select name="type_id" id="">
<option value="" enabled="" disabled="">-SELECT BODY TYPE TO ENABLE FILTERS -</option>
<option value="1">Enable filters for - HatchBack</option>
<option value="2">Enable filters for - Sedan</option>
<option value="3">Enable filters for - SUV</option>
<option value="4">Enable filters for - Coupe</option>

</select>



<select name="price_id" id="">
<option value="" enabled="" disabled="">-SELECT PRICE RANGE TO ENABLE FILTERS -</option>
<option value="1">Upto 2 Lakhs</option>
<option value="2">2 to 5 Lakhs</option>
<option value="3">5 to 10 Lakhs</option>
<option value="4">Above 10 Lakhs</option>

</select>
</div>


<input type="submit" name="submit">


</form>


<!-- This is For The Message Link -->

<div class="msg">
    <p>Do you Want To see Contact Us Form Inquiries ? - Then</p>
    <a href="message.php" target="_blank">Click Here !</a>
</div>

<script>

const success = document.getElementById("success");
success.addEventListener('click', ()=>{
    success.style.display="none";
})





</script>
</body>
</html>