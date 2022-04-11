@extends('layouts.main')

@section('container')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1200x400?" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400? " class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400?" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>Hello, Welcome to DITA Blog</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
@endsection
   