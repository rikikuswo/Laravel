<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light mb-2">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-logout-modal-sm">
                Logout
            </button>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  {{-- Modal Logout --}}
  <div class="modal fade bd-logout-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure?</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="{{ ('/logout') }}">Yes</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
    </div>
  </div>
