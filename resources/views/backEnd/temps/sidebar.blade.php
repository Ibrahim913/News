<div class="sidebar" data-color="orange" data-active-color="danger">
      <div class="logo">
        <a href="$" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ url('backEnd/assets/img/logo-small.png') }}">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          ADMIN
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li @if(isset($act) && $act == '') class='active' @endif>
            <a href="{{ url('/dashboard') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li @if(isset($act) && $act == 'users') class='active' @endif>
            <a href="{{ url('dashboard/users') }}">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>Users</p>
            </a>
          </li>
          <li @if(isset($act) && $act == 'tourGuides') class='active' @endif>
            <a href="{{ url('dashboard/tourGuides') }}">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
              <p>Tour guides</p>
            </a>
          </li>
          <li @if(isset($act) && $act == 'locations') class='active' @endif>
            <a href="{{ url('dashboard/locations') }}">
            <i class="fa fa-globe" aria-hidden="true"></i>
              <p>locations</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>