<?php if ($this->session->userdata('nombre')!='') {?>
	<nav class="navbar navbar-expand-lg  navbar-dark">
		
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/lt3.png" alt="logo" style="width:2.5em;"></a>
			<a class="navbar-brand font-weight-bold" href="<?php echo base_url(); ?>">Linea de Tiempo</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="list-unstyled navbar-nav mr-0 ml-auto smooth-scroll">
					<li class="nav-item">
						<span class="navbar-brand"><img src="<?php echo base_url(); ?>img/fsociety.png" class="rounded-circle img-responsive" style="width:1.8em;"><?php echo ($this->session->userdata('nombre'));?></span>
					</li>
					<li class="nav-item">
						<a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fas fa-home"></i></a>
					</li>
					<li class="nav-item">
						<a class="navbar-brand" href="<?= site_url("/Principal/cerrarSesion"); ?>"><i class="fas fa-sign-out-alt"></i></a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
<?php  } else {?>
	<nav class="navbar navbar-expand-lg  navbar-dark">
		
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/lt3.png" alt="logo" style="width:2.5em;"></a>
			<a class="navbar-brand font-weight-bold" href="<?php echo base_url(); ?>">Linea de Tiempo</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="list-unstyled navbar-nav mr-0 ml-auto smooth-scroll">
					<li class="nav-item">
						<a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fas fa-home"></i></a>
					</li>
					<li class="nav-item">
						<span class="navbar-brand"><a data-target="#myModal" data-toggle="modal"><i class="fas fa-sign-in-alt"></i></a></span>
					</li>
				</ul>
			</div>

		</div>
	</nav>
<?php }?>

<body>
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="fixed-top">
					<button type="button" class="btn btn-dark" data-dismiss="modal">x</button>
				</div>

				<br>
				
				<div class="modal-body border-rounded my-1 p-4">
					<div class="text-center">
						<img src="<?php echo base_url(); ?>img/fsociety.png" class="rounded-circle img-responsive">
					</div>

					<h4 class="text-center font-weight-bold">Iniciar sesi&oacute;n</h4>
					
					<form action="<?php echo base_url(); ?>index.php/Principal/validaUsuario" method="post">
						
						<div class="md-form">
							<i class="fas fa-user-tie"></i><label for="usuario">Usuario</label>
							<input id="usuario" name="usuario" class="form-control" type="text" required="" placeholder="Nombre de usuario">
							<br>
							<i class="fas fa-unlock"></i><label for="password">Contrase&ntilde;a</label>
							<input id="password" name="password" class="form-control" type="password" required="" placeholder="*****">
						</div>
						
						<br>

						<div class="text-center">
							<button type="submit" class="btn btn-secondary btn-lg active">Iniciar sesi&oacute;n</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
