<div class="right_col" role="main">
	<div class="page-title">
        <div class="title_left">
            <h3>Edit Details - User</h3>
        </div>
    </div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="display: block;">
                    <br>
					<?php echo form_open('admin/user/edit?id='.$users['id'],array('class' => 'form-horizontal form-label-left')); ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="first_name" id="first_name" value="<?php echo !empty($users) ? $users['first_name'] : '' ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="last_name" id="last_name" value="<?php echo !empty($users) ? $users['last_name'] : '' ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="username" id="username" value="<?php echo !empty($users) ? $users['username'] : '' ?>" class="form-control col-md-7 col-xs-12">
						  <p class="text-danger"><?php echo form_error('username'); ?></p>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="email" id="email" value="<?php echo !empty($users) ? $users['email'] : '' ?>" class="form-control col-md-7 col-xs-12">
						  <p class="text-danger"><?php echo form_error('email'); ?></p>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <?php echo form_submit('submit', 'Submit', 'class="btn btn-success"'); ?>
						  <a href="<?php echo base_url().'admin/users'?>" class="btn btn-primary">Cancel</a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>