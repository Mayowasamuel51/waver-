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
 </head>
 <!-- END HEAD -->
</head>
<body>

@extends('layouts.admin_layout.main_layout')

@section('content')

    

    <div class="container py-5">
        <div class="row">
            <div class="col">
            <div class="card mt-5">
    <div class="card-header">
        <span class="font-weight-bold">Cutomser Ticket Recipt  and info</span> 
        {{-- <a href="{{route ('bookings') }}" class="float-right text-white btn-primary"> <i class="fas fa-plus-circle mr-2"></i>Cutomser Ticket Recipt  and info</a> --}}
    </div>
    <div class="mt-2"></div>

    <div class="card-body">
        <div class="table-responsive text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                     <th>FULLNAME </th>
                     <th>EMAIL</th>
                     <th>PHONE</th>
                     <th>FROM DESTINATION</th>
                     <th>TO DESTINATION</th>
                     <th>Date</th>
                     </tr>
                </thead>
                 <tbody>
                     @foreach($ticket as $index=>$ticket)
                     <tr>
                         {{-- <td>{{ $index + 1 }}</td> --}}
                         <td>{{ $ticket->fullname}}</td>
                         <td>{{ $ticket->email }}</td>
                          <td>{{ $ticket->phone }}</td>
                           <td>{{ $ticket->fromDestination }}</td>
                            <td>{{ $ticket->toDestination }}</td>
                             <td>{{ $ticket->date }}</td>
                         <td class="px-1">
                                {{-- <a class="btn btn-primary btn-sm" href="{{ url('edit-task/'.$ticket->id) }}"><i class="fas fa-edit"></i> Edit</a>  --}}
                                {{-- <a onclick="return(confirm('Are you sure you want to delete?'))" class="btn btn-danger btn-sm" href="{{ url('delete-task/'.$ticket->id) }}"><i class="fas fa-trash"></i> Delete</a> --}}
                         </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
    @endsection

<!-- start js include path -->
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