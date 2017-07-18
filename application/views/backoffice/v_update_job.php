<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Job</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Job
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php foreach ($job as $j)?>
                                    <form role="form" action="<?php echo site_url();?>backoffice/updatejob/<?php echo $j->job_id ?>" method="post">
                                        <div class="form-group">
                                            <label>Job Name</label>
                                            <input class="form-control" name="name" type="text" value="<?php echo $j->job_name ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Job Description</label>
                                            <textarea class="form-control" rows="3" required name="description"><?php echo $j->job_description ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="number" class="form-control" required name="salary" value="<?php echo $j->job_salary ?>" >
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