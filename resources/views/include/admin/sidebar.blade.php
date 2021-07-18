<div class="sidenav">
    <div class="title">
        <h3 style="float: left; margin-left: 20%" class="text-gray"><strong>Sutorimu</strong></h4> 
        &nbsp; 
        <h6 style="float: left;" class="text-gray">admin</h6>
    </div>
    <ul class="nav flex-column">
    <li class="nav-item li-sidebar">
          <a class="nav-link hover {{request()->is('admin') ? 'active' : ''}}" href="{{ route('dashboard') }}"> <i class="fas fa-tachometer-alt" aria-hidden="true"></i> &nbsp; Dashboard</a>
        </li>
        <li class="nav-item li-sidebar">
          <a class="nav-link hover
          {{request()->is('admin/update') ? 'active' : ''}} 
          {{request()->is('admin/searchu') ? 'active' : ''}}
          {{request()->is('admin/update/create') ? 'active' : ''}}
          " href="{{ route('update.index') }}"> <i class="fa fa-angle-double-up" aria-hidden="true"></i> &nbsp; Update</a>
        </li>
        <li class="nav-item li-sidebar">
          <a class="nav-link hover 
          {{request()->is('admin/list') ? 'active' : ''}} 
          {{request()->is('admin/searcha') ? 'active' : ''}}
          {{request()->is('admin/list/create') ? 'active' : ''}}
          " href="{{ route('list.index') }}"><i class="fa fa-list-ul" aria-hidden="true"></i> &nbsp; List Anime</a>
        </li>
        <li class="nav-item li-sidebar">
          <a class="nav-link hover 
          {{request()->is('admin/genre') ? 'active' : ''}} 
          {{request()->is('admin/searchg') ? 'active' : ''}}
          " href="{{ route('genre.index') }}"><i class="fas fa-tv"></i> &nbsp; Genre</a>
        </li>
        <li class="nav-item li-sidebar">
          <a class="nav-link hover 
          {{request()->is('admin/request') ? 'active' : ''}} 
          {{request()->is('admin/searchr') ? 'active' : ''}}
          {{request()->is('admin/request/create') ? 'active' : ''}}
          " href="{{ route('request.index') }}"><i class="fa fa-sticky-note" aria-hidden="true"></i> &nbsp; Request</a>
        </li>
        <li class="nav-item li-sidebar">
          <a class="nav-link hover 
          {{request()->is('admin/category') ? 'active' : ''}} 
          {{request()->is('admin/category/create') ? 'active' : ''}}
          " href="{{ route('category.index') }}"><i class="fa fa-align-left" aria-hidden="true"></i> &nbsp; Season Category</a>
        </li>
        <li class="nav-item">
          <form action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="nav-link logout btn-warning" type="submit"><i class="fa fa-power-off" aria-hidden="true"></i> &nbsp; Logout</button>
          </form>
        </li>
    </ul>
  </div>