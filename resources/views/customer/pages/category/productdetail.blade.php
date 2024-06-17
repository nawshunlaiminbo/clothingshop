@extends('layouts.customerlayout')
@section('title','ProductDetails')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/pages/category/productdetail.css')}}">
@endsection
@section('content')


<div class="container">
    <div >
    <form action="{{route('CartAdd')}}" method="POST" class="sec1" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="photo">
            <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" width="100px" height="100px">
        </div>
        <div class="detail">
            <p class="title">{{$product->name}}</p>
            <p class="price">{{$product->price}} MMK</p>
            <p>Size: </p>
    
            <ul class="size">
                <li>
                  <input type="radio" id="small" name="size" value="S" id="S"/>
                  <label for="small">Small</label>
                </li>
                <li>
                    <input type="radio" id="medium" name="size" value="M" id="M"/>
                    <label for="medium">Medium</label>
                  </li>
                  <li>
                    <input type="radio" id="large" name="size" value="L" id="L"/>
                    <label for="large">Large</label>
                  </li>
            </ul>
            
            <p>{{$product->description}}</p>
            <input type="hidden" name="addToCart" value="{{true}}">
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
                    <p>{{$product->price}} MMK</p> 
                </div>
            </a>    
        @endforeach
           
        </div>
    </div>
</div>

@endsection

@section('js')
        <script src="asset('js/customer/pick_item.js')"></script>
        <script src="asset('js/customer/pick_size.js)"></script>
 @endsection