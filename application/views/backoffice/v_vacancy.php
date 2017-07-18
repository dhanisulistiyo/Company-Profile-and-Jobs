<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Job Vacancies</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vacancy Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Job</th>
                                            <th>Vacancy Description</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Admin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($vacancy as $v){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $v->job_name ?></td>
                                            <td><?php echo $v->vacancy_description ?></td>
                                            <td><?php echo $v->vacancy_from?></td>
                                            <td><?php echo $v->vacancy_to ?></td>
                                            <td><?php echo $v->admin_username ?></td>
                                            <td><a href="<?php echo site_url();?>career/deleted/<?php echo $v->vacancy_id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
