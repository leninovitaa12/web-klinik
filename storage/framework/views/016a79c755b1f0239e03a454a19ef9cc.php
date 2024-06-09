<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<!-- My CSS -->


	<title>Dashboard</title>
</head>
<body>


	<!--Import Sidebar-->
    <?php echo $__env->make('layouts.bar_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3></h3>
                    <p>Buat Janji Temu</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
                    <h3></h3>
                    <p>Cek Tagihan</p>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="order">

                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="<?php echo e(asset('dashboard/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\KLINIK INSAN PERMATA\1. FIX KLINIK WEB\Klinik_Insan_Permata\resources\views\dashboard.blade.php ENDPATH**/ ?>