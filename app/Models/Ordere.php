<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;
use App\Observers\OrderObserver;
class Ordere extends BaseModel
{
    use HasFactory,Common;
    // use Common;
    // protected $table = 'my_flights';

    protected $fillable=['name','user_id'];

    // public $timestamps = false;

    // protected $connection = 'sqlite';




public static function boot()
{
    parent::boot();
    self::observe(OrderObserver::class);

}

   

    protected static function booted()
    {
        // static::created(function ($user) {
        //     // $user->name="Thakur";
        //     // $user->save();
        // });
        // static::deleted(function ($user) {
        //     // $user->name="Thakur";
        //     // $user->save();
        // });
    }

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }
   

    public function scopePopular($query)
    {
        return $query->whereId(1)->orWhere('id',5);
    }

    public function scopeCommon($q){
        return $q->whereId(1)->orWhere('id',5);
    }
  
    public function scopeActive($query)
    {
        return $query->orWhere('id', 3);
    }

    public function getFullNameAttribute(){
        return "$this->name - Nuware";
    }
    public function getContactAttribute(){
        return "$this->name - Nuware3";
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
