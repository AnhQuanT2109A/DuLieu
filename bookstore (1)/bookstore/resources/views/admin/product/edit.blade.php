@extends('admin.layout.master')
@section('title','Edit Product')

@section('body')
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Product
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="admin/product/{{$product->id}}">
                        @csrf
                        @method('PUT')
                    <div class="position-relative row form-group">
                        <label for="product_category_id"
                               class="col-md-3 text-md-right col-form-label">Category</label>
                        <div class="col-md-9 col-xl-8">
                            <select required name="product_category_id" id="product_category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option
                                        value={{$category->id}}
                                        {{$product->product_category_id == $category->id ? 'selected' : ''}}
                                    >
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="name" id="name" placeholder="Name" type="text"
                                   class="form-control" value="{{$product->name}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                            <label for="price"
                                   class="col-md-3 text-md-right col-form-label">Price</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="price" id="price"
                                       placeholder="Price" type="text" class="form-control" value="{{$product->price}}">
                            </div>
                        </div>
                    <div class="position-relative row form-group">
                        <label for="qty" class="col-md-3 text-md-right col-form-label">Qty</label>
                        <div class="col-md-9 col-xl-8">
                            <input required name="qty" id="nxb" placeholder="Qty" type="text"
                                   class="form-control" value="{{$product->qty}}">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="description"
                               class="col-md-3 text-md-right col-form-label">Description</label>
                        <div class="col-md-9 col-xl-8">
                            <textarea class="form-control" name="description" id="description" placeholder="Description">
                                {!! $product->description !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="position-relative row form-group mb-1">
                        <div class="col-md-9 col-xl-8 offset-md-2">
                            <a href="./admin/product" class="border-0 btn btn-outline-danger mr-1">
                                                    <span class="btn-icon-wrapper pr-1 opacity-8">
                                                        <i class="fa fa-times fa-w-20"></i>
                                                    </span>
                                <span>Cancel</span>
                            </a>

                            <button type="submit"
                                    class="btn-shadow btn-hover-shine btn btn-primary">
                                                    <span class="btn-icon-wrapper pr-2 opacity-8">
                                                        <i class="fa fa-download fa-w-20"></i>
                                                    </span>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--Ck editer--}}
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection
