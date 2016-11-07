<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Category;
class MainComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', Category::all());
    }

}