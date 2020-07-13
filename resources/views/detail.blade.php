@extends('maintemplate')
@section('content')

<br>
    <h4 class="text-left"><strong>ICTRC Alumni Student Proile</strong></h4>
<br>
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <center>
                  <div class="form-file">


                        <img src="../frontend/images/logos.png"
                        alt="" width="120" class="your_picture_image img-fluid img-responsive">



                </div>
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


@endsection



