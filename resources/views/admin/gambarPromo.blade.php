
@extends('layouts.coba')

@section('content')

        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Picture</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
  				<form action="/Detgambar/{{$promos->id}}" method="POST">
  				{{csrf_field()}}
  				{{method_field('PUT')}}

         
        <div class="row">
         @foreach($images as $image)
          <div class="col-md-4">
          <div class="form-group">
            <img src="{{asset('files/'.$image->nama_gambar)}}" width="305" height="175"/>
          </div>
          </div>
          @endforeach
        </div>
        </form>
        
                    <br>
                    <br>
                     <a class="btn btn-primary" href="{{route('Promo.index')}}">Back</a>
           
                  </div>
                </div>
              </div>
            </div>
          </div>
     
@endsection
        
   