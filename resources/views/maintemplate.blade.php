<!DOCTYPE html>
<html lang="en">
<head>
    <title>ICTRC</title>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="../frontend/images/logos.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/css/mycss.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/mycssone.css')}}">
</head>


  <div class="d-flex" id="wrapper">

<!-- Sidebar -->
    <div class="border-right " id="sidebar-wrapper"  style="background-color: #202d5b;">
        <center><div class="sidebar-heading sticky-sidebar " id="" style="color: white">ICTRC </div></center>
        <div class="list-group list-group-flush ">


        <center>
          <a class="navbar-brand" href="{{ '/' }}"><img src="
            ../frontend/images/logos.png" alt="Bootstrappin'"
            width="120"></a>
        </center  >

        <div class="">
                <p style="text-align: left; color: white; padding-left: 20px"> Report</p>
                    <a href="{{('/')}}" class="list-group-item list-group-item-action " style="background-color: #202d5b; color: white"> Table View
                    <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
                    </a>
                    <a href="{{('chartview')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white">
                    Chart View
                    <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
                    </a>
                </p>
                <p style="text-align: left; color: white; padding-left: 20px"> Alumni
                    <a href="{{('import')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white"> Upload Alumni
                        <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
                    </a>
                    <a href="{{('profile')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white">
                    Manage Alumni
                        <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
                    </a>
                </p>
        <p style="text-align: left; color: white; padding-left: 20px"> Admin
            <a href="{{('traing')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white"> Create Training
            <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
            </a>
            <a href="{{('course')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white">
            Create Course
            <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
            </a>
            <a href="{{('phase')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white">
            Create Phase
             <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
            </a>
            <a href="{{('createusers')}}" class="list-group-item list-group-item-action" style="background-color: #202d5b; color: white">
            User Registration
             <span class="badge float-right"><i class="fa fa-chevron-right fa-8x" ></i></span>
            </a>
        </p>

        <hr>

        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-sm  border-bottom" style="background-color: #202d5b">
        <button class="btn" id="menu-toggle">
            <div class="mydiv" id="mydiv"></div>
            <div class="mydiv" id="mydiv"></div>
            <div class="mydiv" id="mydiv"></div>
            </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon" style="color: white" >

    <div class="mydiv" id="mydiv"></div>
    <div class="mydiv" id="mydiv"></div>
    <div class="mydiv" id="mydiv"></div>
  </span>
</button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">Admin
      </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #202d5b;">
                        <a class="dropdown-item" href="#" style="background-color: #202d5b; color: white">Log out</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ 'password' }}" style="background-color: #202d5b; color: white">Change Password</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container-fluid">
       @yield('content')
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>

<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
  <script src="{{asset('backend/js/myjs.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script type="text/javascript">
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

  </body>
</html>
