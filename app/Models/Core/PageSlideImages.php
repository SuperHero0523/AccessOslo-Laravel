<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class PageSlideImages extends Model
{
          /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'page_slide_images';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['page_id', 'path', 'is_sub_banner'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
