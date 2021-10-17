<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\First;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
// Route::fallback(function(){
//     return response()->json([
//         'status'    => false,
//         'message'   => 'Page Not Found.......',
//     ], 404);
// });

Route::get('/kk', fn () =>view('admin.profile'));

Route::get('posts/{post}', function ($s) {
    return $s.'</br>';
})->middleware(['custom']);
// })->middleware(['after','terminate','first','second','third']);

Route::get('posts2/{post}', function ($s) {
    return $s.'</br>';
// })->middleware(['custom']);
})->middleware(['terminate','third','first','second']);
Route::middleware([First::class,'second'])->group(function () {
    Route::get('/m1', function () {
        echo "m1";
    });

    Route::get('/m2', function () {
        // Illuminate/Routing/UrlGenerator
        // dd(request()->getPathInfo(),request()->root());
        dd(url()->current());
        echo "m2";
    })->withoutMiddleware([First::class]);
});

Route::get('role/{slug}', function ($slug) {
    return $slug;
    // if (! file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
    //     return redirect('/');
    // }

    // $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

    // return view('post', ['post' => $post]);
})->middleware('after:editor');
Route::get('role-list/{slug}', function ($slug) {
    return $slug;
    // if (! file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
    //     return redirect('/');
    // }

    // $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

    // return view('post', ['post' => $post]);
})->middleware('after:kt3');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('order', 'OrdereController');
// Route::get('order','OrdereController@index');
// Route::get('order/{id}','OrdereController@show')->whereUuid('id');


//service contatiner
class Service
{
    public $value=10;
}

Route::get('/service', function (Service $service) {
    dd(get_class($service), $service->value);
});

Route::get('/pay', 'PayOrderController@store');

use Illuminate\Support\Facades\View;

//for blades

Route::get('/greet', function () {
    $data= ['name' => 'Kritika'];
    return view('greeting', ['name' => 'Kritika']);
    // return View::make('greeting', ['name' => 'Kritika']);

    //for nested view directory
    // return View::make('admin.profile', ['name' => 'Kritika']);

    // Creating The First Available View
//  return View::first(['greeting','admin.profile', 'greeting'], $data);

// Determining If A View Exists
// if (View::exists('emails.customer')) {
//    return 'exists';
// }else {
//     return "not exists";
// }



// As an alternative to passing a complete array of data to the view helper function,
//  you may use the with method to add individual pieces of data to the view
// return view('greeting')
//             ->with('name', 'Victoria')
//             ->with('occupation', 'Astronaut');

//Attaching A Composer To Multiple Views
// View::composer(
//     ['profile', 'dashboard'],
//     MultiComposer::class
// );

//The composer method also accepts the * character as a wildcard, allowing you to attach a composer to all views:
// View::composer('*', function ($view) {
//     //
// });
});

Route::get('/child', function () {
    return view('admin.child');

});
Route::get('/stack', function () {
    $obj= new \App\Models\Ordere();

    // return $obj->getClassInstance();
    return $obj->saveLogs();
        // return view('stack.s1');
    
    });
Route::resource('post','PostController');
  

Route::get('/product/{product}','ProductController');

    //FOR VUE SPA
    Route::get('/{any}', function () {
        return view('app');
    })->where('any', '.*');