<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signup</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'assets/vendors/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() . 'assets/vendors/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() . 'assets/vendors/nprogress/nprogress.css' ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() . 'assets/vendors/animate.css/animate.min.css' ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() . 'assets/build/css/custom.min.css' ?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div id="register" class="">
		
			  <?php if($this->session->flashdata('success')){ ?>
				  <div class="text-center alert-success">      
					<?php echo $this->session->flashdata('success'); ?>
				  </div>
			  <?php } ?>
			  
          <section class="login_content">
           <?php echo form_open('admin/register'); ?>
		   
              <h1>Create Account</h1>
              <div class="<?php if(form_error('username')!= "") echo 'text-danger'; ?>">
                <input type="text" name="username" class="form-control" placeholder="Username*" />
				<?php echo form_error('username'); ?>
              </div>
              <div class="<?php if(form_error('email')!= "") echo 'text-danger'; ?>">
                <input type="email" name="email" class="form-control" placeholder="Email*" />
				<?php echo form_error('email'); ?>
              </div>
              <div class="<?php if(form_error('password')!= "") echo 'text-danger'; ?>">
                <input type="password" name="password" class="form-control" placeholder="Password*" />
				<?php echo form_error('password'); ?>
              </div>
              <div>
				<?php echo form_submit('submit', 'Submit', 'class="btn btn-default submit"'); ?>
              </div>
              <div class="clearfix"></div>
			  
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="<?php echo base_url().'admin/login'?>" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
