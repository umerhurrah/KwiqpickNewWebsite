<?php
include ("database.php");
function clean($string){
    return htmlentities($string);
}
function redirect($location){
    header("Location: {$location}"); //for redirecting pages
}
function set_message_error($error_message){

	if (!empty($error_message)) {
		$_SESSION['error_message'] = "
    <div class='alert alert-danger alert-dismissible text-center' data-auto-dismiss id='alerts' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Warning!</strong>
        {$error_message}
    </div>
    ";
	}
	else{
		$error_message = "";
	}
}
function set_message_success($success_message){

    if (!empty($success_message)) {
        $_SESSION['success_message'] = "
    <div class='alert alert-success alert-dismissible text-center' data-auto-dismiss id='alerts' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Success!</strong>
        {$success_message}
    </div>
    ";
    }
    else{
        $success_message = "";
    }
}

function display_message(){

	if (isset($_SESSION['success_message'])) {
		echo $_SESSION['success_message'];
		unset($_SESSION['success_message']);
	}
    if (isset($_SESSION['error_message'])) {
        echo $_SESSION['error_message'];
        unset($_SESSION['error_message']);
    }
}
function validation_errors($error_message){

    //for displaying alerts
    $alert_error_message = "
    <div class='alert alert-danger alert-dismissible text-center' data-auto-dismiss id='alerts' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Warning!</strong>
        {$error_message}
    </div>
    ";
    return $alert_error_message;
}
function validation_success($success_message){

    //for displaying alerts
       $alert_success_message = "
    <div class='alert alert-success alert-dismissible text-center' data-auto-dismiss id='alerts' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Success!</strong>
        {$success_message}
    </div>
    ";
    return $alert_success_message;
}

		if(isset($_POST['kp_contact'])){
			$candName       = clean($_POST['kp_candid_name']);
			$resName        = clean($_POST['kp_restaurant_name']);
			$cityName       = clean($_POST['kp_city_name']);
			$email          = clean($_POST['kp_email']);
			$phoneNumber    = clean($_POST['kp_phone_num']);
			$message        = clean($_POST['kp_message']);

			$kp_insert_contact = "INSERT INTO contact_us (name, restaurant_name, city, email, mobile, message)
	                VALUES ('$candName', '$resName', '$cityName','$email', '$phoneNumber', '$message')";
			$kp_run_sql = query($kp_insert_contact);
			if ($kp_run_sql) {
				set_message_success("Thanks for contacting us we will get back to you soon");
			
			}
			else{
				set_message_error("Sorry we are unable to recieve your request");	
			}
		}
?>