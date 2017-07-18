<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Job / Office</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Office Data in GundarJob
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Office</th>
                                            <th>Office Description</th>
                                            <th>Salary</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;foreach ($job as $j){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $j->job_name?></td>
                                            <td><?php echo $j->job_description ?></td>
                                            <td><?php echo $j->job_salary ?></td>
                                            <td><a href="<?php echo site_url();?>backoffice/editjob/<?php echo $j->job_id ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>   <a class="btn btn-danger" href="<?php echo site_url();?>backoffice/deletejob/<?php echo $j->job_id;?>"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    <?php $no++;} ?>
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
