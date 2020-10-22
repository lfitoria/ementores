<html>
<?php
/* This will give an error. Note the output
 * above, which is before the header() call */
header('Location: http://rd.ementores.org/epana/db/user/get_users.php');
exit;
?>