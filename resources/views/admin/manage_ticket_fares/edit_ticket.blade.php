<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ asset('admin/source/assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/source/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('admin/source/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{ asset('admin/source/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('admin/source/assets/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ asset('admin/source/assets/plugins/material/material.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/source/assets/css/material_style.css') }}">
	<!-- animation -->
	<link href="{{ asset('admin/source/assets/css/pages/animate_page.css') }}" rel="stylesheet">
	<!-- inbox style -->
    <link href="{{ asset('admin/source/assets/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
    
    <link href="{{ asset('admin/source/assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/source/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/source/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/source/assets/css/theme-color.css') }}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/source/assets/img/favicon.ico') }}" /> 
 <!-- END HEAD -->

</head>
<body>
    
@extends('layouts.admin_layout.main_layout')

@section('content')

    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Form Layouts</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Forms</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Form Layouts</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="card card-box card responsive">
                <div class="card-head">
                    <header>TRAVELLERS FORM</header>
                    <a class="btn btn-primary float-right"            href="{{ route('all.task')}}">All Destination</a>
                </div>
                <div class="card-body " id="">
                    <form action="{{ url('update-task/'.$ticket)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">State</label>
                            @error('state')
                                 <div class="text-danger font-weight-bold">{{ $message}}</div>
                            @enderror
                            <input value="{{ $ticket->state}}" type="" name="state" class="form-control"  id="state" placeholder="Enter Place of destination">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Price</label>
                            @error('price')
                                 <div class="text-danger font-weight-bold">{{ $message}}</div>
                            @enderror
                            <input value="{{ $ticket->price}}" type="price" name="price"class="form-control" id="Price" placeholder="Price">
                        </div>
                        <button class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

    <!-- start js include path -->

    </div>
<script src="{{ asset('admin/source/assets/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
	<script src="{{ asset('admin/source/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('admin/source/assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/plugins/sparkline/jquery.sparkline.min.js') }}" ></script>
	<script src="{{ asset('admin/source/assets/js/pages/sparkline/sparkline-data.js') }}" ></script>
    <!-- Common js-->
	<script src="{{ asset('admin/source/assets/js/app.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/js/layout.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/js/theme-color.js') }}" ></script>
    <!-- material -->
    <script src="{{ asset('admin/source/assets/plugins/material/material.min.js') }}"></script>
    <!-- animation -->
    <script src="{{ asset('admin/source/assets/js/pages/ui/animations.js') }}" ></script>
    <!-- chart js -->
    <script src="{{ asset('admin/source/assets/plugins/chart-js/Chart.bundle.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/plugins/chart-js/utils.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/js/pages/chart/chartjs/home-data.js') }}" ></script>
    <!-- summernote -->
    <script src="{{ asset('admin/source/assets/plugins/summernote/summernote.min.js') }}" ></script>
    <script src="{{ asset('admin/source/assets/js/pages/summernote/summernote-data.js') }}" ></script>
    <!-- end js include path -->
</body>
</html>
    
