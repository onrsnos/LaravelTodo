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

                            <label for=""> Yeni Kullanıcı Oluşturma Sayfası </label>
                        </h4>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <hr>
                
                <div>

                    <div class="text-end">

                        <a  class="btn btn-success text-right" href="/gorevler"> Geri Dön </a>

                    </div>
                    
                     
                    <form action="/users/store" method="POST" role="form" class="form-horizontal">
                        @csrf
                        <div>

                            <label for="">Kullanıcı Adı</label>
                            <input type="text" class="input" name="name">

                        </div>
                        
                        <div>

                            <label for="">Kullanıcı Emaili</label>
                            <input type="text" class="input" name="email">
                            
                        </div>

                        <div>

                            <label for="">Kullanıcı Şifresi</label>
                            
                            <input type="text" class="input" name="password">
                             
                        </div>
                        
                        <button class=" btn btn-success submit " type="submit">
                            Kaydet
                        </button>

                    </form>
    
                </div>    
            </div>
            <div class="col-md-2"></div>
        </div>
            
        
    </div>    
@endsection

@section('js')
    <script>
         
    </script>
@endsection