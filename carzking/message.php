<?php 

error_reporting (E_ALL ^ E_NOTICE);
sleep(1);
 ?>
<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="ca.scss">

    <style>
        @import 'https://fonts.googleapis.com/css?family=Open+Sans:600,700';

*{
    font-family: 'Open Sans', sans-serif;
}

table{
    width: 100%;
    background: white;
    height: fit-content;
    padding: 10px 20px;
    border-radius: 4px;
    margin: auto;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;

}

.table{
    overflow: scroll;
    padding: 10px;
    height: 70vh;
    width: 1200px;
    display: flex;
    flex-direction: column;
    margin: auto;
    justify-content: center;
}

tr{
    margin-top: 2rem;

}

tr td{
    border-top: 1.7px solid lightgrey;
    border-collapse: collapse;
    padding: 10px;
    border-left: 1.7px solid lightgrey;
}

#main{
    color: seagreen;
    border-bottom: 2px solid lightgrey;
    padding: 5px 7px;
    margin-bottom: 2rem;
}

    </style>

<head>
<body style="display: flex; flex-direction: column;">

<a href="form.php">Back To Car Register Page</a>

<h1 style="width: 100%; color: darkslategrey;">Carz King - Contact US Form Inquires :</h1>


<div class='table'>

<table>
    <thead id='main'>
        <tr >
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Subject</th>
            <th>Message</th>

        </tr>
    </thead>
    
    <tbody>
        
<?php

error_reporting(0);

$sql = "SELECT * FROM contact_us ORDER BY id ASC";

$result = $conn-> query($sql);

if($result ->num_rows > 0){
    while ($row = $result-> fetch_assoc()) {
        echo "    <tr>

                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['date']."</td>
                <td>".$row['subject']."</td>
                <td style='border-right: 1.7px solid lightgrey;'>".$row['message']."</td>
                </tr>

        ";
     
    }
}


  


?>
        </tbody>
    </table>
</div>


</div>
</body>
</html>