<?php $this->load->view('front/v_header');?>

    <section class="contact-page">
        <div class="container">
            <div class="text-center">
                <h2>Your Applicant</h2>
                <p>Fill Your Applicant</p>
                <?php echo $this->session->flashdata('pesan')?>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form"  method="post" action="<?php echo site_url();?>career/insertapply/<?php echo $this->uri->segment(3);?>" enctype="multipart/form-data">
                    <div class="col-sm-12 col-sm-offset-1">
                        <div class="form-group">
                            <label>Type Youself</label>
                            <textarea class="form-control" rows="3" name="desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Your CV</label>
                            <input type="file" name="filepdf" accept="application/pdf" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Send Application</button>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<?php $this->load->view('front/v_footer');?>