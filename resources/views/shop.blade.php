<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SHOP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
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
            <a href="#" traget="_blank"><img class="icon-cart m-lft-sm " src = "/images/cart.png" ></a>
        </div>
    </div>
</div>
<div class="content">
    <div class="flex-container">
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
        <div>
            <a href="/item" traget="_blank" class="imgbg"><img src = "/images/nike_shoe.png" ></a>
            <a href="#" traget="_blank" class="link">
                <p>Nike Sportswear</p>
            </a>
            <a href="/item" traget="_blank" class="link">
                <p><strong>Air Max Traix 96</strong></p>
                <p> 
                    <span class="text-red">$98</span>
                    <span class="text-line-through">($120)</span>
                </p>
            </a>
        </div>
    </div>
</div>
                <div class="content">
                    @foreach ($contents["products"] as $product)
                        <p>({{ $loop->index }}) {{ $product['name'] }} - {{ $product['desc'] }}</p>
                        @if ($loop->first)
                            <span> - First item</span>
                        @endif
                    @endforeach
                </div>
            
    </body>
</html>
