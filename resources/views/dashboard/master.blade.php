<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">
		<title>Rents/Property Manager | @yield('title')</title>
		@include('dashboard.pages.includes.sections.links')
	</head>
	
	<body class="fixed-left">
	    <div id="wrapper">
			@include('dashboard.pages.includes.sections.header')    
			@yield('content')
			@include('dashboard.pages.includes.sections.scripts')    
	    </div>
	</body>

</html>
