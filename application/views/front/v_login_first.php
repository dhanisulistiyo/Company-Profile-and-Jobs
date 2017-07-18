<?php $this->load->view('front/v_header');?>

    <section class="contact-page">
        <div class="container">
            <div class="text-center">
                <h2>Your Applicant</h2>
                <p>Fill Your Applicant</p>
                <a href="<?php echo site_url();?>home/account" class="btn btn-primary">Login First To Apply</a>
            </div>
            <?php for($i=0;$i<5;$i++){?>
            <div class="row contact-wrap">

                <p></p>
            </div><!--/.row-->
    <?php } ?>
        </div><!--/.container-->
    </section><!--/#contact-page-->

<?php $this->load->view('front/v_footer');?>