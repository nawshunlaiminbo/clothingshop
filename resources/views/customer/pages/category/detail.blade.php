@extends('layouts.customerlayout')
@section('title','ProductDetails')
@section('content')

    <div class="detail-container">
        <div class="inner-detail">
            <div class="detail-inner">
                <div class="detailinfo-col">
                    <div class="shopping_cart">
                        <div class="detail-row">
                            <div class="img-info">
                                {{-- {{dd("aavvvv")}} --}}
                                <img src="{{asset('image/admin/products_info/'.$product->colorimage)}}" alt="photo of {{$product->name}}" >
                            </div>
                            <div class="detail-text">
                              
                                <p class="title">{{$product->name}}</p>
                                <p class="price">{{$product->price}}</p>
                               
                                <div class="size_button">
                                    <p>Size: </p>
                                    <button class="S_button">S</button>
                                    <button class="M_button">M</button>
                                    <button class="L_button">L</button>
                                </div>
                               
                                    <div>
                                        <p class="reviewNumber">( 0 review )</p>
                                    </div>
                                    <p>
                                        {{$product->description}}
                                    </p>

                                 
                                        <form action="{{route('CartAdd',['id'=> $product->id])}}" method="POST">
                                            @csrf
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
                                        </form>
                                    
                                </div>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/customer/pick_item.js"></script>
    <script src="/js/customer/add_to_card.js"></script>
    <script src="/js/customer/pick_size.js"></script>
    <script src="/js/customer/hamburger_menu.js"></script>

    @endsection