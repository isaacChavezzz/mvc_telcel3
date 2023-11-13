<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $id_paqYrec = $_POST['id_paqYrec'];
  $id_chip = $_POST['id_chip'];
  $id_accesorios = $_POST['id_accesorios'];
  $id_tel = $_POST['id_tel'];
  $ofer_paqYrec = $_POST['ofer_paqYrec'];
  $ofer_chip = $_POST['ofer_chip'];
  $ofer_accesorios = $_POST['ofer_accesorios'];
  $ofer_tel = $_POST['ofer_tel'];
  $query = "INSERT INTO tbl_oferta(id_paqYrec, id_chip, id_accesorios, id_tel, ofer_paqYrec, ofer_chip, ofer_accesorios, ofer_tel) VALUES ('$id_paqYrec', '$id_chip', '$id_accesorios', '$id_tel', '$ofer_paqYrec', '$ofer_chip', '$ofer_accesorios', '$ofer_tel')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'oferta guardada exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
