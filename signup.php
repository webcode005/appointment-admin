<?php
require('include/config.php');

if(isset($_POST['bdetails']))
{
      
        $name=mysqli_real_escape_string($conn,$_POST['cust_name']); 
        $comp_name=ucfirst(mysqli_real_escape_string($conn,$_POST['comp_name'])); 
        $email=mysqli_real_escape_string($conn,$_POST['cust_email']);
        $mobile=mysqli_real_escape_string($conn,$_POST['cust_mobile']);
        $website=mysqli_real_escape_string($conn,$_POST['website']);

        $services=(explode(",",mysqli_real_escape_string($conn,$_POST['service'])));

        $service = $services[0];

        $price = $services[1];

        $added_on=date('Y-m-d h:i:s');


        // print_r($_POST);

        // die;
        


        $added_on=date('Y-m-d h:i:s');
        
        
        $sql = "INSERT INTO `signup` ( `name`, `comp_name`, `email`, `phone`, `website`, `service`,`price`,`txn_no`,`payment_status`, `rdate`) 
        VALUES ( '$name', '$comp_name', '$email', '$mobile', '$website','$service', '$price','','', '$added_on')";
        
        if ($conn->query($sql) === TRUE) {
                  
             //echo'<script> alert("Thank You!");window.location ="index.php"; </script>';
              $last_id = $conn->insert_id;
              
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["amount"] = $price;
                $_SESSION["service"] = $service;
                $_SESSION["signupid"] = $last_id;
             
             header('location:https://haldiramrestaurant.in/titan-website/stripe/card.php');
             
             
            exit();
        
        }
        else
        {
            echo"failed";
        }





        
}


?>