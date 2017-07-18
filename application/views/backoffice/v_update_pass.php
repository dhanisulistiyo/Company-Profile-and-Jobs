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
                            Change Pass
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo site_url();?>backoffice/updatepass" method="post">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input class="form-control"  name="old_pass" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input class="form-control"  name="new_pass" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password Confirmation</label>
                                            <input class="form-control" name="new_pass2"  type="password" required>
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