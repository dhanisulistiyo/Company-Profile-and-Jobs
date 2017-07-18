<?php $this->load->view('backoffice/v_header')?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gallery</h1>
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
                                            <th>No</th>
                                            <th>Image Name</th>
                                            <th>Image Description</th>
                                            <th>Uploader</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;foreach ($image as $i){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $i->gallery_title ?></td>
                                            <td><?php echo $i->gallery_description ?></td>
                                            <td><?php echo $i->admin_username ?></td>
                                            <td><a href="<?php echo site_url();?>gallery/deleted/<?php echo $i->gallery_id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
