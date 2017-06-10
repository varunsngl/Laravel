<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{

	public function create()
	{
		return view('products.create');
	}


    public function save()
    {
    	$product = new Product;

    	$product->name = request('name');
    	$product->description = request('description');

    	$product->save();

    	return redirect('products');
    }
}
