@extends('layouts.main')

@section('content')

<div class="container">

	<div class="row">
  @foreach ($hasil as $promo)
  <div class="col-md-4">
    <div class="thumbnail">

      <a href="{{route('birthday.index')}}/{{$promo->id}}">
        <img src="{{ asset('files/'.$promo->detgambar[0]->nama_gambar) }}" alt="Lights" style="width:100%">
        <div class="caption">  
          <h4>{{  $promo->promo  }}</h4> 
          <p>View Detail</p>
        </div>
      </a>
    </div>
  </div>
@endforeach
</div>
</div>

@endsection