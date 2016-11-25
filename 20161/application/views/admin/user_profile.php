<div class="right_col" role="main">
<?php if($this->session->flashdata('success')){ ?>
				  <div class="text-success">      
					<?php echo $this->session->flashdata('success'); ?>
				  </div>
			  <?php } ?>
	<div class="page-title">
        <div class="title_left">
            <h3><?php echo lang('User Profile - Admin'); ?></h3>
        </div>
    </div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="display: block;">
                    <br>
					<?php echo form_open('admin/user_profile',array('class' => 'form-horizontal form-label-left')); ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name"><?php echo lang('First Name'); ?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="first_name" id="first_name" value="<?php echo !empty($users) ? $users[0]['first_name'] : '' ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name"><?php echo lang('Last Name'); ?>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="last_name" id="last_name" value="<?php echo !empty($users) ? $users[0]['last_name'] : '' ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username"><?php echo lang('Username'); ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('username')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="username" id="username" value="<?php echo !empty($users) ? $users[0]['username'] : '' ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('username'); ?>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?php echo lang('Email'); ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('email')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="email" id="email" value="<?php echo !empty($users) ? $users[0]['email'] : '' ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('email'); ?>
                        </div>
                      </div>
					  <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password" id="password" value="<?php //echo !empty($users) ? $users[0]['password'] : '' ?>" class="form-control col-md-7 col-xs-12">
						  <p class="text-danger"><?php //echo form_error('password'); ?></p>
                        </div>
                      </div>-->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <?php echo form_submit('submit', lang('Submit'), 'class="btn btn-success"'); ?>
						  <a href="<?php echo base_url().'admin/dashboard'?>" class="btn btn-primary"><?php echo lang('Cancel'); ?></a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>