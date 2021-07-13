@extends('layouts.admin')
@section('title', 'Update Genre')
@section('content')
<div class="main">
  <nav class="navbar navbar-expand-lg">          
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <a class="nav-link disabled" href="#">Genre List</a>
          </li>
      </ul>
  </nav>
  <br><br>
  <center><h1><strong>Edit Genre</strong></h1></center>
  <a class="add-new btn btn-success" href="{{ route('genre.index') }}"><i class="fas fa-undo-alt    "></i> Back</a>
  <br>
  <div class="container mt-5 mb-5">
      <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-10">
              <div class="card border-0 shadow rounded">
                  <div class="card-body">
                    <form action="{{ route('genre.update', $genres->id) }}" method="post">
                        @method('PUT')
                        @csrf
                      <label for="title_grn" class="control-label">Title Genre</label>
                      <input type="hidden" name="id_grn" id="id_grn">
                      <input type="text" name="genre" id="title_grn" class="form-control" value="{{ $genres->genre }}">
                  <br>
                  <button type="submit" class="btn btn-warning rightButton">Edit</button>  
                  </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection