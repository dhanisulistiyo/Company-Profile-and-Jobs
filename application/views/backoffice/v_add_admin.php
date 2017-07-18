<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Admin
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo site_url();?>backoffice/insertadmin" method="post">
                                        <div class="form-group">
                                            <label>Admin Name</label>
                                            <input class="form-control" name="name" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Admin Email</label>
                                            <input class="form-control" name="email" type="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Admin Username</label>
                                            <input class="form-control" name="username" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Admin Password</label>
                                            <input class="form-control" name="password" type="password" required>
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
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