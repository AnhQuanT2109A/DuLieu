<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\Cart;
use App\Models\Author;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentRepositoryInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
//    private $productService;
//    private $productCommentService;
//    public function __construct(ProductServiceInterface $productService,
//                                ProductCommentRepositoryInterface $productCommentService)
//    {
//        $this->productService = $productService;
//        $this->productCommentService = $productCommentService;
//    }

    //
    public function showDetail($id){
        $authors = Author::all();
        $categories = ProductCategory::all();
        $products = Product::findOrFail($id);

//        $product = $this->productService->find($id);
//        $carts = Cart::content();

        return view('front.shop.show', compact('products', 'authors', 'categories', ));
    }

    public function index(Request $request){
        $authors = Author::all();
        $categories = ProductCategory::all();

        $perPage = $request->show ?? 3;
        $search = $request->search ?? '';
        $products = Product::where('name', 'like', '%'. $search . '%')->get();

//        $products = $this->sortPagination($products, $perPage);

        return view('front.shop.index', compact('products', 'authors', 'categories'));
    }

    //ham xu ly sap xep sp
    public function sortPagination($products, $perPage){

        $products = $products->paginate($perPage);

        $products->appends(['show' => $perPage]);

        return $products;

    }

//    public function postComment(Request $request){
//        $this->productCommentService->create($request->all());
//
//        return redirect()->back();
//    }
}
