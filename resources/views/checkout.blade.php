@extends('layouts.layout')  

@section('content')

@include('header')

<div class="content">
    <h4>
        Shopping Cart
    </h4>
    <div class="checkout-container">
        <div class="flex-box justify-space bottom-line">
            <a href="#" class="text-blue link-btn">Delete all items</a>
            <span>Price</span>
        </div>
        <ul>
            <li class="bottom-line row">
                <div class="col-3">
                    <img src="/images/shoe_details.png"/>
                </div>
                <div class="col-6">
                    <dl class="m-lft-lg">
                        <dt><strong>White Sport Shoes - Nike</strong></dt>
                        <dd>size: 8 </dd>
                        <dd class="flex-box">color: <div class="shoe-select-color bg-blue m-tp-sm m-lft-sm"></div></dd>
                        <dd>Sold by Favour shoes and delivered by <a href="#" class="text-blue link-btn">EMS</a></dd>
                        <dd>
                            Qty: 
                            <select name="qty" id="qty">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            | <a href="#" class="text-blue link-btn">Delete</a> | <a href="#" class="text-blue link-btn">Save for later</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-3 text-align-r">
                    <strong>CDN $ 120.50</strong>
                </div>
            </li>
            <li class="bottom-line row">
                <div class="col-3">
                    <img src="/images/shoe_details.png"/>
                </div>
                <div class="col-6">
                    <dl class="m-lft-lg">
                        <dt><strong>White Sport Shoes - Nike</strong></dt>
                        <dd>size: 8 </dd>
                        <dd class="flex-box">color: <div class="shoe-select-color bg-blue m-tp-sm m-lft-sm"></div></dd>
                        <dd>Sold by Favour shoes and delivered by <a href="#" class="text-blue link-btn">EMS</a></dd>
                        <dd>
                            Qty: 
                            <select name="qty" id="qty">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            | <a href="#" class="text-blue link-btn">Delete</a> | <a href="#" class="text-blue link-btn">Save for later</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-3 text-align-r">
                    <strong>CDN $ 120.50</strong>
                </div>
            </li>            
            <li class="bottom-line row">
                <div class="col-3">
                    <img src="/images/shoe_details.png"/>
                </div>
                <div class="col-6">
                    <dl class="m-lft-lg">
                        <dt><strong>White Sport Shoes - Nike</strong></dt>
                        <dd>size: 8 </dd>
                        <dd class="flex-box">color: <div class="shoe-select-color bg-blue m-tp-sm m-lft-sm"></div></dd>
                        <dd>Sold by Favour shoes and delivered by <a href="#" class="text-blue link-btn">EMS</a></dd>
                        <dd>
                            Qty: 
                            <select name="qty" id="qty">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            | <a href="#" class="text-blue link-btn">Delete</a> | <a href="#" class="text-blue link-btn">Save for later</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-3 text-align-r">
                    <strong>CDN $ 120.50</strong>
                </div>
            </li>        </ul>
        <div class="text-align-r">
            <p>SubTotal( <span class="text-blue"><strong>3</strong></span> items): <strong>CDN$ 350.75</strong></p>
            <button type="button" class="btn wid-200">Proceed to Checkout </button>
        </div>
    </div>
</div>

@endsection