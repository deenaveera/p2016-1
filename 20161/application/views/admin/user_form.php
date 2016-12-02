<div class="right_col" role="main">
	<div class="page-title">
        <div class="title_left">
			<?php
			  if(isset($users['id']) && !empty($users['id'])){ ?>
              <h3><?php echo 'Edit User'; ?></h3>
			<?php } else { ?>
			  <h3><?php echo 'Add User'; ?></h3>
			<?php } ?>
        </div>
    </div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="display: block;">
					<?php
						if(isset($users['id']) && !empty($users['id'])){
							$url = base_url().'admin/user/update/'.$users['id'];
						}else{
							$url = base_url().'admin/user/insert/';
						}
					?>
					<form action="<?php echo $url; ?>" method="post" class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name"><?php echo lang('First Name'); ?>
						<span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('first_name');
                             if (isset($users['first_name'])) {
                                    $value = $users['first_name'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('first_name')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="first_name" id="first_name" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('first_name'); ?>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name"><?php echo lang('Last Name'); ?>
						<span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('last_name');
                             if (isset($users['last_name'])) {
                                    $value = $users['last_name'];
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('last_name')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="last_name" id="last_name" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('last_name'); ?>
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