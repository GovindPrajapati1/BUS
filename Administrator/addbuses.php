<?php
    
    session_start();
    include('conn.php');
   
    // If upload button is clicked ...
    if (isset($_POST['save'])) {

        $bname = $_POST['bname'];
        $dis = $_POST['dis'];
        $pow = $_POST['pow'];
        $price = $_POST['price'];

        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "./img/" . $filename;


        // Get all the submitted data from the form
        $sql = "INSERT INTO bus (id, bname, price, dis, pow, image) VALUES ('', '$bname', '$price', '$dis', '$pow', '$filename')";



        // Execute query
        mysqli_query($conn, $sql);


        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo '<script language="javascript" type="text/javascript"> 
                alert("Data Successfully Inserted");window.location = "add_buses.php";</script>';
        } else {
            echo '<script language="javascript" type="text/javascript"> 
                alert("Data Unsuccessfully");window.location = "add_buses.php";</script>';
        }
    }
?>

