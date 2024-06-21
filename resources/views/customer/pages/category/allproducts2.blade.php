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
        Men Wear
        @elseif($productid == 2)
        Women Wear
        @elseif($productid == 3)
        Accessories
        @elseif($productid == null)
        All Products
        @endif
        </div>
    </div>

    <div class="sec2">
            <div class="grid-item1">
                <div>
                    <p>Home</p>
                </div>
                
                <div class="search">
                    <div class="search-bar">
                        <p>Search....</p>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="sorting">
                        <div class="sort-by">
                            <div>
                                <span>Sort By:</span>
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
                </div>
            </div>
            <div class="grid-item2">
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
            </div>
            <div class="grid-item3">
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
            </div>

            </div>  
    </div>
</div>
@endsection