@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">

                    <div class="card-header">
                        ID {{$files->id}} - 
                        <input class="btn btn-secondary" id="fileParse" onclick="fileParse({{ $files->parsedFile }})"  value="Fetch">
                        <a class="btn btn-secondary" href="{{ url('/files') }}" >Return</a>
                    </div>                    

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table id="excelTable" class="display compact" width="100%">
                               
                        </table>
                    </div>

                </div>
            </div>
        </div>
      </div>
  </div>

  <!-- Bootstrap 4 Table search  -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
  
  <!-- Excel Application -->
  <script src="{{ asset('js/appExcel.js') }}"></script>

@endsection