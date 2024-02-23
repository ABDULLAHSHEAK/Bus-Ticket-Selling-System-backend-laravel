  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="{{ route('profile') }}" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  {{-- --- location --- --}}
                  <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Users
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('show.user') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Users</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('add.user') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add User</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  {{-- --- location --- --}}
                  <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">
                          <i class="nav-icon fas fa-location-arrow"></i>
                          <p>
                              Location
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('show.location') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Location</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('add.location') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Location</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  {{-- --- bus ----  --}}
                  <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">
                          <i class="nav-icon fas fa-bus"></i>
                          <p>
                              Buses
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('show.bus') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Bus</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('add.bus') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Bus</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  {{-- --- Trip ----  --}}
                  <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">
                          <i class="nav-icon fas fa-calendar-alt"></i>
                          <p>
                              Trip
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('show.trip') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Trip</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('add.trip') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Trip</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  {{-- --- Fares ----  --}}
                  <li class="nav-item">
                      <a href="javascript:void(0)" class="nav-link">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Fares
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('show.fare') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Fare List</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('add.fare') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Fare</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="{{route('show.seat')}}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p> Ticket </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
