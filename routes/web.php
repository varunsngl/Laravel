<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'MyConteroller@about');

Route::get('login', 'MyConteroller@login');

Route::get('products', function () {


	//To fetch all the entries from table
	$products = Product::all();

	return view('products.index', compact('products'));
});

Route::get('products/{id}', function ($id) {

	//To fetch desired product
	$product = Product::find($id);

	return view('products.show', compact('product'));
});

Route::get('products-create', 'ProductsController@create');


Route::post('products', 'ProductsController@save');









/*class Students {

	static var $name;
	var $marks;

	public function getName()
	{
		return this->$name;
	}

	public static function setName($name)
	{
		this->$name = $name;
	}

	public function getMarks()
	{
		return this->$marks;
	}

	public function setMarks($marks)
	{
		this->$marks = $marks;
	}
}


Students s1;

s1->setName("Balwinder");
s1->setMarks(90);

s1->getName();
s1->getMarks();

Student::setName("Balwinder");*/