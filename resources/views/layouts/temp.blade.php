<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cloth Store - A Project By Nazrul Islam</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('landing/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('landing/css/layout.min.css') }}" rel="stylesheet" type="text/css">
        @section('css')
        <link href="{{ asset('landing/css/components.min.css') }}" rel="stylesheet" type="text/css">
        @show
        <link href="{{ asset('landing/css/colors.min.css') }}" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
    </head>
    <body>
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Hero unit -->
                <div class="section gradient-1">
                    <!-- Main navbar -->
                    <div class="navbar navbar-expand-md navbar-dark" style="background-color: rgba(0,0,0,0.075); border-bottom-color: rgba(255,255,255,0.35)">
                        <div class="container">
                            <div class=" ">
                               {{--  <a href="#" class="d-inline-block">
                                    Home
                                </a> --}}
                              <ul class="nav navbar-nav">
                                     <li class="nav-item">
                                        <a href="/home" class="nav-link text-white" >Home</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/about" class="nav-link text-white" >About</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="" class="nav-link text-white" >Products</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="" class="nav-link text-white" >Contact</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="" class="nav-link text-white" >User Profile</a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white">login</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a href="#" class="nav-link text-white">Register</a>
                                    </li>
                                </ul>




                            </div>
                            <div class="d-md-none">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                                <i class="icon-tree5"></i>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar-mobile">
                                <ul class="navbar-nav ml-md-auto">
                                    <li class="nav-item">
                                        <div class="header-elements">
                                            <form action="/search" method="get">
                                                <div class="form-group form-group-feedback form-group-feedback-right">
                                                    <input type="text" name="q" class="form-control wmin-md-300" placeholder="Search">
                                                    <div class="form-control-feedback">

                                                        <i class="icon-search4 font-size-sm text-muted"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /main navbar -->
                    @section('jumburton')
                    @show
                </div>
                <!-- /hero unit -->

                @section('content')
                    @show

                <!-- Footer -->
                <div class="section gradient-6 text-white">

                    <div class="navbar navbar-expand-lg navbar-dark bg-dark-alpha border-0">
                        <div class="container">
                            <div class="text-center d-lg-none w-100">
                                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                                <i class="icon-unfold mr-2"></i>
                                Footer
                                </button>
                            </div>
                            <div class="navbar-collapse collapse" id="navbar-footer">
                                <span class="navbar-text">
                                    &copy; {{ date('Y') }} <a href="#">A Project By</a> by <a href="https://facebook.com/joycseru" target="_blank">Nazrul Islam</a>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->

         <!-- Core JS files -->
        <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
        <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
        <!-- /core JS files -->
        <!-- Theme JS files -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
        @stack('js')
        <!-- /theme JS files -->
    </body>
</html>





@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<!-- <div class="container mt-3 mb-3">
     <h3>Overview</h3>
      The business is simply a small restaurant; located in Arlington, Virginia, USA.
      <br/><br/>
      <h3>Most Recent Announcement</h3>
      
      <br /><br />
      Click on the link, to see all <a href="/announcements">Announcements</a> ordered newest to oldest.
      <br/><br/>
      <h3>Login Form</h3>

</div> -->

 <h3>Overview</h3>
      The business is simply a small restaurant; located in Arlington, Virginia, USA.
      <br/><br/>
      <h3>Most Recent Announcement</h3>


   
      <br /><br />
      Click on the link, to see all <a href="/announcements">Announcements</a> ordered newest to oldest.
      <br/><br/>
      <h3>Login Form</h3>

      <div class="card-body">
                        <form class="form-horizontal" action="" method=''>
                            @csrf


                            <div class="form-group">
                                    <label class="control-label col-sm-2" for="username">User name:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="username" placeholder="Enter room type" name="username">
                                    </div>
                                  </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="password">Password:</label>
                                    <div class="col-sm-10">
                                     <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                    </div>
                            </div>




                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">login</button>
                              </div>
                            </div>
                          </form>

                          <div>Plz Click This Link for <a href="#">Register</a></div>
                </div>
@endsection