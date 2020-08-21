@extends('layouts.layout')  

@section('content')

@include('header')

<div class="content">
    <h4>
        <a href="#" target="_blank" class="text-decoration-none">{{ $item["name"] }} - {{ $item["imageTitle"] }}</a>
    </h4>
    <a href="#" class="left-arrow"><img src="/images/arrow-left.png"/></a>
    <a href="#" class="right-arrow"><img src="/images/arrow-right.png"/></a>
    <div class="porduct">
        <div class="porduct-details">
            <img src="/images/shoe_details.png"/>
            <p class="font-12 m-tp-md flex-box flex-content-mid">
                <span class="text-black">size:</span>
                <a href="#" class="shoe-size m-lft-sm ">7</a>
                <a href="#" class="shoe-size m-lft-sm ">8</a>
                <a href="#" class="shoe-size m-lft-sm ">9</a>
                <a href="#" class="shoe-size m-lft-sm ">10</a>
                <a href="#" class="shoe-size m-lft-sm ">11</a>
            </p>
            <p class="font-12 m-tp-md flex-box flex-content-mid">
                <span>color:</span>
                <a href="#" class="shoe-color m-lft-sm "></a>
                <a href="#" class="shoe-color m-lft-sm bg-green"></a>
                <a href="#" class="shoe-color m-lft-sm bg-blue"></a>
                <span class="m-lft-sm">price:</span>
                <span class="text-red m-lft-sm"><strong>${{$item["discount"]}}</strong></span>
            </p>
        </div>
        <p class="font-12 m-tp-md"> 
            Push your gym session further in the Nike Wonmen in Season 9 Training shoe. Meash and synthetic upper in an athletic style training shoe.
        </p>
        <div class="m-b-md flex-box item-btn">
            <button type="button" class="btn">Add to Cart</button>
            <button type="button" class="btn">Buy Now</button>
        </div>
    </div>
</div>

@endsection
