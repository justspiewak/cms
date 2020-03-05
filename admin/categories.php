<?php 
    include "includes/header.php";
?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include "includes/navigation.php";
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin Paradise
                            <small>Kocia</small>
                        </h1>
                        <!-- Add category form -->
                        <div class="col-xs-6">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for id="cat_title">Category Title</label>
                                <input class="form-control" type="text" name="cat_title" id="cat_title">
                                <br>
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                        </div>
                        <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kitten</td>
                                    <td>Cat</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php
    include "includes/footer.php";
?>