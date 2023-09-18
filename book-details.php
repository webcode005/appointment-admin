<?php
require('include/config.php');

if(isset($_POST['bdetails']))
{
      
        $name=mysqli_real_escape_string($conn,$_POST['cust_name']); 
        $comp_name=mysqli_real_escape_string($conn,$_POST['comp_name']); 
        $email=mysqli_real_escape_string($conn,$_POST['cust_email']);
        $mobile=mysqli_real_escape_string($conn,$_POST['cust_mobile']);
        $website=mysqli_real_escape_string($conn,$_POST['website']);
        $bdate=mysqli_real_escape_string($conn,$_POST['bdate']);

        $time=mysqli_real_escape_string($conn,$_POST['time']);
        $remarks=mysqli_real_escape_string($conn,$_POST['remarks']);


        $added_on=date('Y-m-d h:i:s');
        
        
        $sql = "INSERT INTO `book` ( `name`, `comp_name`, `email`, `phone`, `website`, `bdate`, `btime`, `remarks`, `rdate`) 
        VALUES ( '$name', '$comp_name', '$email', '$mobile', '$website', '$bdate', '$time', '$remarks', '$added_on')";
        
        if ($conn->query($sql) === TRUE) {

            $book_id = $conn->insert_id;

            mysqli_query($conn,"INSERT INTO `booked_slot` ( `book_time`, `book_date`, `status`, `book_id`, `crdate`) 
            VALUES ( '$time', '$bdate', '1', '$book_id', CURRENT_TIMESTAMP)");
                  
             echo'<script> alert("Thank You!");window.location ="index.php"; </script>';
            
             
            exit();
        
        }

        
        else
        {
            echo"failed";
        }
        
}


?>