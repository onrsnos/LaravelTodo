{{-- @extends('welcome') --}}
@extends('layouts.app')

 

@section('content')
    <div class="main">
        {{-- <div class="row">
        
        <div class="col-md-2"></div>
            <div class="col-md-8"> --}}

                <hr>
                {{-- <div class="row mx-auto">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 mx-auto"> --}}

                        <h4>

                            <label for=""> Kullanıcılar listesi </label>
                        </h4>
                    {{-- </div>
                    <div class="col-md-3"></div>
                </div> --}}
                <hr>
                
                {{-- <div> --}}

                    <div class="text-end">

                        <a  class="btn btn-success text-right" href="/users/create"> Oluştur </a>
                        <a  class="btn btn-success text-right" href="/">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
                        </a>
                    </div>
                    
                    <table class="table table-borderless  table-striped " id="users_table">
                        <thead class=" ">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">İsim</th>
                            <th scope="col">Email</th>
                            <th scope="col">Oluşturulma Tarihi</th>
                            <th scope="col">Aksiyonlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
    
                {{-- </div>    
            </div>
            <div class="col-md-2"></div>
        </div> --}}
            
        
    </div>    
@endsection

@section('js')
    <script>
        $(document).ready(function() {      
            var table = $('#users_table').DataTable({
                
                ajax: {
                    url: "/users/index_data"
                },

                columns: [
                    
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action'},
                
                ],

            });
        });
    </script>
@endsection