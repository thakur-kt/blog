<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Actions\RenderBladeStringAction;
class ProductController extends Controller
{

    /** @var RenderBladeStringAction */

    private $render_blade_string;

    public function __construct(RenderBladeStringAction $render_blade_string)
    {
        $this->render_blade_string=$render_blade_string;
        
    }

    public function __invoke(?string $slug=null)
    {
        $slug=$slug ?? optional(\Route::current())->uri();
       
        $string='<h1> About Page {{$kt}} </h1>';
        // dd($string);
        $content= $this->render_blade_string->execute($string,['kt'=>"access data"]);
        // dd($content);
     return view('site',compact('content'));

    }
//     public function myView(Post $product=null){//Post::where('id',1)->first()

//         dd($product);
//         // return ['data'=>'new data'];
// $data=[
//     'data'=>"okk"
// ];
//      return view('admin.nav',compact('data'));
//     }

}
