<?php

namespace App\View\Composers;

  use  \Illuminate\View\View;

use App\Models\Ordere;

class ProfileComposer
{
    public function compose(View $view)
    {
     
      // $view->with('count',Ordere::count());
      $view->with('data',[
        'user'=>auth()->user(),
        'order'=> Ordere::all(),
        'authenticated'=>auth()->check()
      ]);
}
}