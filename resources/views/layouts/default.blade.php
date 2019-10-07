<!doctype html>
<html>
<head>





       <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <title>{{$title}}</title>
            <link rel='stylesheet' href="{{asset('stylesheets/bootstrap.min.css')}}" />
      <link rel='stylesheet' href="{{asset('/stylesheets/style2.css')}}" />
            <link rel='stylesheet' href="{{asset('/stylesheets/my-style.css')}}" />

      <link rel='stylesheet'  href="{{asset('/stylesheets/paper-dashboard.css')}}" />
       <link rel='stylesheet' href="{{asset('/stylesheets/fontawesome.css')}}" />

       <link rel='stylesheet' href="{{asset('/datatable/datatables.min.css')}}" />
              <link rel='stylesheet' href="{{asset('/datatable/buttons.dataTables.min.css')}}" />

@if( !empty($styles))
      @foreach ($styles as $style)
       <link rel='stylesheet' href="{{asset('/stylesheets/'.$style)}}" />
      @endforeach
@endif
    

</head>
<body>


 
 

<div class="wrapper ">




























    <div class="sidebar" data-color="black" data-active-color="info">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('/images/bot.svg')}}">
          </div>
        </a>
        <a href="/" class="simple-text logo-normal">
          Pu tools
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

           <li class="{{$active_menu=='home'?'active':''}}">
            <a href="/">
              <i class="fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
           <li class="{{$active_menu=='baconheo'?'active':''}}">
            <a href="/baconheo/access">
              <i class="fas fa-tools"></i>
              <p>Baconheo tools</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="/">Admin dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
      
              @yield('content')
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">

            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with  <i class="fas fa-coffee"></i> by Pu 
              </span>
            </div>
          </div>
        </div>
      </footer>
 </div>

</div>














               <script src="{{asset('/javascripts/jquery.min.js')}}"></script>

             <script src="{{asset('/javascripts/popper.min.js')}}"></script>
        <script src="{{asset('/javascripts/bootstrap.js')}}"></script>
            <script src="{{asset('/javascripts/bootstrap-material-design.min.js')}}"></script>
        // <script src="{{asset('/javascripts/paper-dashboard.min.js')}}"></script>
        <script src="{{asset('/javascripts/bootstrap-notify.min.js')}}"></script>
        <script src="{{asset('/javascripts/script2.js')}}"></script>
             <script src="{{asset('/javascripts/my-script.js')}}"></script>
              <script src="{{asset('/datatable/datatables.min.js')}}"></script>
                      


@if( !empty($scripts))
  @foreach ($scripts as $script)
     <script src="{{asset('/javascripts/'.$script)}}"></script>

      @endforeach
@endif
                  
</body>


</html>
