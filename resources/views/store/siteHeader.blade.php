<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Our Store</h1>
    <nav>
        <a href="{{ url('cart') }}">Site Cart</a>
        -
        <a href="{{ url('item') }}">One Item</a>
        -
        <a href="{{ url('shop') }}">Our Shop</a>
    </nav>
    <hr>