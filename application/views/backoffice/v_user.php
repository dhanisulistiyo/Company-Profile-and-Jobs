<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Full Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $pengguna){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $pengguna->user_email?></td>
                                            <td><?php echo $pengguna->username?></td>
                                            <td><?php echo $pengguna->user_full_name?></td>
                                            <td><?php echo $pengguna->user_phone ?></td>
                                            <td><?php echo $pengguna->user_address ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php $this->load->view('backoffice/v_footer');?>
