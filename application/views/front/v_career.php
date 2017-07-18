<?php $this->load->view('front/v_header')?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/backoffice/dist/css/sb-admin-2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/backoffice/bower_components/dist/css/bootstrap.min.css">

    <div class="about">
		<div class="container">
			<div class="text-center">
				<h2>About Us And Job Vacancies</h2>
				<div class="col-md-10 col-md-offset-1">
					<p>GundarJob is a Indonesia based company, which was found in 1996 by a group of IT professionals in business solutions of Computer Equipment, Network Infrastructure, Network Security, Web Site Design and Software Development in Hong Kong and China. We have sales and technical support offices in Indonesia and Singapura, China. Our sales and technical support team are devoted to provide the highest quality professionals in IT industry with our own RD team in Hong Kong.

					With the openness of the global information technology market expanding on a daily basis, One Solution Limited being an IT professional guarantees that our Network and Security Solutions are suitable for our customers’ business needs. We will suggest the most suitable solutions according to specified budget and requirements. </p>
				</div>
		
				
				
			</div>	
		</div>			
	</div>
	<hr>
	
	<section id="about-us">
        <div class="container">	
			<div class="text-center wow fadeInDown">
				<h2>Skills</h2>
				<p>Our Team Skill</p>
			</div>
			<div class="skill-wrap clearfix">											
				<div class="row">		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<p><em>85%</em></p>
								<p>Joomla</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<p><em>95%</em></p>
								<p>HTML</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<p><em>80%</em></p>
								<p>CSS</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Wordpress</p>                                     
							</div>
						</div>
					</div>					
				</div>	
            </div>
			
			<!-- our-team -->
			<div class="">
				<div class="text-center wow fadeInDown">
					<h2>Job Vacancies</h2>
					<p>We open for all of you these Job Vacancies</p>
				</div>
                <?php foreach ($vacancy as $v){?>
				<div class="row clearfix">
					<div class="col-md-10 col-sm-12">
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
<!--									<a href="#"><img class="media-object" src="img/man1.jpg" alt=""></a>-->
								</div>
								<div class="media-body">
									<h4><b><?php echo $v->job_name ?></b></h4>
									<h5>Salary : Rp  <?php echo $v->job_salary ?></h5>
                                    <h5>From : <?php echo $v->vacancy_from ?>  Untill : <?php echo $v->vacancy_to ?></h5>
<!--									<ul class="tag clearfix">-->
<!--										<li class="btn"><a href="#">Web</a></li>-->
<!--										<li class="btn"><a href="#">Ui</a></li>-->
<!--										<li class="btn"><a href="#">Ux</a></li>-->
<!--										<li class="btn"><a href="#">Photoshop</a></li>-->
<!--									</ul>-->
									
<!--									<ul class="social_icons">-->
<!--										<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--										<li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
<!--										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--									</ul>-->
								</div>
							</div><!--/.media -->

							<?php echo $v->vacancy_description ?>
                            <a href="<?php echo site_url();?>career/apply/<?php echo $v->vacancy_id?>" class="btn btn-primary">Apply</a>
                        </div>

					</div><!--/.col-lg-4 -->


				</div> <!--/.row -->
                    <div class="row"><p></p></div><div class="row"><p></p></div>
                    <?php } ?>
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	
	<?php $this->load->view('front/v_footer')?>