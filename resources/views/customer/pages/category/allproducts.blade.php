@extends('layouts.customerlayout')
@section('title','Products')
@section('content')
   
    
    <div class="intro_session flex_row">
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
    <div class="filter">
        <div class="link">
            <a href="{{url('/customer/homepage')}}">Home</a>
            {{-- <a href="../men/tee.html">Tees</a> --}}
        </div>
        <form action="{{route('CustomerProductFilter')}}" method="post" class="flex_row">
            @csrf
            <input type="text" name="productid" value="{{$productid}}" />
            <div class="search">
                <input type="text" class="input" placeholder="Search..." name="search">
               <i class="fa-solid fa-magnifying-glass"></i>
               
            </div>
            <div class="sort_by flex_row">
                <div>
                    {{-- {{$order == 'asc' ? 'selected' :''}} {{$order == 'desc' ? 'selected' : ''}} --}}
                    <span>Sort By:</span>
                    <select name="order" id="order" class="input">
                    <option value="asc"  >Price, Low Price to High</option>
                    <option value="desc" >Price, High Price to Low</option>
                </select>
                </div>

                <div class="filter-col">
                    <div class="inner-fil-col">
                        <button class="filter_button" type="submit" >Filter</button>
                        {{-- {{dd($products)}} --}}
                    </div>
                   <div class="reset-col">
                  <a href="" class="reset_button" style="color:white" type="submit">Reset</a>
                   </div>
                </div>
                <!-- <img src=".././images/icons/icons8-sort-down-30.png" alt=""> -->
              
            </div>
            

        </form>
        
    </div>

  
    <div class="men_tee_list grid">
        
        @foreach($productlist as $products)
        <a href="{{url('/customer/product/details',$products->id)}}">
            <div>
    
            <img src="{{asset('image/admin/products_info/'.$products->colorimage)}}" alt="photo of {{$products->name}}" width="35px" height="35px">
            {{-- <img src="{{asset('image/admin/products_info/'.$productlist->colorimage)}}" alt="photo of {{$productlist->name}}" width="35px" height="35px"> --}}
            <p>{{$products->name}}</p>
            <p>{{$products->price}}</p>    
            </div>
        </a>
        @endforeach
      
    </div>

    
    <!-- script -->
    <script src="/js/add_to_card.js"></script>
    <script src="/js/hamburger_menu.js"></script>

@endsection