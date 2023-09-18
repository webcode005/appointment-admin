<?php

// Include the DB config & class files
require_once 'config.php';
require_once 'dbclass.php';

// If transaction ID is not empty 
if(!empty($_GET['tid'])){
    $transaction_id  = $_GET['tid'];

    $db = new DB;
    // Fetch the transaction details from DB using Transaction ID
    $db->query("SELECT * FROM `stripe_payment` WHERE transaction_id=:transaction_id");
    $db->bind(":transaction_id", $transaction_id);
    $row = $db->result();
    $db->close();
    if(!empty($row)){
        $fullname = $row['fullname'];
        $email = $row['email'];
        $item_description = $row['item_description'];
        $currency = $row['currency'];
        $amount = $row['amount'];
    }
}else{ 
    header("Location: index.php"); 
    exit(); 
} 
?>
<html>
<head>
<title>Success Stripe Payment </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>

<div style="width:700px; margin:50 auto;">
<h1>Success! Stripe Payment </h1>

<?php if(!empty($row)){ ?>
    <h2 style="color: #327e00;">Success! Your payment has been received successfully.</h2>
    <h3>Payment Receipt:</h3>
    <p><strong>Dear:</strong> <?php echo $fullname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Transaction ID:</strong> <?php echo $transaction_id; ?></p>
    <p><strong>Amount:</strong> <?php echo $amount.' '.$currency; ?></p>
    <p><strong>Item Description:</strong> <?php echo $item_description; ?></p>
    
    
    <!--Send Email-->
  <?php  
            $to = 'mohammadkaleem61@gmail.com,basant.mallick@digiclawmedia.com';
            $to = $email;
            $from = 'info@haldiramrestaurant.in'; 
            $fromName = 'TITAN GLOBAL SERVICES'; 
             
            $subject = "Email From TITAN GLOBAL SERVICES"; 
             
            $htmlContent = ' 
                <html> 
                <head> 
                    <title>Welcome to TITAN GLOBAL SERVICES</title> 
                </head> 
                <body> 
                     <h2><strong>Dear </strong> '. $fullname.',</h2>
                    <h3>Thanks you for joining with us!</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue blandit lorem, ut maximus sem. Ut ac justo rhoncus, imperdiet dolor quis, aliquet quam. Nullam tincidunt enim id ultricies pellentesque. Ut nec pretium turpis. Proin sed egestas urna. Vivamus tincidunt elit felis, vitae scelerisque odio tincidunt vel. In urna nibh, sagittis ac posuere ut, auctor non enim. Fusce lobortis euismod orci at porta. In ut quam varius odio congue semper id quis diam. Fusce tempus laoreet felis eget ultricies. Nam vestibulum vehicula dui a porttitor. Mauris sodales vulputate felis non sagittis.</p>
                </body> 
                </html>'; 
             
            // Set content-type header for sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             
            // Additional headers 
            $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            
             
            // Send email 
            if(mail($to, $subject, $htmlContent, $headers)){ 
                echo 'Email has sent successfully.'; 
            }else{ 
               echo 'Email sending failed.'; 
            }
    ?>
    <!--End Sending Email-->
    
<?php }else{ ?>
    <h1>Error! Your transaction has been failed.</h1>
<?php } ?>



</div>
</body>
</html>