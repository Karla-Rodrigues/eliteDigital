@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                
                   <div class="card-header">Select Excel File to Import<strong> ( .xls, .xslx ) </strong></div>
  
                   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                                
                    <br />

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                           Upload Validation Error<br><br>
                           <ul>
                           @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                           </ul>
                        </div>
                    @endif
                      
                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <form method="POST" enctype="multipart/form-data" action="{{ route('importExcel') }}">
                        @csrf
                        

                        <div class="form-group">

                           <table class="table">
                                <tr>
                                    <td width="30"> <input type="file" name="file" id="customFile" /> </td>
                                    <td width="30%" align="left">
                                    <input type="submit" name="upload" class="btn btn-secondary" value="Upload">
                                    </td>
                                </tr>

                           </table>

                        </div>

                    </form>

                </div>
            </div>
        </div>
      </div>
  </div>

@endsection