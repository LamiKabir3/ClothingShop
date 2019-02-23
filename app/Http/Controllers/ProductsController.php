<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function index(){
        $categories = Category::with('Products')->orderBy('name', 'asc')->get();
        
        $products = Product::latest()->get(); 
        
            return view('welcome', compact("products", 'categories'));
       

    }

    public function category($id){
        $categories = Category::with('Products')->orderBy('name', 'asc')->get();
         var_dump($categories); die();
        $products = Product::latest()-where('category_id', $id)->get(); // im using an eloquant method. must include the model namespace in this file to use it.
        
            return view('welcome', compact("products", 'categories'));
       

    }


    public function store(ProductRequest $request){
        //dd($request);
        $formData = $request->all();

        $sidePic = $request->file('sidePic');
        $openingPic = $request->file('openingPic');
        $closingPic = $request->file('closingPic');

        $formData['sidePic'] = $sidePic->getClientOriginalName();
        $formData['openingPic'] = $openingPic->getClientOriginalName();
        $formData['closingPic'] = $closingPic->getClientOriginalName();

        Article::create($formData);

        if($sidePic != null){
            Storage::disk('local')->put($sidePic->getClientOriginalName(), File::get($sidePic));
            //$productsidePic = $sidePic
        }

        if($openingPic != null){
            Storage::disk('local')->put($openingPic->getClientOriginalName(), File::get($openingPic));
            //$productsidePic = $sidePic
        }

        if($closingPic != null){
            Storage::disk('local')->put($closingPic->getClientOriginalName(), File::get($closingPic));
            //$productsidePic = $sidePic
        }
    }

    public function show(Product $product){
        return view('welcome', compact($product));
    }
}
