@extends('front.layout.master')

@section('title', 'Product Detail')

@section('body')
<div class="hero page-inner overlay" style="background-image: url('front/img/hero_bg_3.jpg');">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">5232 California AVE. 21BC</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item "><a href="./">Home</a></li>
                        <li class="breadcrumb-item "><a href="./product">Products</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">5232 California AVE. 21BC</li>
                    </ol>
                </nav>


            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        <img src="front/img/{{ $products->productImages[0]->path }}" alt="Image" class="img-fluid">
{{--                        @foreach($products->productImages as $productImage)--}}
{{--                        <img src="front/img/{{ $productImage->path }}" alt="Image" class="img-fluid">--}}
{{--                        <img src="front/img/product-2.jpg" alt="Image" class="img-fluid">--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">{{ $products->name }}</h2>
                <p class="meta">{{$products->author->name}}</p>
                <p class="text-black-50"> {{ $products->description }}</p>

                <div class="quantity qty-2">

                        <div class="pro-qty">
                            <span class="dec qtybtn"> - </span>
                            <input type="text" value="1" >  {{--  value="{{ $cart->qty }}" data-rowid="{{ $cart->rowId }}" --}}
                            <span class="inc qtybtn"> + </span>
                        </div>
                        <a href="./cart/add/{{ $products->id }}" class=" pd-cart">ADD TO CART</a>

                </div>

                <div class="d-block agent-box p-5">
                    <div class="img mb-4">
                        <img src="front/images/person_2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text">
                        <h3 class="mb-0">Alicia Huston</h3>
                        <div class="meta mb-3">Real Estate</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>
                        <ul class="list-unstyled social dark-hover d-flex">
                            <li class="me-1"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="me-1"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="me-1"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="me-1"><a href="#"><span class="icon-linkedin"></span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</div>


@endsection
