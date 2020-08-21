@extends('layouts.layout')  

@section('content')
<div class="banner">
    <div class="row">
        <div class="col-4 m-tp-md">
            <a href="#" traget="_blank" class="logo">{{ $contents["title"] }}</a>
        </div>
        <div class="col-4 m-tp-md">
            <div class="search-bar">
                <input type="text" class="search-input">
                <input type="button" class="serach-btn">
            </div>
        </div>
        <div class="btn-groups col-4 m-tp-md">
            <a href="#" traget="_blank"><img class="icon-login" src = "/images/login.png" ></a>
            <a href="#" traget="_blank"><img class="icon-cart m-lft-sm" src = "/images/cart.png" ></a>
        </div>
    </div>
</div>
<div class="content">
    <div class="flex-container">
        @foreach ($contents["products"] as $product)
            <div>
                <a href="/item" traget="_blank" class="imgbg"><img src = "/images/{{ $product['imageTitle'] }}.png" ></a>
                <a href="#" traget="_blank" class="link">
                    <p>{{ $product["name"] }}</p>
                </a>
                <a href="/item" traget="_blank" class="link">
                    <p><strong>{{ $product["desc"] }}</strong></p>
                    <p> 
                        @if ($product["price"] > $product["discount"])
                            <span class="text-red">${{ $product["discount"] }}</span>
                            <span class="text-line-through">(${{ $product["price"] }})</span>
                        @else
                            <span class="text-red">${{ $product["price"] }}</span>
                        @endif
                        
                    </p>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

