<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row position-relative ">
        <li class="nav-item mobile-menu d-md-none mr-auto">
          <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
            <i class="ft-menu font-large-1"></i>
          </a>
        </li>
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="<?= base_url();?>admin">
            <h2 class="brand-text ">SPK USAHA</h2>
          </a>
        </li>
        <li class="nav-item d-none d-md-block nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
            <i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i>
          </a>
        </li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="fa fa-ellipsis-v"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block">
            <a class="nav-link nav-link-expand" href="#">
              <i class="ficon ft-maximize"></i>
            </a>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="avatar avatar-online">
                <img src="<?php echo base_url();?>assets/backend/images/portrait/small/user1.png" alt="avatar">
                <i></i>
              </span>
              <span class="user-name text-dark"><?= $_SESSION['user_username'];?></span>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item " data-toggle="modal" data-target="#modalChangePass">
                <i class="ft-settings"></i> Setting
              </a>
              <a class="dropdown-item " href="<?= base_url();?>logout">
                <i class="ft-log-out "></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade text-left" id="modalChangePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Change Password</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('user/change_pass')?>" method="POST">
            <div class="modal-body">
                
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Password Lama: </label>
											<input type="password" name="old_pass" id="name" placeholder="Password Lama" class="form-control"/>
										</div>
									</div>
                </div>
                <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Password Baru: </label>
											<input type="password" name="new_pass" id="password" placeholder="Password Baru" class="form-control" />
										</div>
									</div>
                  </div>
                <div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Konfirmasi Password: </label><br>
											<input type="password" name="confirm_pass" id="password" placeholder="Konfirmasi Password" class="form-control"/>
										</div>
								  </div>
								</div>
              </div>
							<div class="modal-footer">
									<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
									<input type="submit" class="btn btn-outline-primary btn-md" name="change_pass" value="Update">
							</div>
								
								
						</form>
					</div>
				</div>
			</div>
