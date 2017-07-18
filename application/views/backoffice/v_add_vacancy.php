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
                            Add Vacancy
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo site_url();?>career/insert" method="post">
                                        <div class="form-group">
                                            <label>Position</label>
                                            <select name="job" class="form-control">
                                                <?php foreach ($joba as $j){?>
                                                <option value="<?php echo $j->job_id?>"><?php echo $j->job_name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1">From</label>
                                            <input type="date" name="from">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1">To</label>
                                            <input type="date" name="to">
                                        </div>
                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <textarea class="col-md-6" name="editorpost" id="editorpost" rows="5" required></textarea>
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

<script type="text/javascript">
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editorpost' );
</script>