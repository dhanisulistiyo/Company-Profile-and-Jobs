<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Application</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Application Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Job</th>
                                            <th>CV</th>
                                            <th>Sent</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($application as $a){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $a->user_email?></td>
                                            <td><?php echo $a->user_full_name?></td>
                                            <td><?php echo $a->job_name ?></td>
                                            <td><a href="<?php echo site_url();?>assets/uploadpdf/<?php echo $a->application_cv?>">CV</a></td>
                                            <td><?php echo $a->created_at ?></td>
                                            <td><a href="<?php echo site_url();?>backoffice/deleteapplicant/<?php echo $a->application_id?>/<?php echo $a->application_cv?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
