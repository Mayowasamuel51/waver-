<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Smile Admin | Bootstrap Responsive Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ asset('admin/source/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('admin/source/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
	<link href="{{ asset('admin/source/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('admin/source/assets/css/pages/extra_pages.css') }}">
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/source/assets/img/favicon.ico') }}" /> 
</head>
<body>
    @yield('content')
    <!-- start js include path -->
    <script src="{{ asset('admin/source/assets/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/js/pages/extra_pages/pages.js') }}" ></script>
    <!-- end js include path -->
</body>
</html>