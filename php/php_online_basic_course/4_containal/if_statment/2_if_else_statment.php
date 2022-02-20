<?php

$secretNumber = 453;
// if ($_POST['guess'] == $secretNumber) {
//     echo "<p>Congratulations!!</P>";
// } else {
//     echo "<p>Sorry!</p>";
// }
if (isset($_POST['submit'])) {
    if ($_POST['guess'] == $secretNumber) {
        echo "<p>Congratulations!!</P>";
} else {
    echo "<p>Sorry!</p>";
}
}
?>
<form action="" method="POST">
    GUess: <input type="text" name="guess">
    <input type="submit" name="submit" value="Submit">
</form>