

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
<!-- Boot --> <link href="/css/bootstrap.min.css" rel="stylesheet">

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

</head>

<style>

body{
    overflow-x: hidden;
}
/* General button style */
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
.plus{
    width: fit-content;
    float:left;
    margin-left: 2rem;
    margin-top: -3%;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    background:  #FF6F61;
    color: white;
    padding: 7px 17px;
    border-radius: 4px;
    cursor:pointer;
    display:flex;
    outline: none;
}

.plus:hover{
    color: white;
}


.plus i{
    color: white;
    font-size: 22px;
    margin-right: 1rem;
    float:left;
}

.plus .fa-filter{
    display: block;
    
}


#close_div{
    display: none;
}

.form{
    width: 90%;
    margin: 5% auto;
    padding: 7px 13px;
    border-radius: 5px;
    background: white;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    flex-direction: column;
    display:none;
}

.card_inner{
    padding: 7px 13px;
    font-family: sans-serif;
    font-size: 17px;
    cursor: pointer;
}

.card-body h2{
    color:  #FF6F61;
    font-weight: 600;
    font-size: 20px;
}

input[type="checkbox"]{
    color: black;
    cursor: pointer;

}

/* This is My Inner Filter Head */

.pet p{
    color: darkslategrey;
    font-weight: 500;
    font-size: 20px
}
/* This is Just An End */
.filter_btn{
    background:  #FF6F61;
    border: 2px solid #FF6F61;
    color: white;
    border-radius: 5px;
    width: fit-content;
    height: fit-content;
    padding: 10px 20px;
    line-height: 3.23rem;
    margin-top: 3rem;
    font-size: 17px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    outline: none;
    cursor: pointer;
}

@media screen and (max-width: 768px){
    form{
        width: 90%;
        margin: auto;
    }
}
</style>

      
<body>

<div class="plus">

<button id="open_div"><i class="fa-solid fa-filter"></i>Filter My Searches</button>
<button id="close_div"><i class="fa-solid fa-xmark"></i>Close My Filter</button>


</div>
 
 <!-- Brand List  -->
 <div class="card">
                <form action="" class="form" method="GET" id="fil_form">

              


                    <div class="cards">
                      

                        <div class="card-body">
                        <h2 style="color: #FF6F61;">Filter My Searches :</h2>

                            <div class="card_inner">
                            <?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {?>
                                <div class="pet"><p>By Fuel Type</p></div>
                                <?php
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

 <!-- Type List  -->
 <div class="card_inner">
<?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {?>
<div class="pet"><p>By Body Type</p></div>
                                <?php
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
                                                value="<?= $brandlist['type_id']; ?>" 
                                                    <?php if(in_array($brandlist['type_id'], $checked))
                                                    { echo "checked"; } ?>
                                                 >
                                                <?= $brandlist['type']; ?>
                                
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


                        <!-- This is An End -->
<!-- This Are My Owner Filters -->
<div class="card_inner">
<?php
                                $con = mysqli_connect("localhost","root","","cars");

                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {?>
<div class="pet"><p>By Ownership</p></div>
                                <?php
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
                                {?>
<div class="pet"><p>By Transmission Type</p></div>
                                <?php
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
                                {?>

<div class="pet"><p>By Price Range</p></div>
                                <?php
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
            <div>
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
                                    $products = "SELECT * FROM cars_data WHERE fuel_id OR own_id 
                                    OR trans_id OR price_id OR type_id IN ($rowbrand) 
                                   
                                    ";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $items) :
                                            ?>
                                              
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
                                               
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else/*
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
                            */
                        ?>

                        </div>
                        </div>
                        </div>


<script>

const open_div = document.getElementById('open_div');
const close_div = document.getElementById('close_div');
const my_form = document.getElementById('fil_form');

open_div.addEventListener("click", function(){
    my_form.style.display="block";
    open_div.style.display="none";
    close_div.style.display="block";
})

close_div.addEventListener("click", function(){
    my_form.style.display="none";

    open_div.style.display="block";
    close_div.style.display="none";
})
    </script>

                        </body>
</html>