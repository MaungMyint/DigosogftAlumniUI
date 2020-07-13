@extends('maintemplate')
@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-4">
            <br>
            <div class="card">
                <br>
                <div class=""  style="font-size: 30ppx;padding-left:40px "><h4><strong> Create Training</strong></h4></div>

                <div class="card-body">
                        <form method="POST" action="#">
                            @csrf




                            <div class="form-group row">
                                <label for="course" class="col-md-4 col-form-label text-md-right">Training Name</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="course" placeholder="Enter Training Name" required autocomplete="new-password">

                                        <span class="invalid-feedback" role="alert">
                                        </span>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                   <center>
                                    <button type="submit" class="btn  btn-sm float-right" style="background-color: #202d5b;color: white">
                                        Save
                                     </button>
                                   </center>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection



