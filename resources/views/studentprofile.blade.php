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
    <h4 class="text-left"><strong>ICTRC Alumni Student Proile</strong></h4>
<br>
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <center>
                  <div class="form-file">
                    <label for="your_picture">
                    <figure>

                        <img src="../frontend/images/logos.png"
                        alt="" width="100" class="your_picture_image">
                        <input type="hidden" name="oldprofile" value="#">
                    </figure>

                    </label>

                </div>
                </center>
            </div>
            <div class="col-sm-9">
                <center>
                    <br><br>
                    <a href="{{ ('editstudentprofile') }}" h class="btn  brn-lg" style="color: white;background-color: #202d5b">Edit Profile </a>
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
                                    <input id="#" type="text" class="form-control " name="name" value="NO. 001" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Name</label>
                                    <input id="#" type="text" class="form-control " name="name" value="Maung Maung" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Name (Myanmar) </label>
                                    <input id="#" type="text" class="form-control " name="name" value="Maung Maung" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Degree</label>
                                    <input id="#" type="text" class="form-control " name="Degree" value="B.C.Sc" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Graduated University</label>
                                    <input id="#" type="text" class="form-control " name="Graduated University" value="UCS(Loikaw)" readonly autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Contact No. </label>
                                    <input id="#" type="text" class="form-control " name="Contact No." value="09793013921" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Email</label>
                                    <input id="#" type="text" class="form-control " name="Email" value="mgmg@gmail.com" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Address</label>
                                    <input id="#" type="text" class="form-control " name="name" value="Yangon" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Division/ State </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="Yangon" readonly required autocomplete="text">

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

                                    <label>Training Center </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="MS IT" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Course </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="Five Month" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Batch </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="Batch-001" readonly required autocomplete="text">

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

                                    <label>Job Location </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="Yangon" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Job Field </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="Software Enginner" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Job Position </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="Manager" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Salary </label>
                                    <input id="#" type="text" class="form-control " name="Division/ State" value="500,000" readonly required autocomplete="text">

                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">

                                    <div class="col-sm-12">

                                    <label>Comany Name </label>
                                    <input id="password" type="text" class="form-control" name="company" value="MS IT" readonly required autocomplete="new-password">

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



        {{-- <br>
        <h4 class=" container text-center" ><strong>ICTRC Alumni Student Profile</strong></h4>

        <br>
        </br>

    <section class="signa-table-section clearfix container">

        <h4 style="text-align: center" class="container"><b>Personal Information</b></h4>
        <div class="row">

            <div class="col-sm-3 my-6 my-9">
                <div class="col">
                    <center>
                        <a class="navbar-brand" href="#"><img src="
                      ../frontend/images/logos.png" alt="Bootstrappin'"
                      width="120"></a>
                    </center>
                </div>
                <br>
                <br>
                <div class="col-sm-11">
                    <center>
                        <a href="{{('editstudentprofile')}}" class="btn active btn-default btn-sm btn-block btn-outline-primary  float-center" class="form-control" style="background-color: #202d5b;color:white;"> Edit Profile</a></td>


                    </center>
                </div>
                <br>
            </div>


            <div class="col-sm-3">

                    <div class="col">
                        <div class="text-sm-left">Sr.No:</div>
                        <div class="text-left">Sr-001</div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="text-left"> Degree:</div>
                        <div class="text-left">B.C.Sc</div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="text-left"> Email:</div>
                        <div class="text-left">mgmg@gmail.com</div>
                    </div>
                    <br>
            </div>
            <div class="col-sm-3">
                <div class="col">
                    <div class="text-left">Name:</div>
                    <div class="text-left">Mg Mg</div>
                </div>
                <br>
                <div class="col">
                    <div class="text-left">Graduated University:</div>
                    <div class="text-left">UCS(Loikaw)</div>
                </div>

                <br>
                <div class="col">

                    <div class="text-left">Address:</div>
                    <div class="text-left">Yangon</div>

                </div>
                <br>


            </div>
            <div class="col-sm-3">
                <div class="col">
                    <div class="text-left">Name(Myanmar):</div>
                    <div class="text-left">မောင်မောင်</div>
                </div>
                <br>
                <div class="col">
                    <div class="text-left"> Contact No.:</div>
                    <div class="text-left">09793013921 Class</div>
                </div>
                <br>
                <div class="col">
                    <div class="text-left">Division/ State:</div>
                    <div class="text-left">Yangon</div>
                </div>

                <br>
            </div>
        </div>
        <h4 style="text-align: center" class="container"><b>Batch Detail</b></h4><br>
            <div class="row">

                <div class="col-sm-3 my-6 my-9">

                    <br>
                </div>

                <div class="col-sm-3">

                        <div class="col">
                            <div class="text-sm-left">Training Centre:</div>
                            <div class="text-left">MS IT Online Class</div>
                        </div>
                        <br>
                </div>
                <div class="col-sm-3">
                    <div class="col">
                        <div class="text-left">Course:</div>
                        <div class="text-left">Five Month</div>
                    </div>
                    <br>


                </div>
                <div class="col-sm-3">
                    <div class="col">
                        <div class="text-left">Batch:</div>
                        <div class="text-left">Batch-005</div>
                    </div>

                    <br>
                </div>
            </div>

            <h4 style="text-align: center" class="container"><b>Current Employment Details</b></h4><br>
            <div class="row">

                <div class="col-sm-3 my-6 my-9">

                    <br>
                </div>

                <div class="col-sm-3">

                        <div class="col">
                            <div class="text-sm-left">Job Location:</div>
                            <div class="text-left">Yangon</div>
                        </div>
                        <br>
                        <div class="col">
                            <div class="text-left"> Salary:</div>
                            <div class="text-left">500,000 </div>
                        </div>
                        <br>
                        <br>
                </div>
                <div class="col-sm-3">
                    <div class="col">
                        <div class="text-left">Job Field:</div>
                        <div class="text-left"> Software Enginner</div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="text-left">Conpany Name:</div>
                        <div class="text-left">MS IT </div>
                    </div>

                    <br>


                </div>
                <div class="col-sm-3">
                    <div class="col">
                        <div class="text-left">Job Position:</div>
                        <div class="text-left">Manager</div>
                    </div>
                    <br>
                    <div class="col">

                    </div>
                    <br>

                </div>

            </div>


    </section>
 --}}

    </div>
</div>
<!-- /#page-content-wrapper -->

</div>

<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>



  </body>
</html>
