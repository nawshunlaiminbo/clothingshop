@extends('layouts.customerlayout')
@section('title','ProductDetails')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/pages/category/productdetail.css')}}">
@endsection
@section('content')

<div class="container">
    <div >
    <form action="" method="" class="sec1">
        <div class="photo">
            <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" width="100px" height="100px">
        </div>
        <div class="detail">
            <p class="title">{{$product->name}}</p>
            <p class="price">{{$product->price}}</p>
            <p>Size: </p>
    
            <ul class="size">
                <li>
                  <input type="radio" id="small" name="small_qty" value="{{$product->small_qty}}"/>
                  <label for="small">Small</label>
                </li>
                <li>
                    <input type="radio" id="medium" name="medium_qty" value="{{$product->medium_qty}}"/>
                    <label for="medium">Medium</label>
                  </li>
                  <li>
                    <input type="radio" id="large" name="large_qty" value="{{$product->large_qty}}"/>
                    <label for="large">Large</label>
                  </li>
            </ul>
            
            <p>{{$product->description}}</p>
            <button class="" type="submit">Add to cart</button>
        </div>
    </form>
    </div>

    <div class="sec2">
       <div class="title"><h2>You my also like</h2></div> 
        <div class="related-data">
            @foreach($relatedProducts as $product)
            <a href="{{url('/customer/product/details',$product->id)}}">
                <div class="item">
                    <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" width="80px" height="100px">
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}}</p> 
                </div>
            </a>    
        @endforeach
           
        </div>
    </div>
</div>

@endsection
