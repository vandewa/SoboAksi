<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Utilities\MyResponse type(string $type)
 * @method static \App\Utilities\MyResponse info(string $info)
 * @method static \App\Utilities\MyResponse data(string $data)
 * @method static string response()
 */
class MyResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Utilities\Response::class;
    }
}