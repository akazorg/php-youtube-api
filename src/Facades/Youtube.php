<?php 

namespace TamTam\Youtube\Facades;

use Illuminate\Support\Facades\Facade;

class Youtube extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TamTam\Youtube\Youtube';
    }
}
