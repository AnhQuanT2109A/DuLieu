@extends('front.layout.master')

@section('title', 'List Product')

@section('body')
	<div class="hero page-inner overlay" style="background-image: url('front/img/hero_bg_1.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Products</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="./">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">Products</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

{{--	<div class="section">--}}
{{--		<div class="container">--}}
{{--			<div class="row mb-5 align-items-center">--}}
{{--				<div class="col-lg-6 text-center mx-auto">--}}
{{--					<h2 class="font-weight-bold text-primary heading">Featured Products</h2>--}}
{{--				</div>--}}

{{--			</div>--}}
{{--			<div class="row">--}}

{{--				<div class="col-12">--}}


{{--					<div class="property-slider-wrap">--}}



{{--						<div class="property-slider">--}}

{{--                            @foreach($products as $product)--}}
{{--                                <div class="property-item">--}}
{{--                                    --}}{{--them div co class box--}}
{{--                                    <div class="box">--}}
{{--                                        <a href="product/{{ $product->id }}" class="img">--}}
{{--                                            <img src="front/img/{{ $product->productImages[0]->path }}" alt="Image" class="img-fluid-2">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

{{--                                    <div class="property-content">--}}
{{--                                        <div class="property-price">--}}
{{--                                            <div class="price mb-2"><span>$1,291,000</span></div>--}}
{{--                                            <div class="price price-2 mb-2">$10,000</div>--}}
{{--                                        </div>--}}

{{--                                        <div>--}}
{{--                                            <span class="city d-block mb-3">{{ $product->name }}</span>--}}
{{--                                            <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>--}}

{{--                                            <a href="product/{{ $product->id }}" class="btn btn-primary py-2 px-3">See Details</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div> <!-- .item -->--}}
{{--                            @endforeach--}}

{{--						</div>--}}


{{--						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">--}}
{{--							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>--}}
{{--							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>--}}
{{--						</div>--}}

{{--					</div>--}}
{{--				</div>--}}

{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}

	<div class="section section-properties">
		<div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-sidebar">
                        <div class="filter-widget">
                            <h4 class="fw-title">Categories</h4>
                            <ul class="filter-catagories">
                                <li><a href="#">Comic</a></li>
                                <li><a href="#">Economy</a></li>
                                <li><a href="#">TextBook</a></li>
                            </ul>
                        </div>

                        <div class="filter-widget">
                            <h4 class="fw-title">Author</h4>
                            <div class="fw-brand-check">
                                <div class="bc-item">
                                    <label for="bc-calvin">
                                        Calvin Klein
                                        <input type="checkbox" id="bc-calvin">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-calvin2">
                                        Diesel
                                        <input type="checkbox" id="bc-calvin2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-calvin3">
                                        Polo
                                        <input type="checkbox" id="bc-calvin3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="bc-item">
                                    <label for="bc-calvin4">
                                        Tommy Hilfiger
                                        <input type="checkbox" id="bc-calvin4">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="filter-widget">
                            <h4 class="fw-title">Price</h4>

                            <div class="filter-range-wrap">
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="ninaount">
                                    </div>
                                </div>
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max ="98">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                            </div>
                            <a href="#" class="filter-btn">Filter</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <form action="">
                                <div class="select-option">
                                    <select name="show" class="p-show" onchange="this.form.submit()">
                                        <option {{ request('show') == '3'?'selected':'' }}  value="3">Show: 3</option>
                                        <option {{ request('show') == '6'?'selected':'' }}  value="6">Show: 6</option>
                                        <option {{ request('show') == '9'?'selected':'' }}  value="9">Show: 9</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="property-item mb-30">
                                    {{--them div co class box--}}
                                    <div class="box">
                                        <a href="product/{{ $product->id }}" class="img">
                                            <img src="front/img/products/{{ $product->productImages[0]->path }}" alt="Image" class="img-fluid-2">
                                        </a>
                                    </div>

                                    <div class="property-content">
                                        <div class="property-price">
                                            <div class="price mb-2"><span>${{$product->price}}</span></div>
                                            <div class="price price-2 mb-2">${{$product->discount}}</div>
                                        </div>

                                        <div>
                                            <span class="city d-block mb-3">{{ $product->name }}</span>
                                            <span class="d-block mb-2 text-black-50"> {{ $product->author->name }} </span>

                                            <div class="btn-pro">
                                                <a href="product/{{ $product->id }}" class="btn btn-primary py-2 px-3">See Details</a>
                                                <a href="cart/add/{{ $product->id }}" class="btn btn-primary py-2 px-3">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .item -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					Pagination (1 of 10)
				</div>
				<div class="col-lg-6 text-center">
					<div class="custom-pagination">
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
