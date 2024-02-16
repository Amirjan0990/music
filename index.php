
<?php
session_start();
if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == "1")
{
echo "WELCOME";
}
?>
<a href="logout.php">exit</a>