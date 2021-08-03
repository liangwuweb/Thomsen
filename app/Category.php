<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function subcategory() {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function part() {
        return $this->hasOne('App\Part', 'category_id');
    }

    public function description() {
        return $this->hasOne('App\Description', 'category_id');
    }

    public function seal_kit() {
        return $this->hasOne('App\Seal_kit', 'category_id');
    }

    public function tech_info() {
        return $this->hasOne('App\Tech_info', 'category_id');
    }

    public function curve() {
        return $this->hasOne('App\Curve', 'category_id');
    }

    public function download() {
        return $this->hasOne('App\Download', 'category_id');
    }

    public function video() {
        return $this->hasOne('App\Video', 'category_id');
    }

    public function misc() {
        return $this->hasOne('App\Misc', 'category_id');
    }
}
