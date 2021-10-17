<?php

namespace App\Http\Controllers;

use App\Models\Ordere;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Str;
use App\Http\Requests\StoreOrder;
use JavaScript;
use Illuminate\Support\Facades\View;

class OrdereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return (string) Str::uuid();
// return ['data'=>Ordere::get()->load('user')];
// return ['data'=>Ordere::with('user:id,email')->get()];
// return ['data'=>Ordere::get()->load('user:id')];
        // return ['data'=>Ordere::popular()->active()->get()];
        // return ['data'=>Ordere::common()->get()];
        // return ['data'=> OrderResource::collection(Ordere::all())];
        
//         Ordere::chunk(200, function ($flights) {
//     foreach ($flights as $flight) {
//         //
//     }
// });

  $orders= $this->getOrders();
        //  $orders=Ordere::get()->load(['user'=>fn($q)=>$q->where('id',1)]);
        //  return $orders;
        JavaScript::put([
            'foo' => 'bar',
            'user' => \App\Models\User::first(),
            'age' => 29
        ]);
    
        //  return view('order.index',compact('orders'));
        $html="<script>alert('okk')</script>";
         return View::make('order.index',compact('orders','html'));
    }

    protected function getOrders(){
        $orders=Ordere::all();
        //   $orders=Ordere::get()->load('user');
            //  return $orders=Ordere::with('user:id,email')->get();
        if(request()->has('userkey')){
            $orders->load('user');
        }

            return $orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ordere::create([
        //     'name'=>'fisrt',
        //     'user_id'=>auth()->user()->id
        // ]);

        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrder $request)
    {
        // $request->validate([
        //     'name'=>'required'
        // ]);
        Ordere::create([
            'name'=>$request->name,
            'user_id'=>1//auth()->user()->id
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordere  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Ordere $order)//...
    {
        return $order->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordere $ordere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordere  $ordere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordere $ordere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordere $ordere)
    {
        //
    }
}
