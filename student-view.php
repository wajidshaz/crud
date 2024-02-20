<?php
require 'dbcon.php'
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
    <div class="row">
        <div class="col-mb-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student View Details
                    <a href="index.php" class="btn btn-danger float-end"> Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id='$student_id'";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $student = mysqli_fetch_array($query_run);
                      ?>
                        <input type="hidden" name="student_id" value="<?= $student['id'];  ?>">
                        <div class="mb-3">
                        <label >Student Name</label>
                        <p class="form-control">
                        <?=$student['name'];?>
                        </p>
                        </div>
                        <div class="mb-3">
                        <label >Student Email</label>
                        <p class="form-control">
                        <?=$student['email'];?>
                        </p>
                        </div>
                        <div class="mb-3">
                        <label >Student phone</label>
                        <p class="form-control">
                        <?=$student['phone'];?>
                        </p>
                        </div>
                        <div class="mb-3">
                        <label >Student course</label>
                        <p class="form-control">
                        <?=$student['course'];?>
                        </p>
                        </div>
                        </div>
                    </form>
                    <?php
                }
                else
                {
                    echo "<h4>No Such Id Found </h4>";
                }
            }?>
                </div>
            </div>
        </div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

