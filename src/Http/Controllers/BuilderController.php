<?php
namespace Edarkzero\CMSBuilder\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BuilderController extends BaseController
{
    public function index()
    {
        return view('edarkzero::make');
    }
}