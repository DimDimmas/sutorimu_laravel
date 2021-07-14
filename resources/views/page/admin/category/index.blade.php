@extends('layouts.admin')

@section('title', 'Season List')
@section('content')

<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Season List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('request.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Table Season</strong></h1></center>
    <!-- <a class="add-new btn btn-success" href="{{ route('category.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Anime</a> -->
    <button class="btn btn-success add-new" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Season</button>
    <br>

    <div class="table-content">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Season Name</th>
                    <th scope="col"><center> Action</center></th>
                </tr>
            </thead>
            <tbody>
            <?php 
              $i = 1;
            ?>
            @forelse ($cate as $cates)
            <tr>
                <td class="text-center">{{ $i++ }}</td>
                <td scope="row">{{ $cates->name }}</td>
                <form action="{{ route('category.destroy',$cates->id) }}" method="POST">
                    <td class="text-center">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
                    </td>
                </form>
            </tr>
            @empty
            <div class="alert alert-danger">
                Season Not Found.
            </div>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Genre -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Add New Season</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label style="color: #000">Season Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning">Save</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    <!-- -------------- -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
@endsection