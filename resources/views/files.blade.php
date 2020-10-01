@extends('layouts.app')

@section('content')

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                
                   <div class="card-header">Select the Excel File to be shown</div>
  
                   <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                                
                    <br />
                      
                    @if(count($files))

                        <table class="table table-hover"> 

                            <tr>
                                <th>Id</th>
                                <th>File</th>
                                <th>Select</th>
                            </tr>
 
                            @foreach($files as $row)
                        
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->parsedFile }}</td>
                                <td width="30%" align="left">
                                <a href="/files/{{$row->id}}/edit" class="btn btn-secondary">Display</a>   
                                </td>
                            </tr>
                        
                            @endforeach

                        </table>

                    @else
                    
                        <p>No files found</p>
                            
                    @endif
                   
                </div>

                {{$files->links()}}


            </div>

        </div>
      </div>
  </div>

@endsection