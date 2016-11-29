
<div class="right_col" role="main">
	 <?php if($this->session->flashdata('success')){ ?>
				  <div class="text-success" id="info">      
					<?php echo $this->session->flashdata('success'); ?>
				  </div>
			  <?php } ?>
	
	<div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-users"></i> <?php echo lang('Users Listing'); ?></h3>
        </div>
		 <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
				<a href="<?php echo base_url().'admin/user/create'; ?>">
				  <i class="fa fa-user">&nbsp;&nbsp;<?php echo lang('Add User'); ?></i> 
				</a>
                </div>
              </div>
    </div>
	
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="display: block;">
                    <br>
					<table id="users-list" class="table table-striped table-bordered">
						<thead>
						  <tr>
							  <th><?php echo lang('First Name'); ?></th>
							  <th><?php echo lang('Last Name'); ?></th>
							  <th><?php echo lang('Username'); ?></th>
							  <th><?php echo lang('Email'); ?></th>
							  <th><?php echo lang('Action'); ?></th>
						  </tr>
						</thead>
						 <tbody>
						<?php foreach ($users as $users_data): ?>
								<tr>
									<td><?php echo $users_data['first_name']; ?></td>
									<td><?php echo $users_data['last_name']; ?></td>
									<td><?php echo $users_data['username']; ?></td>
									<td><?php echo $users_data['email']; ?></td>
									<td>
										<a href="<?php echo base_url('admin/user/edit/'.$users_data['id']); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"> <?php echo lang('Edit'); ?></span></a>&nbsp;&nbsp;
										<a href="<?php echo base_url('admin/user/delete/'.$users_data['id']); ?>" onClick="return confirm('Are you sure you want to delete this user?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"> <?php echo lang('Delete'); ?></span></a>
									</td>
								</tr>
						
						<?php endforeach; ?>
						</tbody>
				</table>
                  </div>
                </div>
              </div>
            </div>
</div>
<!-- Datatables -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
		  $("#info").fadeOut(3000);
		  $('#users-list').dataTable({
			  "language": {
					"decimal":        "",
					"emptyTable":     "<?php echo lang('No data available in table'); ?>",
					"info":           "<?php echo lang('Showing'); ?> _START_ to _END_ <?php echo lang('of'); ?>  _TOTAL_ <?php echo lang('entries'); ?>",
					"infoEmpty":      "<?php echo lang('Showing'); ?> 0 to 0 of 0 <?php echo lang('entries'); ?>",
					"infoFiltered":   "(<?php echo lang('filtered from'); ?> _MAX_ <?php echo lang('total entries'); ?>)",
					"infoPostFix":    "",
					"thousands":      ",",
					"lengthMenu":     "<?php echo lang('Show'); ?> _MENU_ <?php echo lang('entries'); ?>",
					"loadingRecords": "<?php echo lang('Loading...'); ?>", 
					"processing":     "<?php echo lang('Processing...'); ?>",
					"search":         "<?php echo lang('Search:'); ?>",
					"zeroRecords":    "<?php echo lang('No matching records found'); ?>",
					"paginate": {
						"first":      "<?php echo lang('First'); ?>",
						"last":       "<?php echo lang('Last'); ?>",
						"next":       "<?php echo lang('Next'); ?>",
						"previous":   "<?php echo lang('Previous'); ?>"
					},
					"aria": {
						"sortAscending":  ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					}
			  }
		  });
    });
    </script>
    <!-- /Datatables -->
