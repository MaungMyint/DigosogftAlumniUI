{{-- @extends('maintemplate')
@section('content')

<br>
<h4 class="text-left"><strong>Upload Excel Data</strong></h4>
<hr>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Upload Data From excel
        </div>



   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           Please Select the excel file
   </div>

        <div class="card-body">
            <form action="#" method="POST" name="importform" enctype="multipart/form-data">
                @csrf
                <input type="file" name="import_file" class="form-control">
                <br>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>



@endsection --}}

@extends('maintemplate')
@section('content')

<br>
    <h4 class="text-left"><strong><b>Upload Alumni<p/b></strong></h4>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 my-2">
                <br>
                <div class="card">
                    <br>
                    <div class=""  style="font-size: 30ppx;padding-left:40px "><h4><strong> Alumni</strong></h4></div>

                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf


                            <div class="form-group row">

                                <div class="col-md-12">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose Traing Centre</option>
                                        <option>Selected from database </option>
                                    </select>

                                        <span class="invalid-feedback" role="alert">

                                        </span>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose Course</option>
                                        <option>Selected from database </option>
                                    </select>

                                        <span class="invalid-feedback" role="alert">

                                        </span>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose  Phase</option>
                                        <option>Selected from database </option>
                                    </select>

                                        <span class="invalid-feedback" role="alert">

                                        </span>
                                </div>
                            </div>


                            <div class="form-group row">
                            <div class="col-md-12">
                                <form action="#" method="POST" name="importform" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="import_file" class="">
                                    <br>

                                </form>
                            </div>
                            </div>

                                    <br>
                                   <center>
                                    <button type="submit" class="btn  btn-sm float-right" style="background-color: #202d5b;color: white">
                                       Upload
                                    </button>
                                   </center>


                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection






