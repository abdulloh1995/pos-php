<?php require views_path('partials/header'); ?>

<div class="d-flex">
	<div style="min-height:600px;" class="shadow-sm col-7 p-4">

		<div class="input-group mb-3">
			<h3> Items </h3>
			<input type="text" class="ms-4 form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" autofocus>
			<span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
		</div>

		<div class="js-products d-flex" style="flex-wrap: wrap;height: 90%;overflow-y: auto;">

			<!--card-->
			<div class="card m-2 border-0" style="min-width: 200px;max-width: 200px;">
				<a href="#">
					<img src="assets/images/image.jpg" class="w-100 rounded border">
				</a>
				<div class="p-2">
					<div class="text-muted">COFFEE SOFT DRINK</div>
					<div class="" style="font-size:20px"><b>$5.00</b></div>
				</div>
			</div>
			<!--end card-->

			<!--card-->
			<div class="card m-2 border-0" style="min-width: 200px;max-width: 200px;">
				<a href="#">
					<img src="assets/images/caramel-moolatte.png" class="w-100 rounded border">
				</a>
				<div class="p-2">
					<div class="text-muted">CARAMEL MOOLATTE</div>
					<div class="" style="font-size:20px"><b>$10.00</b></div>
				</div>
			</div>
			<!--end card-->

			<!--card-->
			<div class="card m-2 border-0" style="min-width: 200px;max-width: 200px;">
				<a href="#">
					<img src="assets/images/wave.jpg" class="w-100 rounded border">
				</a>
				<div class="p-2">
					<div class="text-muted">WAVE DRINK</div>
					<div class="" style="font-size:20px"><b>$15.00</b></div>
				</div>
			</div>
			<!--end card-->


		</div>
	</div>

	<div class="col-5 bg-light p-4 pt-2">

		<div>
			<center>
				<h3>Cart <div class="badge bg-primary rounded-circle">3</div>
				</h3>
			</center>
		</div>
		<div class="table-responsive" style="height: 400px;overflow-y:auto;">
			<table class="table table-striped table-hover">
				<tr>
					<th>Image</th>
					<th>Description</th>
					<th>Amount</th>
				</tr>

				<!--item-->
				<tr>
					<td style="width: 110px;"><img src="assets/images/image.jpg" class="rounded border" style="width:100px;height:100px;"></td>
					<td class="text-primary ">COFFEE SOFT DRINK

						<div class="input-group my-3" style="max-width: 150px;">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-minus"></i></span>

							<input type="text" class="form-control text-primary" placeholder="1" value="1">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
						</div>
					</td>
					<td style="font-size:20px"><b>$5.00</b></td>
				</tr>
				<!--end item -->

				<!--item-->
				<tr>
					<td style="width: 110px;"><img src="assets/images/wave.jpg" class="rounded border" style="width:100px;height:100px;"></td>
					<td class="text-primary ">WAVE DRINK

						<div class="input-group my-3" style="max-width: 150px;">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-minus"></i></span>

							<input type="text" class="form-control text-primary" placeholder="1" value="1">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
						</div>
					</td>
					<td style="font-size:20px"><b>$10.00</b></td>
				</tr>
				<!--end item -->

				<!--item-->
				<tr>
					<td style="width: 110px;"><img src="assets/images/wave.jpg" class="rounded border" style="width:100px;height:100px;"></td>
					<td class="text-primary ">WAVE DRINK

						<div class="input-group my-3" style="max-width: 150px;">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-minus"></i></span>

							<input type="text" class="form-control text-primary" placeholder="1" value="1">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
						</div>
					</td>
					<td style="font-size:20px"><b>$10.00</b></td>
				</tr>
				<!--end item -->

				<!--item-->
				<tr>
					<td style="width: 110px;"><img src="assets/images/wave.jpg" class="rounded border" style="width:100px;height:100px;"></td>
					<td class="text-primary ">WAVE DRINK

						<div class="input-group my-3" style="max-width: 150px;">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-minus"></i></span>

							<input type="text" class="form-control text-primary" placeholder="1" value="1">
							<span class="input-group-text text-primary" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
						</div>
					</td>
					<td style="font-size:20px"><b>$10.00</b></td>
				</tr>
				<!--end item -->

			</table>
		</div>
		<div class="alert alert-primary h5">Total: $30.00</div>
		<div class="d-flex flex-column">
			<button class="btn btn-success my-2 py-3">Checkout</button>
			<button class="btn btn-primary my-2">Clear All</button>
		</div>
	</div>
</div>


<?php require views_path('partials/footer'); ?>