@extends('layouts.app')

@section('title')
    Homepage HakimGames    
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="tag">
                <span>
                    <h5>Find Your Favorite Camera</h5>
                    <p>Show your best photos</p>
                </span>
              </div>
              <a href="#">
                <div class="hero-thumbnail">
                    <div class="hero-img" style="background-image: url('frontend/img/bg');"></div>
                </div>
              </a>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="btn-cta">
            <a href="product.html" class="btn btn-outline-success" role="button" aria-pressed="true">Order Your Camera</a>
          </div>
        </div>
      </div>
    </div>
 </section> 
 <!-- Tutup Hero Section --> 

 <!-- About -->
 <section class="about">
<div class="container">
  <div class="row">
    <div class="col-5">
      <a href="#" class="component-about d-block">
        <div class="about-img">
          <img src="frontend/img/logo 1 (1).png" class="img-fluid">
        </div>
      </a>
    </div>
    <div class="col-7">
      <h4>About The Camera</h4>
      <p>A camera is an optical instrument that captures a visual image. At a basic level, cameras consist of sealed boxes (the camera body), with a small hole (the aperture) that allows light through to capture an image on a light-sensitive surface (usually photographic film or a digital sensor). Cameras have various mechanisms to control how the light falls onto the light-sensitive surface. Lenses focus the light entering the camera. The aperture can be narrowed or widened. A shutter mechanism determines the amount of time the photosensitive surface is exposed to light.

        The still image camera is the main instrument in the art of photography. Captured images may be reproduced later as part of the process of photography, digital imaging, or photographic printing. Similar artistic fields in the moving-image camera domain are film, videography, and cinematography.</p>
    </div>
  </div>
</div>
 </section>
 <!-- Tutup About -->

@endsection
