@extends('layouts.admin')

@section('title', 'Update List')
@section('content')

<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Update List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('update.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Table Anime List</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('update.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Update</a>
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
            <th scope="col">Title Update</th>
            <th scope="col">Episode</th>
            <th scope="col">Embed Link</th>
            <th scope="col">Image Preview</th>
            <th scope="col" colspan="2"><center> Action</center></th>
            </tr>
        </thead>
        <tbody>
        @forelse ($update as $updates)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td scope="row">{{ $updates->title_update }}</td>
                <td scope="row">{{ $updates->episode }}</td>
                <td scope="row">
                    <iframe src="https://mega.nz/embed/{{ $updates->embed_link }}" width="500" height="280" frameborder="0" allowfullscreen></iframe>                    
                </td>
                <td scope="row"><img src="{{ Storage::url('public/img/preview/').$updates->preview }}" width="200px" alt="{{ $updates->preview }}"></td>
                <form action="{{ route('update.destroy',$updates->id) }}" method="POST">
                    <td class="text-center">
                        <a class="btn btn-dark" href="{{ route('update.edit',$updates->id) }}"><i class="fas fa-pen edit"></i></a>
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
            Anime Updates Not Found.
        </div>
        @endforelse
        </tbody>
    </table>
    {{ $update->links() }}
    </div>
</div>

@endsection