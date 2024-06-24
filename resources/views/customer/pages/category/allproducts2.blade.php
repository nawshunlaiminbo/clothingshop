@extends('layouts.customerlayout')
@section('title','Products')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/allproducts.css')}}">
@endsection
@section('content')

<div class="main">
    <div class="sec1">
        <div class="image">
        @if($productid == 1)
        <img src="{{asset('/image/customer/shirt-mockup-concept-with-plain-clothing (2) 1.png')}}" />
        <div class="title-main">Men Wear</div>
        @elseif($productid == 2)
        <img src="{{asset('/image/customer/shirt-mockup-concept-with-plain-clothing (2) 1.png')}}" />
        <div class="title-main"> Women Wear</div>
        @elseif($productid == 3)
        <img src="{{asset('/image/customer/shirt-mockup-concept-with-plain-clothing (2) 1.png')}}" />
        <div class="title-main">Accessories</div>
        @elseif($productid == null)
        <img src="{{asset('/image/customer/shirt-mockup-concept-with-plain-clothing (2) 1.png')}}" />
        <div class="title-main">All Products</div>
        @endif
        </div>
    </div>

    <div class="sec2">
            <div class="grid-item1">
                <div>
                    <a href="{{url('/customer/homepage')}}">Home</a>
                </div>
                
                <form action="{{route('CustomerProductFilter')}}" method="post" class="search">
                    @csrf
                    <input type="hidden" name="productid" value="{{$productid}}" />
                    <div class="search-bar-main">
                        {{-- <p>Search....</p> --}}
                        <input type="text" placeholder="Search..." name="search" id="search-bar">
                        <i class="fa-solid fa-magnifying-glass searchicon"></i>
                    </div>
                    <div class="sorting">
                        <div >
                            <p><span>Sort By:</span></p>
                        </div>
                        
                        <div class="sort-by">
                            <div>
                                
                                <select name="order" id="order" class="input">
                                <option value="asc"  >Price, Low Price to High</option>
                                <option value="desc" >Price, High Price to Low</option>
                            </select>
                            </div>
                        </div>
                        <div class="filter">
                            <div class="filter-col">
                                <button type="submit" >Filter</button>
                            </div>
                            <div class="reset-col">
                                <a href="" class="reset-btn" type="submit">Reset</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="grid-item2">
                @foreach($productlist as $products)
                <a href="{{url('/customer/product/details',$products->id)}}">
                <div class="product-list">
                    <div class="product-image">
                        <img src="{{asset('image/admin/products_info/'.$products->colorimage)}}" alt="photo of {{$products->name}}">
                    </div>
                    
                    <div>
                        <p class="productname">{{$products->name}}</p>
                        <p>{{$products->price}}</p>
                    </div>
                </div>
               @endforeach
            </div>
            
            {{-- <div class="grid-item3">
                <div class="product-list">
                    <div class="product-image">
                        <img src="">
                    </div>
                    
                    <div >
                        <p>Neck Solid T shirt</p>
                        <p>15000 MMK</p>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-image">
                        <img src="">
                    </div>
                    <div>
                        <p>V-neck Tee</p>
                        <p>15000 MMK</p>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-image">
                        <img src="">
                    </div>
                    <div>
                        <p>White T shirt</p>
                        <p>15000 MMK</p>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-image">
                        <img src="">
                    </div>
                    <div >
                        <p>The Bear Fashion</p>
                        <p>15000 MMK</p>
                    </div>
                </div>
            </div> --}}

            </div>  
    </div>
</div>
@endsection