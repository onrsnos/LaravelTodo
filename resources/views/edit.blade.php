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

                            <label for=""> Yeni Görev Oluşturma Sayfası </label>
                        </h4>
                    {{-- </div>
                    <div class="col-md-3"></div>
                </div> --}}
                <hr>
                
                {{-- <div> --}}

                    <div class="text-end">

                        <a  class="btn btn-success text-right" href="/gorevler">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
                        </a>

                    </div>
                    
                     
                    <form action="/gorevler/update" method="POST" role="form" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{$gorev->id}}">
                        <div>

                            <label for="">Görev Adı</label>
                            <input type="text" class="input" name="name" value="{{$gorev->name}}">

                        </div>
                        
                        <div>

                            <label for="">Görev Açıklaması</label>
                            <input type="text" class="input" name="description" value="{{$gorev->name}}">
                            
                        </div>

                        <div>

                            <label for="">Görev Durumu</label>
                            
                            <select name="status" id="">

                                <option value="Aktif"
                                    @if ($gorev->status == "Aktif")
                                        selected
                                    @endif  
                                    >
                                    Aktif
                                </option>
                                <option value="Pasif"
                                    @if ($gorev->status == "Pasif")
                                        selected
                                    @endif

                                    >
                                    Pasif
                                </option>

                            </select>
                        </div>
                        
                        <button class=" btn btn-success submit " type="submit">
                            Kaydet
                        </button>

                    </form>
    
                </div>    
            {{-- </div>
            <div class="col-md-2"></div>
        </div> --}}
            
        
    </div>    
@endsection

@section('js')
    <script>
         
    </script>
@endsection