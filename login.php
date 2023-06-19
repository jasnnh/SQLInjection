<?php
include("Common.php");

$name = $_POST['user'];
$pass = $_POST['pass'];

$link = dbConnect();

$name = stripslashes($name);
$pass = stripslashes($pass);
//$name = mysqli_real_escape_string($link, $name);
//$pass = mysqli_real_escape_string($link, $pass);

if (empty($name)) {
    die("You don't have permission for this");
}

$check = mysqli_query($link, "SELECT * FROM accounts WHERE `Username` = '$name' AND `Password` = '$pass'") or die(mysqli_error($link));
$numrows = mysqli_num_rows($check);

if ($numrows == 0) {
    die("001"); //user not exist
} else {
    while ($row = mysqli_fetch_assoc($check)) {
                echo "success|";
                echo $row['Name'] . "|";
				echo $row['Money'] . "|";
				echo $row['Bank'] . "|";
				echo $row['Account'] . "|";
				echo $row['Routing'] . "|";
    }
}
mysqli_close($link);
?>