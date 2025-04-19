@extends('frontend.layout')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/id/1/1200/400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/1/1200/400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/1/1200/400" class="d-block w-100" alt="...">
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


<div class="flex">
    <div class="row">
    @foreach ($products as $item )
        <div class="col-md-4">
            <a href="{{ url('/productdetails') }}">
                <div class="card" style="width: 18rem; padding-top: 16px;">
                <img src="https://picsum.photos/500/500" class="card-img-top" alt="...">
                <div class="card-body">
                <h1 class="card-heading">{{ $item->name }}</h1>
                <p>{{ $item->details }}</p>
                </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection