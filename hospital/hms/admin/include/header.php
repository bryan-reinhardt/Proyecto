<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
							<h2  >HW</h2>
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Navegación de Palanca</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:8% ">
								<h5 >Sistema de Gestión</h5>
							</li>
						
						
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img width="50" height="50" src="assets/images/8.jpg" > <span class="username">



			<?php $query=mysqli_query($con,"select username from admin where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['username'];
}
									?>
									<i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									
								<li>
										<a href="addamin.php">
										Agregar Administrador Nuevo
										</a>
									</li>
									<li>
										<a href="change-password.php">
											Cambia la Contraseña
										</a>
									</li>
									<li>
										<a href="../../../inicioAPP/index.html">
											Salir
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
				
					
					<!-- end: NAVBAR COLLAPSE -->
				</header>