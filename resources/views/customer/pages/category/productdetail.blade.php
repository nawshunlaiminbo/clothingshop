@extends('layouts.customerlayout')
@section('title','ProductDetails')
@section('css')
<link rel="stylesheet" href="{{asset('css/customer/pages/detail.css')}}">
@endsection
@section('content')


<div class="detail-container">
    <div class="inner-detail">
        <div class="detail-inner">
            <form action="{{route('CartAdd',['id'=> $product->id])}}" method="POST">
                @csrf
                <div class="detailinfo-col">
                    <div class="shopping_cart">
                        <div class="detail-row">
                            <div class="img-info">
                                {{-- {{dd("aavvvv")}} --}}
                                <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" class="detail-img">
                            </div>
                            <div class="detail-text">
                            
                                <p class="title">{{$product->name}}</p>
                                <p class="price">{{$product->price}}</p>
                            
                                <div class="size_button">
                                    <p>Size: </p>
                                    <ul class="size">
                                        <li>
                                        <input type="radio" id="small" name="size" value="S" id="S" class="rad-btn"/>
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
                                    
                                </div>
                            
                                    <div>
                                        <p class="reviewNumber">( 0 review )</p>
                                    </div>
                                    <p>
                                        {{$product->description}}
                                    </p>

                                
                                            <div class="add_to_cart">
                                                <div class="input-col">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                            
                                                    <button class="button2 pick_item" type="submit">Add to cart</button>
                                                </div>

                                                <div class="imagecol">
                                                    <img src="/image/customer/delivery-truck_2769339.png" alt="" style="width: 40px; height: 40px;">
                                                </div>
                                        
                                                <div class="de-col">
                                                    <p class="free_deli">Free delivery on orders over 5lakhs.</p>
                                                </div>
                                            </div>
                                    
                                    
                                </div>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
             </form>
            {{-- <div class="section2">
                <div class="title"><h2>You may also like</h2></div> 
                 <div class="related-data">
                    <div class="product-list">
                        @foreach($relatedProducts as $product)
                        <div class="item">
                        <a href="{{url('/customer/product/details',$product->id)}}">
                           
                                <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" width="80px" height="100px">
                                <p>{{$product->name}}</p>
                                <p>{{$product->price}} MMK</p> 
                           
                        </a>    
                    </div>
                    @endforeach
                    </div>    
                    
                 </div>
             </div>
         </div> --}}

         {{--New--}}
        <div class="sec2">
         <div class="grid-item2">
            @foreach($relatedProducts as $product)
            <div class="product-list">
                <a href="{{url('/customer/product/details',$product->id)}}">
                <div class="product-image">
                    <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" class="related-image">
                </div>
                
                <div >
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}} MMK</p> 
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div>


@endsection

@section('js')
        <script src="asset('js/customer/pick_item.js')"></script>
        <script src="asset('js/customer/pick_size.js)"></script>
 @endsection