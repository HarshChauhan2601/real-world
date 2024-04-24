<style>

.cards{
    width: 20%;
    background: white;
    float: left;
    border-radius: 5px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
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

@media screen and (max-width: 768px){
    .card-body{
        width: 90%;
        margin: auto;
    }
}
</style>

<?php error_reporting(0);

$err = "<div>No Results Are Matching To Your Search ! Please, Try Something Else.</div>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                   
                </div>
            </div>

            <!-- Brand List  -->
            <div class="card">
                <form action="" method="GET">
                    <div class="cards">
                      

                        <div class="card-body">
                        <h2>Filter My Searches :</h2>

                            <div class="card_inner">
                            <?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div class="filter">
                                         

                                                <input type="checkbox" name="brands[]" 
                                                value="<?= $brandlist['fuel_id']; ?>" 
                                                    <?php if(in_array($brandlist['fuel_id'], $checked))
                                                    { echo "checked"; } ?>
                                                 >
                                                <?= $brandlist['fuel']; ?>
                                
                                            </div>
                                    <?php
                                    }
                                }
                                else
                                {
                                    echo $err;
                                }
                            ?>
                        </div>
                        </div>

<!-- This Are My Owner Filters -->
<div class="card_inner">
<?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div class="filter">
                                         

                                                <input type="checkbox" name="brands[]" 
                                                value="<?= $brandlist['own_id']; ?>" 
                                                    <?php if(in_array($brandlist['own_id'], $checked))
                                                    { echo "checked"; } ?>
                                                 >
                                                <?= $brandlist['owner']; ?>
                                
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                  echo $err;
                                }
                            ?>
                            </div>



                        
<!-- This Is An End -->


<!-- This Are My Transmission Filters -->
<div class="card_inner">
<?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div class="filter">
                                         

                                                <input type="checkbox" name="brands[]" 
                                                value="<?= $brandlist['trans_id']; ?>" 
                                                    <?php if(in_array($brandlist['trans_id'], $checked))
                                                    { echo "checked"; } ?>
                                                 >
                                                <?= $brandlist['trans']; ?>
                                
                                            </div>
                                  <?php
                                    }
                                }
                                else{
                                    echo $err;
                                }
                            ?>
                            </div>
<!-- This is An End -->


<!-- This Are My Price Filters -->
<div class="card_inner">
<?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div class="filter">
                                         

                                                <input type="checkbox" name="brands[]" 
                                                value="<?= $brandlist['price_id']; ?>" 
                                                    <?php if(in_array($brandlist['price_id'], $checked))
                                                    { echo "checked"; } ?>
                                                 >
                                                <?= $brandlist['price']; ?>
                                
                                            </div>
                                  <?php
                                    }
                                }
                                else{
                                    echo $err;
                                }
                            ?>
                            </div>
<!-- This is An End -->

<button type="submit" class="filter_btn">Apply Filters</button>


                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body-row">
                        <?php
                            if(isset($_GET['brands']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT DISTINCT * FROM cars_data WHERE fuel_id IN ($rowbrand) 
                                     OR own_id IN ($rowbrand)
                                    OR trans_id IN ($rowbrand) OR price_id IN ($rowbrand)
                                    ";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $items) :
                                            ?>
                                                <div class="filter">
                                                    <div>
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
                                                       
                                                           
                                                                   
                                                                   <a href='all.php?id=$items[special_id]' target='_blank' name='button' id='button'>Full Details
                                                                   &nbsp;&nbsp;<i class='fa-solid fa-arrow-right-long'></i></a>
                                                                 
                                                       
                                                                   </div>
                                                       
                                                                   </div>
                                                                   </div>
                                                   ";
                                                     ?>
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM cars_data";
                                $products_run = mysqli_query($con, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $items) :
                                        ?>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
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
                                                  
                                                      
                                                              
                                                              <a href='all.php?id=$items[special_id]' target='_blank' name='button' id='button'>Full Details
                                                              &nbsp;&nbsp;<i class='fa-solid fa-arrow-right-long'></i></a>
                                                            
                                                  
                                                              </div>
                                                  
                                                              </div>
                                                              </div>
                                              ";

                                                  ?>
                                                   
                                                </div>
                                            </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<!--

<input type="submit" name="submit" value="FIND ID">
</form>
-->




<!--
 
<?php

/*
$selectStmt = $conn->prepare('SELECT * FROM cars_data');
$selectStmt->execute();

$users = $selectStmt->get_result();
$datauser = $users->fetch_all(MYSQLI_ASSOC);

$tableContent = "";
$start = "";


foreach ($datauser as $user)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$user['id'].'</td>'
            .'<td>'.$user['cname'].'</td>'
            .'<td>'.$user['fuel'].'</td>'
            .'<td>'.$user['model'].'</td>';
}

if(isset($_POST['search']))
{

$start = $_POST['start'];
$tableContent = "";
$selectStmt = $conn->prepare('SELECT * FROM cars_data WHERE fuel like :start OR model like :start');

$selectStmt->execute(array(
        
         ':start'=>$start.'%'
    
));

$r = $selectStmt->get_result();
$users = $r->fetchAll(MYSQLI_ASSOC);
?>
<form action="" method="POST">
            <!-- 
For The First Time The Table Will Be Populated With All Data
But When You Choose An Option From The Select Options And Click The Find Button, The Table Will Be Populated With specific Data 
             -->
            <select name="start">
                <option value="">SELECT MY OPTION</option>
                <option value="A" <?php if($start == 'Petrol'){echo 'selected';}?>>Petrol</option>
                <option value="B" <?php if($start == 'Die'){echo 'selected';}?>>Diesel</option>
                <option value="C" <?php if($start == 'Hy'){echo 'selected';}?>>Hybrid</option>
                <option value="D" <?php if($start == 'Elec'){echo 'selected';}?>>Electric</option>
              
            </select>
            
            <input type="submit" name="search" value="Find">
            
            <table>
                <tr>
                    <td>ID</td>
                    <td>company 
                        Name
                    </td>
                    <td>Fuel Type</td>
                    <td>Model Name</td>
                </tr>
                
                <?php
                
                echo $tableContent;
                
                ?>
                
            </table>
            
        </form>
       


<?php

/*
foreach ($users as $user)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$user['id'].'</td>'
            .'<td>'.$user['cname'].'</td>'
            .'<td>'.$user['fuel'].'</td>'
            .'<td>'.$user['model'].'</td>';
}
    

*/

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Search & Display Using Selected Values</title>  
        <style>
            table,tr,td
            {
               border: 1px solid #000; 
            }
            
            td{
                background-color: #ddd;
            }
        </style>   
    </head>
    <body>
    -->
      
    </body>    
</html>
