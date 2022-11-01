<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	@yield('title')
</title>

@include('layouts.style')
@include('layouts.icon')

<!--[if lt IE 9]>
<script src="http://localhost/ass_php2/public/js/html5shiv.js"></script>
<script src="http://localhost/ass_php2/public/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="https://shopee.vn/?utm_campaign=-&utm_content=affiliate06&utm_medium=affiliates&utm_source=an_17329180010&utm_term=7vi8zkxspu5h&gclid=CjwKCAjw5P2aBhAlEiwAAdY7dJb7kd5gWFIznCtonoG25cxMWc89YM2Ivae23jWik1Xzj1Q29wCTRxoCQ6gQAvD_BwE"><span>Huy Nghĩa Store</span></a>
						<ul class="user-menu">
							<li class="dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									{{-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li> --}}
									<li><a href=" {{BASE_URL.'logout'}} "><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div>
									
                </div>
                <!-- /.container-fluid -->
			</nav>
		
	@include('layouts.slibar')
		
	@yield('content')
    
    @include('layouts.script')
</body>
</html>
