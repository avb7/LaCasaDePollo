<?php 

    $to = "falonyx@gmail.com"; 
    $from = $_POST['email']; 
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "La Casa De Pollo ORDER";
	
	
	$selectedORDER  = 'No food dish was checked';
if(isset($_POST['food']) && is_array($_POST['food']) && count($_POST['food']) > 0){
    $selectedORDER = implode(', ', $_POST['food']);
}


$MainORDER .= 'ORDERED ITEMS: ' . $selectedORDER;
	
    $message = $first_name . " " . $last_name . " ordered the following:" . "\n\n" . $MainORDER . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    
    mail($to,$subject,$message,$headers);
 
    echo "Thank you for ordering, " . $first_name . ", you'll recieve your meal in less than an hour!";
   
    
?>