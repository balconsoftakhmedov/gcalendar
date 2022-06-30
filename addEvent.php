<?php
// Include database configuration file
require_once 'dbConfig.php';

$postData = $statusMsg = $valErr = '';
$status = 'danger';

// If the form is submitted
if(isset($_POST['submit'])){

    // Get event info
    $_SESSION['postData'] = $_POST;
    $title = !empty($_POST['title'])?trim($_POST['title']):'';
    $description = !empty($_POST['description'])?trim($_POST['description']):'';
    $location = !empty($_POST['location'])?trim($_POST['location']):'';
    $date = !empty($_POST['date'])?trim($_POST['date']):'';
    $time_from = !empty($_POST['time_from'])?trim($_POST['time_from']):'';
    $time_to = !empty($_POST['time_to'])?trim($_POST['time_to']):'';

	 $_SESSION['title'] =  $title;
	 $_SESSION['description'] =  $description;
	 $_SESSION['location'] =   $location ;
	 $_SESSION['date'] =  $date ;
	 $_SESSION['time_from'] =    "{$time_from}:00";
	 $_SESSION['time_to'] =   "{$time_to}:00";


            header("Location: $googleOauthURL");
            exit();

}

$_SESSION['status_response'] = array('status' => $status, 'status_msg' => $statusMsg);

header("Location: index.php");
exit();
?>