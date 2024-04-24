
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file1">
        <input type="submit" name="submit">
</input>
    </form>

    
<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "images";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    
}


error_reporting(0);

$folder = "/images";
$file1 = $_FILES["file1"]["name"];
$tempname= $_FILES["file1"]["tmp_name"];

$image_name = "cars/".$file1;

print_r("cars/".$file1);
move_uploaded_file($full,$tempname);



if(isset($_POST["submit"])){

    header("Location: display.php");

$query = "INSERT INTO img (file) VALUES ('$image_name')";
$ins_query = mysqli_query($conn, $query);


$sql = "SELECT file FROM img ORDER BY file";
$result = $conn-> query($sql);


if($result ->num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        echo "    <tr>

                <td>".$row['id']."</td>
                <td><img src='".$row['file']."'</td>
        ";
     
    }
}


    
}
    ?>
