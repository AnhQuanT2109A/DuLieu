@extends('admin.layout.master')
@section('title','Order')

@section('body')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Order
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="./admin/order/{{$order->id}}/edit" class="nav-link">
                                <span class="btn-icon-wrapper pr-2 opacity-8">
                                    <i class="fa fa-edit fa-w-20"></i>
                                </span>
                <span>Edit</span>
            </a>
        </li>
    </ul>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body display_data">

                    <div class="table-responsive">
                        <h2 class="text-center">Products list</h2>
                        <hr>
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Unit Price</th>
                                <th class="text-center">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderDetails as $item)
                                    <tr>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img style="height: 60px;"
                                                         data-toggle="tooltip" title="Image"
                                                         data-placement="bottom"
                                                         src="front/img/products/{{$item->product->productImages[0]->path}}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{$item->name}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{$item->qty}}
                                </td>
                                <td class="text-center">
                                    ${{$item->product->price}}
                                </td>
                                <td class="text-center">
                                    ${{$item->total}}
                                </td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>



                    <h2 class="text-center mt-5" id="data-address">Order info</h2>
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">
                            Full Name
                        </label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$order->first_name}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$order->email}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="phone" class="col-md-3 text-md-right col-form-label">Phone</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$order->phone}}</p>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="phone" class="col-md-3 text-md-right col-form-label">Country</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$order->country}}</p>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="phone" class="col-md-3 text-md-right col-form-label">City</label>
                        <div class="col-md-9 col-xl-8">
                            <p class="fill-city">{{$order->town_city}}</p>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="phone" class="col-md-3 text-md-right col-form-label">Street Address</label>
                        <div class="col-md-9 col-xl-8">
                            <p class="fill-district">{{$order->street_address}}</p>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="payment_type" class="col-md-3 text-md-right col-form-label">Payment Type</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$order->payment_type}}</p>
                        </div>
                    </div>


                    <div class="position-relative row form-group">
                        <label for="status" class="col-md-3 text-md-right col-form-label">Status</label>
                        <div class="col-md-9 col-xl-8">
                            <div class="badge badge-dark mt-2">
                                {{\App\Utilities\Constant::$order_status[$order->status]}}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
