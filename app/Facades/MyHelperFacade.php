<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class MyHelperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myhelper';
    }
}
