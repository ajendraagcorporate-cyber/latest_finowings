<?php
     include('security.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM query WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="selectc" value="<?php echo $row['selectc'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="namec" value="<?php echo $row['namec'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="mobile" value="<?php echo $row['mobile'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>
							<div class="form-group">
                                <label>Password</label>
                                <input type="password" name="city" value="<?php echo $row['city'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>