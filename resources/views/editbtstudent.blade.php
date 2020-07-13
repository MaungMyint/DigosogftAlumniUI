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


  <div class="" id="wrapper">

<!-- Sidebar -->

</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg  border-bottom" style="background-color: #202d5b">

            <h3 style="color: white">ICTRC</h3>


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


        <br>
    <h4 class="text-center container"><strong>ICTRC Alumni Student Proile</strong></h4>
    <br>
<div class="container">
    <div class="row">

        <div class="col-sm-4">
            <center>
              <div class="form-file">
                <label for="your_picture">
                <figure>

                    <img src="../frontend/images/logos.png"
                    alt="" width="100" class="your_picture_image">
                    <input type="hidden" name="oldprofile" value="#">
                </figure>

                </label>
                <input type="file" class="">

            </div>
            </center>
        </div>
        <div class="col-sm-4">
            <center>
                <br><br>
                <button class="btn  brn-lg" style="color: white;background-color: #202d5b">Profile Update</button>
            </center>
        </div>
    </div>
</div>
    <br>

<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <br>
            <div class="">
                <br>
                <div class="card-header" style="background-color: #202d5b;color: white">Personal Information Details</div>

                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                <div class="row">

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Sr. No.</label>
                            <input id="#" type="text" class="form-control " name="name" placeholder="Sr. NO." required autocomplete="text">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Name</label>
                            <input id="#" type="text" class="form-control " name="name" placeholder="Name" required autocomplete="text">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Name (Myanmar) </label>
                            <input id="#" type="text" class="form-control " name="name" placeholder="Name (Myanmar)" required autocomplete="text">

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Degree</label>
                            <input id="#" type="text" class="form-control " name="Degree" placeholder="Degree" required autocomplete="text">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Graduated University</label>
                            <input id="#" type="text" class="form-control " name="• Graduated University" placeholder="Graduated University" required autocomplete="text">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Contact No. </label>
                            <input id="#" type="text" class="form-control " name="Contact No." placeholder="Contact No." required autocomplete="text">

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Email</label>
                            <input id="#" type="text" class="form-control " name="Email" placeholder="Email" required autocomplete="text">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Address</label>
                            <input id="#" type="text" class="form-control " name="name" placeholder="Address" required autocomplete="text">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Division/ State </label>
                            <input id="#" type="text" class="form-control " name="Division/ State" placeholder="Division/ State" required autocomplete="text">

                            </div>
                        </div>
                    </div>

                </div>

                </form>

                </div>

            </div>
        </div>
    </div>




</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br>
            <div class="">
                <br>
                <div class="card-header" style="background-color: #202d5b;color: white">Batch Deatil
                </div>

                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                <div class="row">

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Training Centre</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose Training Centre</option>
                                <option>Selected from database </option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Course</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose  Course</option>
                                <option>Selected from database </option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Batch </label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose  Batch</option>
                                <option>Selected from database </option>
                            </select>
                            </div>
                        </div>
                    </div>

                </div>

                </form>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br>
            <div class="">
                <br>
                <div class="card-header" style="background-color: #202d5b;color: white">Current Employment Details
                </div>

                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                <div class="row">

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Job Location</label>
                            <select id="inputState" class="form-control">
                                <option selected>Job Location</option>
                                <option value="Ayeyarwady Region">Ayeyarwady Region</option>
                                  <option value="Bago Region">Bago Region</option>
                                  <option value="Chin State">Chin State</option>
                                  <option value="Kachin State">Kachin State</option>
                                  <option value="Kayah State">Kayah State</option>
                                  <option value="Kayin State">Kayin State</option>
                                  <option value="Magway Region">Magway Region</option>
                                  <option value="Mandalay Region">Mandalay Region </option>
                                  <option value="Mon State">Mon State</option>
                                  <option value="Rakhine State">Rakhine State</option>
                                  <option value="Sagaing Region">Sagaing Region</option>
                                  <option value="Shan State">Shan State</option>
                                  <option value="Tanintharyi Region">Tanintharyi Region</option>
                                  <option value="Yangon Region">Yangon Region</option>

                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Job Field</label>
                            <select id="inputState" class="form-control">
                                <option selected>Job Field</option>
                                <option value="Management">Management</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Networking">Networking</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Technician">Technician</option>
                                <option value="IT Trainer">IT Trainer</option>
                                <option value="System Engineer">System Engineer</option>
                                <option value="Business">Business</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Job Position</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose Job Position</option>
                                <option>Selected from database </option>
                            </select>
                            </div>
                        </div>
                        {{-- <div class="form-group">

                            <div class="col-sm-12">

                            <label>Salary</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose  Salaray</option>
                                <option>Selected from database </option>
                            </select>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Comany Name </label>
                            <input id="password" type="password" class="form-control" name="company" placeholder="Enter Company Name" required autocomplete="new-password">

                                    <span class="invalid-feedback" role="alert">
                                    </span>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <br>
                <div class="row">

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Salary</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose   Salary</option>
                                <option value="100,000-500,000">100,000-500,000</option>
                                <option value="500,000-1,000,000">500,000-1,000,000</option>
                                <option value="1,000,000- 1,500,000">1,000,000-1,500,000</option>
                                <option value="1,500,000- 2,000,000">1,500,000-2,000,000</option>
                                <option value="2,000,000- 2,500,000">2,000,000-2,500,000</option>
                                <option value="2,500,000- 3,000,000">2,500,000-3,000,000</option>
                                <option value="3,000,000- 3,500,000">3,000,000-3,500,000</option>
                                <option value="3,500,000- 4,000,000">3,500,000-4,000,000</option>
                                <option value="4,000,000- 4,500,000">4,000,000-4,500,000</option>
                                <option value="4,500,000- 5,000,000">4,500,000-5,000,000</option>
                                <option value="1000000 above ">5,000,000 above</option>

                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">

                            <div class="col-sm-12">

                            <label>Comany Name </label>
                            <input id="password" type="password" class="form-control" name="company" placeholder="Enter Company Name" required autocomplete="new-password">

                                    <span class="invalid-feedback" role="alert">
                                    </span>
                            </div>
                        </div>
                    </div>

                </div>

                </form>

                </div>

            </div>
        </div>
    </div>
</div>



    </div>
</div>
<!-- /#page-content-wrapper -->

</div>

<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>



  </body>
</html>
