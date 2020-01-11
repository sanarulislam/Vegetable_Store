@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<h5>Admin Area:</h5>

<form>
    <div class="form-group">
      <label for="sel1">Select Task Subject:</label>

      <div>
      	<a href="/announcements">Announcement</a></br>
      	<a href="/products">Vegetables</a></br>
      	<a href="/categories">Category</a></br>
      	<a href="#">Users</a></br>


      </div>




    </div>
  </form>

@endsection

