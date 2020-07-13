@extends('maintemplate')
@section('content')
<br>
    <h4 class="text-left"><strong>ICTRC Alumni Student Proile</strong></h4>
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

@endsection



