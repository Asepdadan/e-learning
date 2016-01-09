
<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?php echo base_url().'login/aksi_login'; ?>" method="post">
		
			<h1>Login E-learning</h1><br>
			
			<div class="login-fields">
				
				<?php 
				if(!$this->session->flashdata()){

				}else{

				echo "<p class='alert alert-info'>".$this->session->flashdata('info_login')."</p>";
				}
				 ?></p>
				
				<div class="field">
					<label for="npm">NPM</label>
					<input type="text" id="npm" name="npm" value="" placeholder="Npm" class="login username-field" autocomplete="off"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="pass" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button type="submit" class="button btn btn-success btn-large">Login</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>