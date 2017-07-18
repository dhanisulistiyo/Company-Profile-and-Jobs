<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Message</h1>
                    <?php echo $this->session->flashdata('pesan')?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Message Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>From</th>
                                            <th>Email</th>
                                            <th>Title</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($message as $pesan){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $pesan->message_name ?></td>
                                            <td><?php echo $pesan->message_email ?></td>
                                            <td><?php echo $pesan->message_subject?></td>
                                            <td><?php echo $pesan->message_phone ?></td>
                                            <td><?php echo $pesan->message_description ?></td>
                                            <td><a href="<?php echo site_url();?>backoffice/deletemessage/<?php echo $pesan->message_id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
