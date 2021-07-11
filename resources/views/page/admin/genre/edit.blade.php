@extends('layouts.admin')
@section('title', 'Update Genre')
@section('content')
<div class="main">
    <div style="margin-top: 10%; color: #FECA57">
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
@endsection