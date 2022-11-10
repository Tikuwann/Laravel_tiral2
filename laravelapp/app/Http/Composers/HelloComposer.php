<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{

    Public function compose(View $view)
    {
        $view->with('view_message', 'this view is "'
        .$view->getname() .'"!!');
    }

}
