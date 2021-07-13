@extends('layouts.admin')
@section('title', 'Genre')
@section('content')
<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Genre Table</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0" action="{{ route('genre.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form> -->
    </nav>
    <br><br>
    <center><h1><strong>Genre List</strong></h1></center>
    <br>
    <button class="btn btn-success add-new" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Genre</button>
    <div class="table-content">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>No</th>
            <th>Title Genre</th>
            <th colspan="2"><center> Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php 
              $no = 1;
            ?>
         @forelse ($items as $item)
         <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $item->genre }}</td>
          <td>                
            <center>
              <a id="edit_grn" href="{{ route('genre.edit', $item->id) }}" class="btn btn-dark" >
                <i class="fas fa-pen edit"></i>
              </a>
            </center>
          </td>
         
            <td>
              <center>
                <form action="{{ route('genre.destroy', $item->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-dark" ><i class="fa fa-trash delete" aria-hidden="true"></i></button>
              </form>
              </center>
            </td>
          </tr>
          @empty
          <tr>
             <td colspan="3" class="text-center">
                  Data Kosong
              </td>
           </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <!-- Modal Tambah Genre -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Genre</h5>
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
              <form action="{{ route('genre.store') }}" method="post">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label for="title_grn" class="control-label">Title Genre</label>
                    <input type="text" name="genre" id="title_grn" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-warning">Simpan</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    <!-- -------------- -->

    <!-- modal Edit genre -->
    <div class="modal" id="edit" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Update Genre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form id="form" enctype="multipart/form-data">
                <div class="modal-body" id="modal-edit">
                  <div class="form-group">
                    <label for="title_grn" class="control-label">Title Genre</label>
                    <input type="hidden" name="id_grn" id="id_grn">
                    <input type="text" name="title_grn" id="title_grn" class="form-control" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <input type="submit" value="Submit" name="edit" class="btn btn-warning">
                </div>
              </form>
            </div>
          </div>
      </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
   
  </div>

@endsection