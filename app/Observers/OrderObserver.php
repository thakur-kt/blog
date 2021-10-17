<?php

namespace App\Observers;

use App\Models\Ordere;

class OrderObserver
{
    /**
     * Handle the Ordere "created" event.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return void
     */
    public function created(Ordere $ordere)
    {
       dd($ordere);
       
    }

    /**
     * Handle the Ordere "updated" event.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return void
     */
    public function updated(Ordere $ordere)
    {
        //
    }

    /**
     * Handle the Ordere "deleted" event.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return void
     */
    public function deleted(Ordere $ordere)
    {
        //
    }

    /**
     * Handle the Ordere "restored" event.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return void
     */
    public function restored(Ordere $ordere)
    {
        //
    }

    /**
     * Handle the Ordere "force deleted" event.
     *
     * @param  \App\Models\Ordere  $ordere
     * @return void
     */
    public function forceDeleted(Ordere $ordere)
    {
        //
    }
}
