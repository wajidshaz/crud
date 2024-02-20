<?php
session_start();
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
   <div class="conatiner mt-5">
    <?php include('message.php');?>
    <div class="row">
        <div class="col-mb-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add
                    <a href="index.php" class="btn btn-danger float-end"> Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                        <label >Student Name</label>
                        <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label >Student Email</label>
                        <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label >Student phone</label>
                        <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label >Student course</label>
                        <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

