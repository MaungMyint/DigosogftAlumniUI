@extends('maintemplate')
@section('content')
<br>
    <h4 class="text-left"><strong><b>ICTRC Chart View</b></strong></h4>
<hr>

<div class="form-row ">
    <div class="form-group col-md-3">
      <select id="inputState" class="form-control">
        <option >Search By Student Details </option>
        <option value="Name">Name</option>
        <option value="Gender">Gender</option>
        <option value="Degree">Degree</option>
        <option value="Course">Course</option>
        <option value=""address>address</option>
        <option value="Job Position">Job Position</option>
        <option value="Job Position">Job Locaiont</option>

      </select>
    </div>

    </form>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control">
        <option >Choose Trainging</option>
        <option value="Other">Selected from Database</option>

      </select>
    </div>

    <div class="form-group col-md-4">
        <select id="inputState" class="form-control">
          <option selected>Choose Phase</option>
          <option>Selected From Database</option>
        </select>
      </div>

  <div class="form-group col-md-4">
    <input type="submit" class="form-control btn btn-primary" value="Search" style="background-color: #202d5b">
  </div>
    </form>
</div>


{{--
<div class="container">
    <div class="row">

        <div class="col-sm-5">
            <center>
                <div class="form-group">

                    <div class="col-sm-12">

                        <label>Course</label>
                        <select id="inputState" class="form-control">
                        <option selected>Choose  Course</option>
                        <option>Selected from database </option>
                        </select>
                    </div>


            </div>
            </center>
        </div>
        <div class="col-sm-5">
            <center>
                <br><br>
                <button class="btn btn-primary brn-lg">Profile Update</button>
            </center>
        </div>
    </div>
</div> --}}


{{--
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="">
                    <br>
                    <div class="card-header" style="background-color: cyan">Pie Chart</div>


                    </div>

                </div>
            </div>
        </div>
    </div> --}}
@endsection



