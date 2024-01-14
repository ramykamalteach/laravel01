<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/siteStyles.css') }}">

    <style>
        .active {
            background-color: magenta;
        }
    </style>

</head>
<body>
    <div>
        <h1>
            Company Name 
            <img src="{{ asset('img/logo2.png') }}" alt="">
        </h1>
    </div>
    <h1>Products Page</h1>
    <hr>
    @php
        $str = "Our \n Shop";
    @endphp

    {{ $str }}

    @foreach ($allProducts as $oneProduct)
        @include('products.oneProductView', $oneProduct)
    @endforeach

    <hr>


    <table with="55%" border align="center">
        <tr>
            <th>Product name</th><th>Product description</th><th>Product price</th>
        </tr>
        @foreach ($allProducts as $oneProduct)
            <tr>
                <th>
                    {{ $oneProduct->productName }}
                </th>
                <th>
                    {{ $oneProduct->productDescription }}
                </th>
                <th>
                    {{ $oneProduct->price }}
                </th>
            </tr>
            
        @endforeach
    </table>

    {{-- -------------------------------------------------------------------- --}}

    <br><br><hr><br><br>

    <table with="55%" border align="center">
        <tr>
            <th>Product name</th><th>Product description</th><th>Product price</th>
        </tr>
        @foreach ($allProducts as $oneProduct)
            @if ($oneProduct->price >= 100)
                <tr style="background-color: red;">
            @else
                <tr style="background-color: green;">
            @endif
                <th>
                    {{ $oneProduct->productName }}
                </th>
                <th>
                    {{ $oneProduct->productDescription }}
                </th>
                <th>
                    {{ $oneProduct->price }}
                </th>
            </tr>            
        @endforeach
    </table>

    <hr>

    <table with="55%" border align="center">
        <tr>
            <th>Product name</th><th>Product description</th><th>Product price</th>
        </tr>
        @foreach ($allProducts as $oneProduct)
            
            {{-- <tr style="background-color: green;">  --}}
                
            <tr style="background-color: {{ $oneProduct->price >= 100 ? 'pink' : 'cyan' }};">
                <th>
                    {{ $oneProduct->productName }}
                </th>
                <th>
                    {{ $oneProduct->productDescription }}
                </th>
                <th>
                    {{ $oneProduct->price }}
                </th>
            </tr>            
        @endforeach
    </table>

    <hr>

    <table with="55%" border align="center">
        <tr>
            <th>Product name</th><th>Product description</th><th>Product price</th>
        </tr>
        @foreach ($allProducts as $oneProduct)
            
            {{-- <tr style="background-color: green;">  --}}
                
            <tr class="{{ $oneProduct->price >= 100 ? 'active' : ''}}">
                <th>
                    {{ $oneProduct->productName }}
                </th>
                <th>
                    {{ $oneProduct->productDescription }}
                </th>
                <th>
                    {{ $oneProduct->price }}
                </th>
            </tr>            
        @endforeach
    </table>

    <hr>

    <table with="55%" border align="center">
        <tr>
            <th>no. </th><th>Product name</th><th>Product description</th><th>Product price</th>
        </tr>
        
        @php
            $i = 1;    
        @endphp

        @foreach ($allProducts as $oneProduct)
            
            {{-- <tr style="background-color: green;">  --}}
                
            <tr class="{{ $oneProduct->price >= 100 ? 'active' : ''}}">
                <th>
                    {{ $i++ }}
                </th>
                <th>
                    {{ $oneProduct->productName }}
                </th>
                <th>
                    {{ $oneProduct->productDescription }}
                </th>
                <th>
                    {{ $oneProduct->price }}
                </th>
            </tr>            
        @endforeach
    </table>
    

</body>
</html>