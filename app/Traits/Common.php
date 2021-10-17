<?php

namespace App\Traits;

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

trait Common
{

    // public function getClassInstance(){
    //     dd(get_class($this));
    // }

    public function saveLogs(){
if(get_class($this)==='App\Models\Ordere'){
    $this->name="new Log";
    $this->user_id=1;
    $this->save();

}


    }
}