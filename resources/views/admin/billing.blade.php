<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <!-- ======= Styles ====== -->
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<!-- My CSS -->

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
            <!--Import Sidebar-->
        @include('layouts.bar')


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

        <!-- CONTENT -->

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Cari">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>


            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"> </div>
                        <div class="cardName">Catat Pembayaran</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="bills-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Client Aktif</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">00000</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Pembayaran Klien ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Billing Client</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Paket</td>
                                <td>Pembayaran</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Anisa Aziza</td>
                                <td>3</td>
                                <td>telah bayar</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Abelia</td>
                                <td>2</td>
                                <td>telah bayar</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Caca</td>
                                <td>4</td>
                                <td> - </td>
                                <td><span class="status return">Belum bayar</span></td>
                            </tr>

                            <tr>
                                <td>cania</td>
                                <td>3</td>
                                <td>telah bayar</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Anisa Aziza</td>
                                <td>3</td>
                                <td>telah bayar</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Abelia</td>
                                <td>2</td>
                                <td>telah bayar</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Caca</td>
                                <td>4</td>
                                <td> - </td>
                                <td><span class="status return">Belum bayar</span></td>
                            </tr>

                            <tr>
                                <td>cania</td>
                                <td>3</td>
                                <td>telah bayar</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </section>


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
