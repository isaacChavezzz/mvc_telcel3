<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="number" name="id_paqYrec" class="form-control" placeholder="id_paqYrec" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="id_chip" class="form-control" placeholder="id_chip">
          </div>
          <div class="form-group">
            <input type="number" name="id_accesorios" class="form-control" placeholder="id_accesorios">
          </div>
          <div class="form-group">
            <input type="number" name="id_tel" class="form-control" placeholder="id_tel">
          </div>
          <div class="form-group">
            <input type="number" name="ofer_paqYrec" class="form-control" placeholder="ofer_paqYrec">
          </div>
          <div class="form-group">
            <input type="number" name="ofer_chip" class="form-control" placeholder="ofer_chip">
          </div>
          <div class="form-group">
            <input type="number" name="ofer_accesorios" class="form-control" placeholder="ofer_accesorios">
          </div>
          <div class="form-group">
            <input type="number" name="ofer_tel" class="form-control" placeholder="ofer_tel">
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id_paqYrec</th>
            <th>id_chip</th>
            <th>id_accesorios</th>
            <th>id_tel</th>
            <th>ofer_paqYrec</th>
            <th>ofer_chip</th>
            <th>ofer_accesorios</th>
            <th>ofer_tel</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_oferta";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id_paqYrec']; ?></td>
            <td><?php echo $row['id_chip']; ?></td>
            <td><?php echo $row['id_accesorios']; ?></td>
            <td><?php echo $row['id_tel']; ?></td>
            <td><?php echo $row['ofer_paqYrec']; ?></td>
            <td><?php echo $row['ofer_chip']; ?></td>
            <td><?php echo $row['ofer_accesorios']; ?></td>
            <td><?php echo $row['ofer_tel']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
