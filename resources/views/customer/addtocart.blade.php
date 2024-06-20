@if(session('cart'))
@foreach(session('cart') as $id=>$product )
@php
$sub_total = $product['price'] * $product['quantity'];
$total += $sub_total;
@endphp
           <div class="container">
               <h1 class="text">Cart</h1>
               <div class="item">
                   <div class="order-item">
                   <div class="product-image">
                       <img src="{{$product['image']}}" alt="order-photo" height="100px">
                   </div>
                   <div class="order-list">
                       <h4>{{$product['name']}}</h4>
                       <p>{{$product['price']}}</p>
                       <p>{{$product['size']}}</p>
                       <p>Quantity: 1 item</p>
                       <form action="{{route('change_qty', $id)}}" class="d-flex">
                        <button
                            type="submit"
                            value="down"
                            name="change_to"
                            class="btn btn-danger"
                        >
                            @if($product['quantity'] === 1) x @else - @endif
                        </button>
                        <input
                            type="number"
                            value="{{$product['quantity']}}"
                            disabled>
                        <button
                            type="submit"
                            value="up"
                            name="change_to"
                            class="btn btn-success"
                        >
                            +
                        </button>
                    </form>

               </div>
                  
           </div>
