

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
      The business is simple cloth store where you can find your prefered product. You can buy your required product from here.
      <br/><br/>
      <h3>Most Recent Announcement</h3>
     @php
       $an = App\Announcement::latest()->first();
     @endphp
      {{ $an ? $an->announcement_text : '' }}

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

                          <div>Plz Click This Link for <a href="/register">Register</a></div>
                </div>
@endsection