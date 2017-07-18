<?php $this->load->view('front/v_header');?>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <section class="contact-page">
        <div class="container">
            <div class="text-center">
                <h2>Your Account</h2>
                <p>Register or Login to Your Account</p>
                <?php echo $this->session->flashdata('pesan')?>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo site_url();?>home/login">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button>
                        </div>
                    </div>
                </form>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo site_url();?>home/register">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Username *</label>
                            <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone *</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address *</label>
                            <textarea class="form-control" name="address" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Gender *</label>
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeSJiMTAAAAAOQ6NCagvkwOsNZyD1f8LLBJF4jK"></div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Register">
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<?php $this->load->view('front/v_footer');?>