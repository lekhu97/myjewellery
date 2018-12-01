@extends('layouts.master')
@section('content')
        <div class="container-fluid p-3 mb-2">
          <div class="row">

            <div class="col-lg-3">
			<h1 class="my-4">Categories</h1>
              <div class="list-group">
                @foreach($categories as $category)
                <a href="#" class="list-group-item">{{$category->title}}</a>
                @endforeach
              </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

              <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="{{asset('images/slider/1.jpg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('images/slider/2.jpg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('images/slider/3.jpg')}}" alt="Third slide">
                  </div>
                 
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

              <div class="row">

                @foreach($products as $product)

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                    <a href="{{route('landing.show',$product->id)}}"">
                      
                      <img class="card-img-top" src="{{$product->photo}}" alt="" height="184px" width="245px">
                     
                    </a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="{{route('landing.show',$product->id)}}"">{{$product->title}}</a>
                      </h4>
                      <h5>${{$product->price}}</h5>
                      <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                          <div class="col">
                              
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                          </div>
                          <div class="col">
                             <a href="{{route('landing.show',$product->id)}}"">
                                <button class="btn bg-success text-white border-0">View More</button>
                             </a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

            

              </div>
              <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

          </div>
          <!-- /.row -->

        </div>
@endsection