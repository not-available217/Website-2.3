	<body>
		<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">WeerApp</a>
			<!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Zoeken" aria-label="Zoeken"> -->
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
					@if (Auth::guest())
						<a class="nav-link" href="/login">Log in</a>
					@else
						<a class="nav-link" href="/logout">Log uit</a>
					@endif
				</li>
			</ul>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block bg-light sidebar">
					<div class="sidebar-sticky" style="margin-top:45px;">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" href="/dashboard">
									<span data-feather="home"></span>
									Dashboard <span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/mijn-gegevens">
									<span data-feather="file"></span>
									Mijn gegevens
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/genereer-token">
									<span data-feather="file"></span>
									Token genereren
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/tokens">
									<span data-feather="file"></span>
									Token overzicht
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file"></span>
									Geexporteerde data
								</a>
							</li>
							<!-- <li class="nav-item">
								 <a class="nav-link" href="#">
								 <span data-feather="shopping-cart"></span>
								 Products
								 </a>
								 </li> -->
							<!-- <li class="nav-item">
								 <a class="nav-link" href="#">
								 <span data-feather="users"></span>
								 Customers
								 </a>
								 </li> -->
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="bar-chart-2"></span>
									Overzicht
								</a>
							</li>
							<!-- <li class="nav-item">
								 <a class="nav-link" href="#">
								 <span data-feather="layers"></span>
								 Integrations
								 </a>
								 </li> -->
						</ul>

						<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
							<span>Weerdata exports</span>
							<a class="d-flex align-items-center text-muted" href="#">
								<span data-feather="plus-circle"></span>
							</a>
						</h6>
						<ul class="nav flex-column mb-2">
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Vandaag
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Gisteren
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Eergisteren
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span data-feather="file-text"></span>
									Deze week
								</a>
							</li>
						</ul>
					</div>
				</nav>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
					@yield('content')
					
				</main>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
			 ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
		<script src="js/vendor/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Icons -->
		<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
		<script>
		 feather.replace()
		</script>

		<!-- Graphs -->
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
		<script>
		 var ctx = document.getElementById("myChart");
		 var myChart = new Chart(ctx, {
			 type: 'line',
			 data: {
				 labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
				 datasets: [{
					 data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
					 lineTension: 0,
					 backgroundColor: 'transparent',
					 borderColor: '#007bff',
					 borderWidth: 4,
					 pointBackgroundColor: '#007bff'
				 }]
			 },
			 options: {
				 scales: {
					 yAxes: [{
						 ticks: {
							 beginAtZero: false
						 }
					 }]
				 },
				 legend: {
					 display: false,
				 }
			 }
		 });
		</script>
	</body>
