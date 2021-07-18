@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="main">
    <div style="margin-top: 30%; color: #FECA57">
      <center><h1><strong> Welcome {{Auth::user()->name}}</strong></h1></center>
    </div>
  </div>
@endsection