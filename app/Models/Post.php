<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\PostObserver;
use App\Events\PostCreated;
use App\Traits\Common;
class Post extends Model
{

    use Common;
    // protected $dispatchesEvents = [
    //     'created'   => PostCreated::class
    // ];


// public static function boot()
// {
//     // parent::boot();
//     // self::observe(PostObserver::class);

// }
// public static function booted()
// {
//     static::creating(function ($model) {
//         $model->title =$model->title.'-nnnn';
//     });
// }

    use HasFactory;

    protected $fillable=['user_id','title','description'];
    

}
