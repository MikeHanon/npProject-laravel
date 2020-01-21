<?php

namespace App\Http\View\Composers;


use App\Category;

use Illuminate\View\View;

class AppComposer {

    public $obj = [];

    public function __construct() {
        $data = [
            
            'categories' => Category::all(),
           
        ]; 

        $this->obj[] = $data; 
    }

    public function compose(View $view) {
        $view->with('obj', end($this->obj));
    }
}