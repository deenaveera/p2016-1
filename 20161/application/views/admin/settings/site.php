<div class="right_col" role="main">
<?php if($this->session->flashdata('success')){ ?>
				  <div class="text-success">      
					<?php echo $this->session->flashdata('success'); ?>
				  </div>
			  <?php } ?>
	<div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lang('Settings'); ?></h3>
        </div>
    </div>
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="display: block;">
                    <br>
					<form action="<?php echo base_url().'admin/setting/site/'; ?>" method="post" class="form-horizontal form-label-left">
					<span class="section"><i class="fa fa-sitemap" aria-hidden="true"></i> <?php echo lang('Site'); ?></span>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_name"><?php echo 'Site Name'; ?>
						<span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('site_name');
                             if (isset($settings[0]->value)) {
                                    $value = $settings[0]->value;
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('site_name')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="site_name" id="site_name" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('site_name'); ?>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_caption"><?php echo 'Caption'; ?>
						<span class="required">*</span>
                        </label>
						<?php  
                             $value = "";
                             $value = set_value('site_caption');
                             if (isset($settings[1]->value)) {
                                    $value = $settings[1]->value;
                             }
                        ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if(form_error('site_caption')!= "") echo 'text-danger'; ?>">
                          <input type="text" name="site_caption" id="site_caption" value="<?php echo $value; ?>" class="form-control col-md-7 col-xs-12">
						  <?php echo form_error('site_caption'); ?>
                        </div>
                      </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <?php echo form_submit('submit', lang('Submit'), 'class="btn btn-success"'); ?>
						  <a href="<?php echo base_url().'admin/dashboard'?>" class="btn btn-primary"><?php echo lang('Cancel');?></a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>