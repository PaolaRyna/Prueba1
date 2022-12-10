@extends('layouts.master')
@section('title')
Maps 
@endsection
@section('content')
<div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            Google Maps Ubicación
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30105
            .88023760115!2d-99.56636791025969!3d19.4022485!2m3!1f0!2f0!3f0!3m2!1i10
            24!2i768!4f13.1!3m3!1m2!1s0x85d20bdcca9c72a7%3A0x98daa417ea983a96!2sCli
            nica%20Veterinaria%20Animal%C2%B4s%20Home!5e0!3m2!1ses!2smx!4v1657844759
            298!5m2!1ses!2smx" 
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
          <div class="card-body ">
            <div id="map" class="map"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

    
@endsection