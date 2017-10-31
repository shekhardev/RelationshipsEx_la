<?php

use App\Article;
use App\Book;
use App\DummyModel as DummyModel;
use App\Member;
use App\Quote;
use App\Todo;
use App\User as User;
use Faker\Factory;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/art',function (){
	$article = Article::all();
	return view('article')->with('article',$article);
});

Route::get('arti',function (){
	$faker = Faker\Factory::create();

	for($i=0;$i<10;$i++){
	$user = array('title' => $faker->sentence,'body' => $faker->paragraph);
	Article::create($user);
	}
});


Route::get('faker',function (){
	$faker = Faker\Factory::create();

	for($i=0;$i<10;$i++){
	$user = array('name' => $faker->name,'email' => $faker->email);
	DummyModel::create($user);
	}
});

Route::get('userF',function (){
	$faker = Faker\Factory::create();

	for($i=0;$i<10;$i++){
	$user = array('name' => $faker->name,'email' => $faker->email, 'password' => bcrypt('secret'),);
	User::create($user);
	}
});
Route::get('form', 'FormController@index');
Route::post('store', 'FormController@store');

Route::get('mem', function (){
	$user = Member::create([
    'first_name'  => 'mirza',
    'last_name'   => 'pasic',
    'email'       => 'mirza.pasic@bosnadev.com',
    'password'    => '!supersecretpassword!',
    'last_login'  => Carbon\Carbon::now(),
    	]);
});
Route::get('redis', function (){
	$app = Redis::connection();
	$app->set("key1","value");
	print_r($app->get("key1"));
});

Route::get('/arti/{id}','BlogController@showArticle')->where('id','[0-9]+');
Route::get('quote',function (){
	$faker = Faker\Factory::create();

	for($i=0;$i<10;$i++){
	$user = array('content' => $faker->text,);
	Quote::create($user);
	}
});

Route::get('todos','TodoController@getAllTodos');

Route::get('todo',function (){
	$faker = \Faker\Factory::create();

	for($i=0;$i<10;$i++){
	$todo = array('text' => $faker->text, 'completed' => $faker->boolean,);
	Todo::create($todo);
	}
});

Route::get('/phbook',function (){
	return view('phonebook');
});

Route::get('phbook/{name}',function (){
	return redirect('/phbook');
})->where('name','[A-Za-z]+');

Route::get('book',function (){
	$faker = \Faker\Factory::create();

	for($i=0;$i<10;$i++){
	$book = array('title' => $faker->title, 'text' => $faker->text, 'price' => 
		$faker->randomNumber(2),);
	Book::create($book);
	}
});
Route::get('egar',function (){
	$books = Book::all();
	//dd($books);
	foreach ($books as $book) {
	echo "<li>";	
  	echo $book->text;
  	echo $book->price;
  	echo "</li>";
  	   
	}
});