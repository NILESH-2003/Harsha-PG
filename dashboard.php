
<body style="background-color:skyblue;">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		
		<div class="row"  >
			<div class="col-lg-12" style="background-color:skyblue;">
			<h3 class="page-header" style="font-weight: 700;text-align:center;font-size:30px;color:#330000">Dashboard</h3>

			</div>
		</div>
		
		<div class="panel panel-container" style="background-color: #89878a;padding: 35px;">
 <div class="row" >
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right" >
						<div class="row no-padding"><em class="fa fa-xl fa-bed color-blue" ></em>
							<div class="large" style=" color:white"><?php include 'counters/room-count.php'?></div>
							<div class="text-muted" style=" color:white ;font-size:1em">Total Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
							<div class="large" style=" color:white"><?php include 'counters/reserve-count.php'?></div>
							<div class="text-muted"  style=" color:white  ;font-size:1em">Reservations</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large" style=" color:white"><?php include 'counters/staff-count.php'?></div>
							<div class="text-muted"  style=" color:white  ;font-size:1em">Staffs</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-red"></em>
							<div class="large" style=" color:white"><?php include 'counters/complaints-count.php'?></div>
							<div class="text-muted"  style=" color:white ;font-size:1em">Complaints</div>
						</div>
					</div>
				</div>
			</div>

			<hr>





			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>

				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-red panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
						<div class="large" style=" color:white"><?php include 'counters/avrooms-count.php'?></div>
						<div class="text-muted"  style=" color:white  ;font-size:1em">Available Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget ">
					<div class="row no-padding"><em class="fa fa-xl fa-spinner color-blue"></em>
							<div class="large" style=" color:white"><?php include 'counters/pendingpay-count.php'?></div>
							<div class="text-muted"  style=" color:white  ;font-size:1em">Total Pending Payments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>
			</div><!--/.row-->

			<hr>



			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>

				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-red panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-money color-black"></em>
							<div class="large" style=" color:white">Rs.<?php include 'counters/income-count.php'?></div>
							<div class="text-muted"  style=" color:white ;font-size:1em">Total Earnings</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-credit-card color-purp"></em>
							<div class="large" style=" color:white">Rs.<?php include 'counters/pendingpayment.php'?></div>
							<div class="text-muted"  style=" color:white  ;font-size:1em">Pending Payment</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>
			</div><!--/.row-->
		</div>
		
	</div>	<!--/.main-->
	

		
</body>
</html>