<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_telcel'
) or die(mysqli_erro($mysqli));

?>
