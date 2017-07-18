<?php $this->load->view('front/v_header');?>
<div class="gallery">
    <div class="text-center">
        <h2>Gallery</h2>
        <p>This Is a Gallery Company </p>
    </div>
    <div class="container">
        <?php foreach ($image as $i){?>
        <div class="col-md-4">
            <figure class="effect-marley">
                <img src="<?php echo base_url();?>assets/uploads/<?php echo $i->gallery_name ?>"  alt="" class="img-responsive"/>
                <figcaption>
                    <h4><?php echo $i->gallery_title?></h4>
                    <p><?php echo $i->gallery_description ?></p>
                </figcaption>
            </figure>
        </div>
        <?php } ?>
    </div>
<!--
    <div class="container">
        <div class="col-md-4">
            <figure class="effect-marley">
                <img src="<?php /*echo base_url();*/?>assets/front/img/11.jpg" alt="" class="img-responsive"/>
                <figcaption>
                    <h4>sweet marley</h4>
                    <p>Marley tried to convince her but she was not interested.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="effect-marley">
                <img src="<?php /*echo base_url();*/?>assets/uploads" alt="" class="img-responsive"/>
                <figcaption>
                    <h4>sweet marley</h4>
                    <p>Marley tried to convince her but she was not interested.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-4">
            <figure class="effect-marley">
                <img src="<?php /*echo base_url();*/?>assets/front/img/13.jpg" alt="" class="img-responsive"/>
                <figcaption>
                    <h4>sweet marley</h4>
                    <p>Marley tried to convince her but she was not interested.</p>
                </figcaption>
            </figure>
        </div>
    </div>-->
</div>
<?php $this->load->view('front/v_footer');?>