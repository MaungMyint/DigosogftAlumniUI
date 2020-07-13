@extends('maintemplate')
@section('content')

<br>
    <h4 class="text-left"><strong>Manage Alumni </strong></h4>
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
                  <option value="100000-200000">100000-200000</option>
                  <option value="200000-300000">200000-300000</option>
                  <option value="300000-400000">300000-400000</option>
                  <option value="400000-500000">400000-500000</option>
                  <option value="500000-600000">500000-600000</option>
                  <option value="600000-700000">600000-700000</option>
                  <option value="700000-800000">700000-800000</option>
                  <option value="800000-900000">800000-900000</option>
                  <option value="900000-1000000">900000-1000000</option>
                  <option value="1000000 above ">1000000 above</option>
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






<section class="membercard">
  <div class="">
      <div class="#">

          <div class="col-md-3 col-sm-6">
              <div class="left-widget-sidebar">
                  <div class="card-widget bg-white user-card ">
                      <div class="u-content">


                              <div class="grid">
                                  </div>
                              <img width="100" height="100" class="img-circle img-100 shadow-white" src="../frontend/images/logos.png">



                          <b> Maung Maung</b>

                        <hr>
                          <p class="text-muted">

                              <span class="company-location">
                                  <i class="fa fa-phone"></i>
                                 09793013921
                              </span><hr>
                              <span class="package">
                                  <i class="fa fa-map-marker"></i>
                                  Yangon
                              </span><hr>
                              <span class="package">
                                  <i class="fa fa-envelope"></i>
                                  mgmg@gmail.com


                              </span><hr>
                              <a href="#" class="btn  btn-sm" style="background-color: #202d5b;color:white; ">Mail</a>
                              <a href="{{ 'editbyadmin' }}" class="btn   btn-sm" style="background-color: #202d5b;color:white; ">Edit</a>
                              <a href="#" type="button" class="btn   btn-sm" style="background-color: #202d5b;color:white; ">Delete</a>
                  </div>
              </div>


          <div class="my-5"></div>

          <div class="my-5"></div>
</div>
</div>
</section>



@endsection



