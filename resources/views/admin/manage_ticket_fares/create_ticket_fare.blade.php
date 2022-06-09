@extends('layouts.admin_layout.main_layout')

@section('content')

    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Create Ticket Form</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Forms</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Create Ticket Form</li>
            </ol>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card card-box card responsive">
                <div class="card-head">
                    <header>TRAVELLERS FORM</header>
                </div>
                @if     (session()->has('success'))
                    <div style="background-color:green;"                            
                        style="font-size:16px" class="alert 
                        alert-dismissable fade show text center">
                        <strong>{{ session('success') }}</strong>
                        <button type="button"class="close"data-dimiss="alert"   
                         aria-label="close">
                         <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
               @endif
                <div class="card-body " id="bar-parent">
                    <form action="{{ url('store-task')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold ">State</label>
                            @error('state')
                                 <div class="text-danger font-weight-bold">{{ $message}}</div>
                            @enderror
                            <input value="{{ old('state')}}" type="" name="state" class="form-control @error('state') is-invalid @enderror"  id="state" placeholder="Enter Place of destination">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Price</label>
                            @error('price')
                                 <div class="text-danger font-weight-bold">{{ $message}}</div>
                            @enderror
                            <input value="{{ old('price')}}" type="price" name="price"class="form-control @error('price') is-invalid @enderror" id="simpleFormPrice" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-icon-black">
                                <input id="rememberChk1" type="checkbox" checked="checked">
                                <label for="rememberChk1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection