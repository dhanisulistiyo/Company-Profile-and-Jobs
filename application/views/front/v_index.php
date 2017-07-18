<?php $this->load->view('front/v_header');?>
<div class="slider">
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo base_url();?>assets/front/img/2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>GundarJob</span></h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>This is our company</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
<!--                            <form class="form-inline">-->
<!--                                <div class="form-group">-->
<!--                                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>-->
<!--                                </div>-->
<!--                            </form>-->
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo base_url();?>assets/front/img/2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                            <h2>Good Solution</h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>We make responsive web</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
<!--                            <form class="form-inline">-->
<!--                                <div class="form-group">-->
<!--                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>-->
<!--                                </div>-->
<!--                            </form>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url();?>assets/front/img/2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2>Good Consulting</h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>We Always Give You Good Service</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline">
<!--                                <div class="form-group">-->
<!--                                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>-->
<!--                                </div>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>

            <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->
</div><!--/#slider-->


<hr>

<div class="services">
    <div class="container">
        <div class="text-center">
            <h2>Solution</h2>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i class="fa fa-heart-o"></i>
            <h3>Network Maintenance</h3>
            <p>A company’s information system is at the core of every business. A network security attack, or even worse a breach, can be devastating to a company. In addition to lost business and productivity as a result of an attack, the time and labour involved in re-deploying infected servers, desktops and laptops poses a significant expense. A security breach can harm a company’s reputation and result in non-compliance with client privacy protection laws. One solution Ltd. can provide an excellent solution to solve the above problems. .</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <i class="fa fa-cloud"></i>
            <h3>Web Development</h3>
            <p>We have an excellent team of website development professionals who are experienced enough to develop websites. We provide solutions from front-end design and development to backend programming and maintenance..</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <i class="fa fa-book"></i>
            <h3>One CMS</h3>
            <p>Content Management System (CMS) is a web application designed to make it easy for non-technical users to add, edit and, manage a website.

CMS improves the lifecycle of your website for years to come. The “look and feel” of your site can be changed or relaunched, leaving existing content and page architecture untouched.
No need to worry about copying and pasting content into another site, simply publish your new design and the CMS will pull the content into the new look. </p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-gear"></i>
            <h3>Application Development</h3>
            <p>Custom application development tailored to the client’s specific business requirements. Our software development capabilities include: PHP, JAVA, HTML, CSS, .Net , JSP, SQL and Oracle</p>
        </div>
    </div>
</div>


<?php $this->load->view('front/v_footer');?>