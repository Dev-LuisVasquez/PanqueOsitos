<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title')</title>
      <!--favicom-->
      <!--estilos -->
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
      <!--header -->
      <header>
            <div id="header">
			<h1>PanqueOsitos</h1>
			<ul class="nav">
				
				<li><a href="">Inicio</a></li>
				<li><a href="">Productos</a>
					<ul>
						<li><a href="">Tortas</a></li>
						<li><a href="">Galletas</a></li>
						<li><a href="">CupCake</a></li>
						<li><a href="">Pasteles</a></li>
						
					</ul>
				</li>
				<li><a href="">Nosostros</a></li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>
      </header>
      <!--nav -->
      
      @yield('content')
      <!-- footer -->
      <!-- -->
      <!--script -->

</body>
</html>