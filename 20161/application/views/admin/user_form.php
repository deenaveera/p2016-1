<div class="right_col" role="main">
	<div class="page-title">
        <div class="title_left">
            <h3><?php echo 'Add/Edit User'; ?></h3>
        </div>
    </div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="display: block;">
                    <br>
					<form action="<?php echo base_url().'admin/user/user_form/'; ?><?php if(isset($users['id'])){ echo $users['id']; } ?>" method="post" class="form-horizontal form-label-left">
					<?php //echo form_open('admin/user/add_edit_user/',array('class' => 'form-horizontal form-label-left')); ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name"><?php echo lang('First Name'); ?>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('first_name');
                             if (isset($users['first_name'])) {
                                    $value = $users['first_name'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="first_name" id="first_name" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name"><?php echo lang('Last Name'); ?>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('last_name');
                             if (isset($users['last_name'])) {
                                    $value = $users['last_name'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="last_name" id="last_name" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username"><?php echo lang('Username'); ?> <span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('username');
                             if (isset($users['username'])) {
                                    $value = $users['username'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('username')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="username" id="username" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('username'); ?>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?php echo lang('Email'); ?> <span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('email');
                             if (isset($users['email'])) {
                                    $value = $users['email'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('email')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="email" id="email" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('email'); ?>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?php echo lang('Password'); ?> <span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('password');
                             if (isset($users['password'])) {
                                    $value = $users['password'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('password')!= "") echo 'text-danger'; ?>">
                          <input type="password" name="password" id="password" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('password'); ?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <?php echo form_submit('submit', lang('Submit'), 'class="btn btn-success"'); ?>
						  <a href="<?php echo base_url().'admin/users'?>" class="btn btn-primary"><?php echo lang('Cancel');?></a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>