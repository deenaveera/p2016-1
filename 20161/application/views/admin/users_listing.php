
<div class="right_col" role="main">
	 <?php if($this->session->flashdata('success')){ ?>
				  <div class="alert-success">      
					<?php echo $this->session->flashdata('success'); ?>
				  </div>
			  <?php } ?>
	
	<div class="page-title">
        <div class="title_left">
            <h3>Users Listing</h3>
        </div>
		 <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
				<a href="<?php echo base_url().'admin/user/add'; ?>">
				  <i class="fa fa-user">&nbsp;&nbsp;Add User</i> 
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
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Username</th>
							  <th>Email</th>
							  <th>Action</th>
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
										<a href="<?php echo base_url('admin/user/edit?id='.$users_data['id']); ?>"><i class="fa fa-edit">&nbsp;&nbsp;Edit</i></a>&nbsp;&nbsp;
										<a href="<?php echo base_url('admin/user/delete?id='.$users_data['id']); ?>" onClick="return confirm('Are you sure you want to delete this user?')"><i class="fa fa-close">&nbsp;&nbsp;Delete</i></a>
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