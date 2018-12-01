@extends('layouts.master')
@section('content')
<div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Filter</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
  
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="img_container">
                    <img class="card-img-top" src="{{asset($product->photo)}}" alt="">
                  </div>
                </div>
                <div class="col-6">
                  <h3 class="card-title">{{$product->title}}</h3>
                  <h4>Price : ${{$product->price}}</h4>
                  <p class="card-text">
                    {{$product->description}}
                  </p>
                  <a class="btn btn-sm btn-success" href="{{route('order.index', $product->id)}}">Order Now</a>
                  
                </div>
              </div>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
@endsection