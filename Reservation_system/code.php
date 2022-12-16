<?php 
include('security.php');



if(isset($_POST['contact_btn']))
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$message = $_POST['message'];



    $query = "INSERT INTO contact (FName,LName,Contact_No,Message) VALUES 
    ('$firstname','$lastname','$contact','$message')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your message has been successfully delivered !";
        $_SESSION['status_code'] = "success";
        header('Location: contact.php'); 
     
    }
    else
    {
        $_SESSION['status'] = "Your message has not delivered !";
        $_SESSION['status_code'] = "error";
        header('Location: contact.php'); 
       
    }

}



//-----------------------------------------------------------------------------------------------------------------------




if(isset($_POST['BookNow_btn']))
{

$firstname = $_POST['firstname'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$types = $_POST['types'];
$address = $_POST['address'];



    $query = "INSERT INTO booking (Name,Contact_No,Gender,Product,Address) VALUES 
    ('$firstname','$contact','$gender','$types','$address')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your selected product is successfully booked !";
        $_SESSION['status_code'] = "success";
        header('Location: buyNow.php'); 
     
    }
    else
    {
        $_SESSION['status'] = "Your selected product is not booked !";
        $_SESSION['status_code'] = "error";
        header('Location: buyNow.php'); 
       
    }

}



?>