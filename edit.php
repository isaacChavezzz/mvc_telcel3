<?php
include("db.php");
$id_paqYrec = '';
$id_chip= '';
$id_accesorios = '';
$id_tel= '';
$ofer_paqYrec = '';
$ofer_chip= '';
$ofer_accesorios = '';
$ofer_tel= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_oferta WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_paqYrec = $row['id_paqYrec'];
    $id_chip = $row['id_chip'];
    $id_accesorios = $row['id_accesorios'];
    $id_tel = $row['id_tel'];
    $ofer_paqYrec = $row['ofer_paqYrec'];
    $ofer_chip = $row['ofer_chip'];
    $ofer_accesorios = $row['ofer_accesorios'];
    $ofer_tel = $row['ofer_tel'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $id_paqYrec= $_POST['id_paqYrec'];
  $id_chip = $_POST['id_chip'];
  $id_accesorios= $_POST['id_accesorios'];
  $id_tel = $_POST['id_tel'];
  $ofer_paqYrec= $_POST['ofer_paqYrec'];
  $ofer_chip = $_POST['ofer_chip'];
  $ofer_accesorios= $_POST['ofer_accesorios'];
  $ofer_tel = $_POST['ofer_tel'];

  $query = "UPDATE tbl_oferta set id_paqYrec = '$id_paqYrec', id_chip = '$id_chip', id_accesorios = '$id_accesorios', id_tel = '$id_tel', ofer_paqYrec = '$ofer_paqYrec', ofer_chip = '$ofer_chip', ofer_accesorios = '$ofer_accesorios', ofer_tel = '$ofer_tel' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'oferta actualizada exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="id_paqYrec" type="number" class="form-control" value="<?php echo $id_paqYrec; ?>" placeholder="actualizar id_paqYrec">
        </div>
        <div class="form-group">
          <input name="id_chip" type="number" class="form-control" value="<?php echo $id_chip; ?>" placeholder="actualizar id_chip">
        </div>
        <div class="form-group">
          <input name="id_accesorios" type="number" class="form-control" value="<?php echo $id_accesorios; ?>" placeholder="actualizar id_accesorios">
        </div>
        <div class="form-group">
          <input name="id_tel" type="number" class="form-control" value="<?php echo $id_tel; ?>" placeholder="actualizar id_tel">
        </div>
        <div class="form-group">
          <input name="ofer_paqYrec" type="number" class="form-control" value="<?php echo $ofer_paqYrec; ?>" placeholder="actualizar ofer_paqYrec">
        </div>
        <div class="form-group">
          <input name="ofer_chip" type="number" class="form-control" value="<?php echo $ofer_chip; ?>" placeholder="actualizar ofer_chip">
        </div>
        <div class="form-group">
          <input name="ofer_accesorios" type="number" class="form-control" value="<?php echo $ofer_accesorios; ?>" placeholder="actualizar ofer_accesorios">
        </div>
        <div class="form-group">
          <input name="ofer_tel" type="number" class="form-control" value="<?php echo $ofer_tel; ?>" placeholder="actualizar ofer_tel">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
