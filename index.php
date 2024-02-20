<?php
session_start();
  require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
      <?php include('message.php')
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card-header">
            <h4>Student</h4>
            <a href="student-create.php" class="btn btn-primary float-end">Add Student</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM students";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run)> 0)
              {
                foreach($query_run as $student)
                {
                  ?>
                  <tr>
                  <td><?= $student['id'];?></td>
                  <td><?= $student['name'];?></td>
                  <td><?= $student['email'];?></td>
                  <td><?= $student['phone'];?></td>
                  <td><?= $student['course'];?></td>
                  <td>
                  <a href="student-view.php?id=<?= $student ['id']?>" class="btn btn-info btn-sm" >View</a>
                    <a href="student-edit.php?id=<?= $student ['id']?>" class="btn btn-success btn-sm">Edit</a>
                    <form action="code.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                </tr>
                <?php
                }

              }
              else
              {
                echo "<h5> No Record Found </h5>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>