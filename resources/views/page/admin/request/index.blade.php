@extends('layouts.admin')

@section('title', 'Request List')
@section('content')

<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Request List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('request.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Table Request</strong></h1></center>
    <!-- <a class="add-new btn btn-success" href="{{ route('list.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Anime</a> -->
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
                    <th scope="col">Title Anime</th>
                    <th scope="col">Text</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="3"><center> Action</center></th>
                </tr>
                @forelse ($req as $requests)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td scope="row">{{ $requests->title_anime }}</td>
                    <td scope="row">{{ Str::limit($requests->text, 50) }}</td>
                    <td scope="row">{{ $requests->status }}</td>
                    <form action="{{ route('request.destroy',$requests->id) }}" method="POST">
                        <td class="text-center">
                            <a class="btn btn-dark" href="{{ route('request.show',$requests->id) }}"><i class="fa fa-eye show" aria-hidden="true"></i></a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-dark" href="{{ route('request.edit',$requests->id) }}"><i class="fas fa-pen edit"></i></a>
                        </td>
                        <td class="text-center">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash delete" aria-hidden="true"></i></button>
                        </td>
                    </form>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Request Anime Not Found.
                </div>
                @endforelse
            </thead>
        </table>                
    </div>
</div>

@endsection