@extends('maintemplate')
@section('content')

<hr>
    <h4 class="text-left"><strong>ICTRC Table View</strong></h4>
<hr>
    <form>


        <div class="form-row">
            <div class="form-group col-md-2">
              <select id="inputState" class="form-control">
                <option selected> Training Centre</option>
                <option>Selected from database </option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <select id="inputState" class="form-control">
                <option selected>Choose Phase</option>
                <option>Selected from database </option>
            </select>
            </div>
            <div class="form-group col-md-2">
                <select id="inputState" class="form-control">
                  <option selected>Choose Course</option>
                  <option>Selected from database </option>
              </select>
              </div>
            <div class="form-group col-md-2">
              <select id="inputState" class="form-control">
                <option selected>Division/State</option>
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
            <div class="form-group col-md-2">
                <select id="inputState" class="form-control">
                  <option selected>Salary Range</option>
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

          <div class="form-group col-md-2">
              <select id="inputState" class="form-control">
            <option selected>University</option>
            <option>Selected from database </option>
        </select>
          </div>
            </form>

    </div>

        <div class="form-row">
            <div class="form-group col-md-2">
              <select id="inputState" class="form-control">
                <option >Current Status</option>
                <option value="CU Student">CU Student</option>
                <option value="CU Staff">CU Staff</option>
                <option value="TU Student">TU Student</option>
                <option value="Other">Other</option>

              </select>
            </div>
            <div class="form-group col-md-2">
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
            <div class="form-group col-md-2">
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
            <div class="form-group col-md-3">
                <select id="inputState" class="form-control">
                  <option selected>Job Position</option>
                  <optgroup label="Management">
                     <option value="Project Manager">Project Manager</option>
                     <option value="Database Manager">Database Manager</option>
                     <option value="IT Executive">IT Executive</option>
                     <option value="IT Director">IT Director</option>
                     <option value="IT Assitant Manager">IT Assitant Manager</option>
                     <option value="IT Department Head">IT Department Head</option>
                     <option value="IT Administrative Associate">IT Administrative Associate</option>
                     <option value="Network System Manager">Network System Manager</option>
                     <option value="IT Manager">IT Manager</option>
                     <option value="EDP Manager">EDP Manager</option>
                     <option value="System Manager">System Manager</option>
                     <option value="Training Manager">Training Manager</option>
                     <option value="Project Leader">Project Leader</option>
                     <option value="Team Leader">Team Leader</option>
                     <option value="Senior Executive">Senior Executive</option>
                     <option value="IT Security and Compliance Manager">IT Security and Compliance Manager</option>
                     <option value="Database  Administrator">Database  Administrator</option>
                     <option value="Vice President(IT)">Vice President(IT)</option>
                     <option value="Vice President(Information Service)">Vice President(Information Service)</option>
                     <option value="Chief Information Officer(CIO)">Chief Information Officer(CIO)</option>
                     <option value="Chief Technicial Officer(CTO)">Chief Technicial Officer(CTO)</option>
                     <option value="Chief Security Officer(CSO)">Chief Security Officer(CSO)</option>
                     <option value="Technical Director">Technical Director</option>
                     <option value="IT/IS Director">IT/IS Director</option>
                     <option value="IT Project Director">IT Project Director</option>
                   </optgroup>
                   <optgroup label="Programmer">
                     <option value="IOS Developer">IOS Developer</option>
                     <option value="PHP Programmer">PHP Programmer</option>
                     <option value="Senior Programmer">Senior Programmer</option>
                     <option value="Software Developer">Software Developer</option>
                     <option value="Android Developer">Android Developer</option>
                     <option value="Application Developer">Application Developer</option>
                     <option value="IT Software Support Enginner">IT Software Support Enginner</option>
                     <option value="Junior Programmer">Junior Programmer</option>
                     <option value="IT Application Engineer">IT Application Engineer</option>
                     <option value="Mobile Application  Developer">Mobile Application  Developer</option>
                     <option value="Programmer">Programmer</option>
                     <option value="Analyst Programmer">Analyst Programmer</option>
                     <option value="Web Developer">Web Developer</option>
                   </optgroup><optgroup label="Networking">
                     <option value="Networking">Networking</option>
                     <option value="IT Infrasturcture Engieer ">IT Infrasturcture Engieer </option>
                     <option value="Network Administration & Security Unit Officer">Network Administration & Security Unit Officer</option>
                     <option value="Network Technician">Network Technician</option>
                   </optgroup>
                    </optgroup><optgroup label="Digital Marketing">
                     <option value="IT Sales and Marketing">IT Sales and Marketing</option>
                   </optgroup>


                </select>
              </div>

          <div class="form-group col-md-3">
            <input type="submit" class="form-control btn" style="background-color: #202d5b;color: white ">
          </div>
            </form>
        </div>

<hr>
<div class="col-sm-12" >
<button type="button" class="btn  float-xl-right" style="background-color: #202d5b; color: white; padding-right: 10px;padding-left: 10px" >Send Mail</button>
</div>

<div class="col-sm-11"style= "padding-right: 30px;padding-left: 10px">
<button type="button" class="btn  float-xl-right" style="background-color: #202d5b;color:white; padding-right: 10px;padding-left: 10px">Export Excel</button>
</div>

<div class="my-5"></div>
<hr>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover table-active " id="example" style="width: 100%">

  <thead  class="" style="background-color: #202d5b">
    <tr>
      <th style="color: white"> Sr.No</th>
      <th style="color: white">Name </th>
      <th style="color: white">Gender</th>
      <th style="color: white">Degree</th>
      <th style="color: white">Training Centre</th>
      <th style="color: white">Phase</th>
      <th style="color: white">Course</th>
      <th style="color: white">Contact No.</th>
      <th style="color: white">Email</th>
      <th style="color: white">address</th>
      <th style="color: white">Job Position</th>
      <th style="color: white;text-align: center">Detail</th>

    </tr>
  </thead>
  <tbody>

    <tr>
      <td>NO. 001</td>
      <td>Maung&nbsp;Maung</td>
      <td>Male</td>
      <td>B.C.Sc</td>
      <td>MS IT OnLine Class</td>
      <td>Phase-2</td>
      <td>One Year</td>
      <td>09793013921</td>
      <td>mgmg@gmail.com</td>
      <td>Yangon</td>
      <td>Manager</td>
      <td>
        <a href="{{('detail')}}" class="btn btn-outline-primary btn-sm float-left" class="form-control" style="background-color: #202d5b;color:white;">Detail</a></td>

      </td>
      {{-- <td>
        <a href="#" class="btn btn-outline-primary btn-sm float-left" class="form-control" style="background-color: #202d5b;color:white;">Delete</a></td>

      </td> --}}


    </tr>

  </tbody>

<tfoot>
    <tr>
    </tr>
  </tfoot>



</table>

@endsection



