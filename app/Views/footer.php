	<div class="container px-lg-5 pt-5">
		<div class="row">
			<div class="col-lg-4 mb-5 mb-lg-0">
				<p class="mb-0 text-uppercase fw-bold">
					Newsletter Signup
				</p>
				<p class="text-uppercase text-small">
					SIGN UP TO GET THE LATEST ON PRODUCTS, STYLING AND EVENTS.
				</p>
				<?php $validation = \Config\Services::validation(); ?>
				<form method="POST" action="<?php echo base_url('subscribe'); ?>">
					<input type="hidden" value="<?php echo uri_string(); ?>" name="uri">
					<input type="email" class="form-control form-control-sm border-0 border-bottom mb-3" name="email" placeholder="Email Address">
					<?php if(session()->getTempdata('subscribe_error')):?>
			                <p class='text-danger mt-2'>
			                   <?= session()->getTempdata('subscribe_error') ?>
			                </p>
			          <?php endif;?>
					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-dark rounded-0">Submit</button>
					</div>
				</form>
				<br>
				<p class="fw-bold mb-0">Location</p>
				<p class="mb-0">
					AL BARSHA 1, DUBAI, UNITED ARAB EMIRATES
				</p>
				<a class="text-decoration-none text-dark" href="https://goo.gl/maps/TTHEQg9edUy5cv6SA">
					View on Map <i class="fas fa-long-arrow-alt-right ms-2"></i>
				</a>
			</div>
			<div class="col-lg-2 ms-auto text-start">
				<div class="mb-3">
					<p class="mb-0 text-uppercase fw-bold">
						Phone
					</p>
					<a href="tel:97145844777" class="text-decoration-none text-muted fs-5">+971 4 584 4777</a>
				</div>
				<div class="mb-3">
					<p class="mb-0 text-uppercase fw-bold">
						Whatsapp
					</p>
					<a href="https://wa.me/971589051564" class="text-decoration-none text-muted fs-5">+971 58 905 1564</a>
				</div>
				<div class="mb-3">
					<p class="mb-0 text-uppercase fw-bold">
						Email
					</p>
					<a href="mailto:info@theartisans.ae" class="text-decoration-none text-muted fs-5">info@theartisans.ae</a>
				</div>
				<div class="mb-3 text-lg-end">
					<a class="text-decoration-none text-dark" aria-current="page" href="https://www.instagram.com/wearetailors/"><i class="fab fa-instagram fa-2x"></i></a>
				</div>
				<div class="text-lg-end">
					<p>
						2022 &#169; The Artisans
					</p>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/script.js'); ?>"></script>

  </body>
</html>