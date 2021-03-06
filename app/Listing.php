<?php

namespace App;

use App\Traits\Eloquent\OrderableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes,OrderableTrait;

    protected $fillable = ['title','body'];



    public function scopeIsLive($query){
        return $query->where('live',true);
    }


    public function scopeIsNotLive($query){
        return $query->where('live',false);
    }

    public function cost(){
        return $this->category->price;
    }

    public function scopeFromCategory($query,Category $category){
        return $query->where('category_id',$category->id);
    }

    public function scopeAreaIn($query,Area $area){
        return $query->whereIn('area_id',array_merge(
            [$area->id],
            $area->decendants->pluck('id')->toArray()
        ));
    }

    public function live(){
        return $this->live;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function area(){
        return $this->belongsTo(Area::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }


}
