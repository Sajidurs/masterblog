<?php include('./layout/head.php');?>


<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php
    include "layout/sidebar.php"
        ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php
            include "layout/topbar.php"
                ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Category</h1>
                    <a href="categoryCreate.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus"></i> 
                       Add New Category
                    </a>
                </div>

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Slug</th>                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Computer</td>
                                            <td>computer</td>
                                            <td>
                                                <a href="" class="btn btn-success">
                                                <i class="far fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                           
                                        </tr>                                
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- footer page link -->

            <?php include('./layout/footer.php'); ?>
            