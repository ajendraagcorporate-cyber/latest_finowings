<?php
session_start();
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
    $_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
    die;
} else {
    include("config.php");
    include('head.php');
?>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <?php include('sidebar.php'); ?>

            <style>
                .td {
                    border: 2px solid white;
                    background: #3f6791;
                    font-family: poppins;
                    font-weight: 600;
                    text-align: left;
                    text-transform: capitalize;
                    font-size: 15px;
                    padding: 7px;
                    color: white;
                }
                tr td {
                    padding: 10px;
                    border: 1px solid #dee2e6;
                }
            </style>

            <div class="content-wrapper" style="background: #FFFFFF;">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Manage Front Page Banners</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="col-md-12 text-center mb-4">
                            <a href="add-homebanner.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Banner Card</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered bg-white" style="width: 100%; color: black;">
                                <thead>
                                    <tr>
                                        <th class="td">Sr No.</th>
                                        <th class="td">Heading</th>
                                        <th class="td">Badge</th>
                                        <th class="td">Image</th>
                                        <th class="td">Price</th>
                                        <th class="td">Sale Price</th>
                                        <th class="td">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM home_banners ORDER BY id DESC";
                                    if ($result = mysqli_query($link, $query)) {
                                        $cnt = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            $id = $row["id"];
                                            $heading = $row["heading"];
                                            $badge = $row["badge_text"];
                                            $image = $row["image"];
                                            $price = $row["price"];
                                            $sale_price = $row["sale_price"];
                                    ?>
                                            <tr>
                                                <td><?php echo $cnt++; ?></td>
                                                <td><?php echo $heading; ?></td>
                                                <td><?php echo $badge; ?></td>
                                                <td>
                                                    <img src="media/<?php echo $image; ?>" width="150" height="100" style="object-fit: contain; border: 1px solid #ddd;">
                                                </td>
                                                <td><?php echo $price; ?></td>
                                                <td><?php echo $sale_price; ?></td>
                                                <td>
                                                    <a href="edit-homebanner.php?id=<?php echo $id; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="delete-homebanner.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                        $result->free();
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
    </body>
    </html>
<?php
}
?>
