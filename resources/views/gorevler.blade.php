{{-- @extends('welcome') --}}
@extends('layouts.app')

 

@section('content')
    <div class="main">
        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">

                <hr>
                <div class="row mx-auto">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 mx-auto">

                        <h4>

                            <label for=""> Yapılacaklar listesi </label>
                        </h4>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <hr>
                
                <div>

                    <div class="text-end">

                        <a  class="btn btn-success text-right" href="/gorevler/create"> Oluştur </a>
                        <a  class="btn btn-success text-right" href="/"> Geri Dön </a>
                    </div>
                    
                    <table class="table table-borderless  table-striped " id="gorevler_table">
                        <thead class=" ">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">İsim</th>
                            <th scope="col">Açıklama</th>
                            <th scope="col">Durum</th>
                            <th scope="col">Aksiyonlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        </table>
    
                </div>    
            </div>
            <div class="col-md-2"></div>
        </div>
            
        
    </div>    
@endsection

@section('js')
    <script>
        $(document).ready(function() {      
            var table = $('#gorevler_table').DataTable({
                
                ajax: {
                    url: "/gorevler/index_data"
                },

                columns: [
                    
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'},
                
                ],

            });
        });
    </script>
@endsection