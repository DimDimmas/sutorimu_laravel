@extends('layouts.admin')

@section('title', 'Anime List')
@section('content')
<div class="main">
    <nav class="navbar navbar-expand-lg">          
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Anime List</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('list.search') }}" method="get">
            <input class="search" name="search" type="search" placeholder="Search by Title" aria-label="Search">
        </form>
    </nav>
    <br><br>
    <center><h1><strong>Table Anime List</strong></h1></center>
    <a class="add-new btn btn-success" href="{{ route('list.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Anime</a>
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
                <th scope="col">Title List</th>
                <th scope="col">Studio</th>
                <th scope="col">Season</th>
                <th scope="col">Rate</th>
                <th scope="col">Status</th>
                <th scope="col">Cover Image</th>
                <th scope="col">Type</th>
                <th scope="col">Total Episode</th>
                <th scope="col">Aired</th>
                <th scope="col">Duration</th>
                <th scope="col" width="10%"><center>Synopsis</center></th>
                <th scope="col">Genre</th>
                <th scope="col">Trailer</th>
                <th scope="col" colspan="3"><center> Action</center></th>
                </tr>
            </thead>
            <tbody>
            @forelse ($list as $lists)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td scope="row">{{ $lists->title_list }}</td>
                    <td scope="row">{{ $lists->studio }}</td>
                    <td scope="row">{{ $lists->category }}</td>
                    <td scope="row">{{ $lists->rate }}</td>
                    <td scope="row">{{ $lists->status }}</td>
                    <td scope="row"><img src="{{ Storage::url('public/img/cover/').$lists->cover_image }}" width="70px" alt="{{ $lists->cover_image }}"></td>
                    <td scope="row">{{ $lists->type }}</td>
                    <td scope="row">{{ $lists->total_episode }}</td>
                    <td scope="row">{{ $lists->aired }}</td>
                    <td scope="row">{{ $lists->duration }} min.</td>
                    <td scope="row">{{ Str::limit($lists->synopsis, 100) }}</td>
                    <td scope="row">{{ $lists->genre }}</td>
                    <td scope="row"><a style="color: #fafafa" href="https://www.youtube.com/watch?v={{ $lists->trailer }}">https://www.youtube.com/watch?v={{ $lists->trailer }}</a></td>
                    <form action="{{ route('list.destroy',$lists->id) }}" method="POST">
                        <td class="text-center">
                            <a class="btn btn-dark" href="{{ route('list.show',$lists->id) }}"><i class="fa fa-eye show" aria-hidden="true"></i></a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-dark" href="{{ route('list.edit',$lists->id) }}"><i class="fas fa-pen edit"></i></a>
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
                    Anime Not Found.
                </div>
            @endforelse
            </tbody>
        </table>
        {{ $list->links() }}
    </div>
</div>
@endsection