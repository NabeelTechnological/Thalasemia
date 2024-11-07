<?php
namespace app\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function layout()
    {
        return view('views.home',[
            'title' => 'Home',
        ]);
    }
    public function donor()
    {
        return view('views.donor',[
            'title' => 'Donor',
        ]);
    }
    public function rangking()
    {
        return view('views.rangking',[
            'title' => 'Rangking',
        ]);
    }
    public function ulasan()
    {
        return view('views.ulasan',[
            'title' => 'Ulasan',
        ]);
    }
}