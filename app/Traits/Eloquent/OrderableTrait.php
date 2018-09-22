<?php
/**
 * Created by PhpStorm.
 * User: Kashif-01
 * Date: 23-Sep-18
 * Time: 1:29 AM
 */

namespace App\Traits\Eloquent;


trait OrderableTrait
{

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at','desc');
    }

}