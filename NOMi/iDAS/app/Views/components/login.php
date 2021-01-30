<div  class="d-flex justify-content-center">
	<form class="card mb-3" action="" method="post" style="width: 16rem">
		<div class="card-body">
			<div class="text-center">
				<i class="far fa-user-unlock fa-2x mb-2"></i>
				<h3 class="card-title mb-3">Login</h3>
			</div>
			<?= csrf_field() ?>
			<div class="mb-3">
				<label for="userName" class="form-label">User Name</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="userName" name="userName" placeholder="numan.naseer.nomi" required />
			</div>
			<div class="mb-3">
				<label for="userPassword" class="form-label">Password</label>
				<input type="password" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="userPassword" name="userPassword" placeholder="NumanNaseerNomi" required />
			</div>
			<div class="d-grid gap-2">
				<button type="submit" class="btn btn-outline-primary btn-sm mb-3">Login</button>
			</div>
			<p class="text-muted m-0">Forgot password? <a href="">Reset</a></p>
		</div>
	</form>
</div>