<?php
	// Top Container
	// Sidebar - Menu
	include_once "../../content/template-part/dashboard-navbar.php";
	include_once "../../inc/dashboard/analysis-front.php";
?>

<main class="page-content">
	<div class="container-fluid bg-light-opacity">
		<h4><?php echo $sysname; ?></h4>
		<p><?php echo $quotetitle ; ?></p>

		<div class="card-deck mb-3">
			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex">
						<div class="card-icon text-light"><i aria-hidden="true" class="fa fa-user"></i></div>
						<div class="ml-auto">
							<p class="card-label text-right text-muted">Users</p>
							<h4  class="card-text text-right "><?php echo $total_user; ?></h4>
							<div class="d-flex flex-wrap text-right">
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-muted border border-muted">Admin 1</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-muted border border-muted">Staff 1</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-muted border border-muted">Cashier 1</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-muted border border-muted">Subscriber 1</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-muted border border-muted">Contributor 1</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted d-none">Since last month</small>
					<small class="text-success ml-auto d-none">
						<i aria-hidden="true" class="fa fa-caret-up"></i> 5,35%
					</small>
				</div>
			</div>

			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex">
						<div class="card-icon text-light"><i aria-hidden="true" class="fa fa-shopping-cart"></i></div>
						<div class="ml-auto">
							<p class="card-label text-right text-muted">Orders</p>
							<h4 class="card-text text-right"><?php echo $total_order; ?></h4>
							<div class="d-flex flex-wrap text-right">
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-muted border border-muted">Process 1</div>
							 	<div class="p-1 m-1 rounded-lg bg-light flex-fill text-danger border border-danger">Checkout 2</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-info border border-info">Reviewed 3</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-primary border border-primary">Approved 1</div>
							 	<div class="p-1 m-1 rounded-lg bg-light flex-fill text-warning border border-warning">Declined 2</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-secondary border border-secondary">Shipped 3</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted d-none">Since last month</small>
					<small class="text-danger ml-auto d-none">
						<i aria-hidden="true" class="fa fa-caret-down"></i> 2,81%
					</small>
				</div>
			</div>

			<div class="card bg-default">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex">
						<div class="card-icon text-light"><i aria-hidden="true" class="far fa-money-bill-alt"></i></div>
						<div class="ml-auto">
							<p class="card-label text-right text-muted">Sales</p>
							<h4  class="card-text text-right "><?php echo $dcurrencyx; ?> <?php echo $total_sales; ?></h4>
							<div class="d-flex flex-wrap text-right">
							 	<div class="p-1 m-1 rounded-lg bg-light flex-fill text-danger border border-danger">Unpaid 2</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-warning border border-warning">Cancel 3</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-primary border border-primary">Return 1</div>
								<div class="p-1 m-1 rounded-lg bg-light flex-fill text-success border border-success">Complete Order 1</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted d-none">Since last month</small>
					<small class="text-success ml-auto d-none">
						<i aria-hidden="true" class="fa fa-caret-up"></i> 5,35%
					</small>
				</div>
			</div>

			<div class="card bg-default d-none">
				<div class="card-body text-center">
					<div class="card-innerBody d-flex">
						<div class="card-icon text-light"><i aria-hidden="true" class="fa fa-users"></i></div>
						<div class="ml-auto"><p class="card-label text-right text-muted">Visitors</p><h4  class="card-text text-right ">199,099</h4></div>
					</div>
				</div>
				<div class="card-footer d-flex">
					<small class="text-muted">Since last month</small>
					<small class="text-success ml-auto">
						<i aria-hidden="true" class="fa fa-caret-up"></i> 5,35%
					</small>
				</div>
			</div>
		</div>

		<div class="card-deck mb-3 d-none">
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the first card</p>
				</div>
			</div>
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the third card</p>
				</div>
			</div>
		</div>

		<div class="card-deck mb-3 d-none">
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the first card</p>
				</div>
			</div>
			<div class="card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
		</div>

		<div class="row card-deck mb-3 d-none">
			<div class="col-sm-8 card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
			<div class="col-sm-4 card bg-default">
				<div class="card-body text-center">
					<p class="card-text">Some text inside the second card</p>
				</div>
			</div>
		</div>
	</div>
</main>