<div  class="d-flex justify-content-center">
	<form class="card mb-3" action="<?php echo base_url('Login') ?>" method="post" style="width: 16rem">
		<div class="card-body">
			<div class="text-center">
				<i class="far fa-user-unlock fa-2x mb-2"></i>
				<h3 class="card-title mb-3">Login</h3>
			</div>
			<?php echo csrf_field() ?>
			<div class="mb-3">
				<label for="userName" class="form-label">Enter User Name</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="userName" name="userName" placeholder="numan.naseer.nomi" oninput="this.value = this.value.toLowerCase()" required />
			</div>
			<div class="mb-3">
				<label for="userPinCode" class="form-label">Enter Pin Code</label>
				<input type="password" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="userPinCode" name="userPinCode" inputmode="numeric" pattern="[0-9]{4}" minlength="4" maxlength="4" placeholder="6664" required />
			</div>
			<div class="d-grid">
				<button type="submit" class="btn btn-outline-primary btn-sm mb-3">Login</button>
			</div>
			<p class="text-muted m-0">Forgot password? <a href="">Reset</a></p>
		</div>
	</form>
</div>
