<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Ordere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Events\PostCreated;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
     /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->authorizeResource(Post::class, 'post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return 'post inddex';
    }
    public function helloo()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abc');
    //     Ordere::create([
    //         'name'=>"kt",
    //         'user_id'=>1
    //     ]);
    //     return 'saved';
    //    Post::create([
    //        'user_id'=>1,
    //        'title'=>'for events Post title',
    //        'description'=>'first Post description',
    //    ]);
    //    Post::create([
    //     'user_id'=>2,
    //     'title'=>'first Post title2',
    //     'description'=>'first Post description',
    // ]);
    // PostCreated::dispatch();

    // Muting Events
    // $user = User::withoutEvents(function () use () {
    //     User::findOrFail(1)->delete();
    
    //     return User::find(2);
    // });
   
   
    //Saving A Single Model Without Events

//     $user = User::findOrFail(1);

// $user->name = 'Victoria Faith';

// $user->saveQuietly();

//DB Transactions
// DB::transaction(function () {
// //     DB::update('update users set votes = 1');//deleting prodct

// //     DB::delete('delete from posts');//deleting categories
// // });
// },5);

// // Manual Transactions
// DB::beginTransaction();
// // You can rollback the transaction via the rollBack method:

// DB::rollBack();
// // Lastly, you can commit a transaction via the commit method:

// DB::commit();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // dd($post);
        // Gate::authorize('super-admin-task');
        // Gate::authorize('view', $post);
        // $this->authorize('super-admin-task');
    //    $this->authorize('view-my-post',$post);
        return 'show post';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
