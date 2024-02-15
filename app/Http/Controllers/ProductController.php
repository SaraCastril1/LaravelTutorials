<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"TV", "price"=>"1200", "description"=>"Best TV"],
        ["id"=>"2", "name"=>"iPhone", "price"=>"110", "description"=>"Best iPhone"],
        ["id"=>"3", "name"=>"Chromecast", "price"=>"50", "description"=>"Best Chromecast"],
        ["id"=>"4", "name"=>"Glasses", "price"=>"50", "description"=>"Best Glasses"]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;   
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View|RedirectResponse
    {
        if (!isset(ProductController::$products[$id - 1])) {
            return redirect()->route('home.index');
        }
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);
        
        ($request->all());
        //here will be the code to call the model and save it to the database
        return redirect()->route('product.validation');
    }

    public function validation(): View
    {
        $viewData = [];
        $viewData["title"] = "Valid product";
        $viewData["subtitle"] = "Product Created";

        return view('product.validation')->with("viewData",$viewData);
    }

}
