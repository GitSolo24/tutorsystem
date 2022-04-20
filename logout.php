
<?php

//logout.php

session_start();

session_destroy();

header('location:livechat_login.php');

?>
