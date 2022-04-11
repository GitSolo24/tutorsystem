<?php

//update_last_activity.php

include('livechat_connect.php');

session_start();

//this updates the user last activity based on the log in details
$query = "
UPDATE login_details 
SET last_activity = now() 
WHERE login_details_id = '" . $_SESSION["login_details_id"] . "'
";

$statement = $connect->prepare($query);

$statement->execute();
