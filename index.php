<?php
include('views/common/header/header.php');
?>

<h1>Hello</h1>

<?php

$sql = 'select * from product';
$result = mysqli_query($connection, $sql);
if (!$result) die('error: ' . mysqli_error($connection));
while ($row = mysqli_fetch_array($result)) {
    echo $row['name'] . "<br />";
}
