@extends('welcome')

 

@section('content')
    <div class="main">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">

                <hr>
                <hr>

                    <div class="text-center">

                        <a href="/gorevler" class="btn btn-success"> Görevler </a>
                        <a href="/" class="btn btn-info"> örnek buton</a>

                    </div>
                
                <hr>
                <hr>
            
            </div>
            <div class="col-md-2"></div>
        </div>
            
        
    </div>    
@endsection

@section('js')
    <script>
        $(document).ready(function() {      
            var table = $('#users_table').DataTable({
                
                ajax: {
                    url: "/index_data"
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