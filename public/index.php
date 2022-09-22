<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));
if(!defined('CONSTANTS_DEFINED'))
{
    define('GMAPS_KEY','AIzaSyB7NbVetU5YcRlRUeaw_7Z21h8O8dFT-4A');
    define('CONSTANTS_DEFINED',true);
    define('PROPERTY_PRICE_BRACKET_LETTING',500);
    define('PROPERTY_PRICE_BRACKET_SALE',100000);
    
    define('SAGE_VENDOR_NAME','guardsrealestat');
    define('SAGE_FORM_INTEGRATION_PASSWORD','66cd3e6a05e66cf6');
    define('SAGE_INTEGRATION_KEY','UaX2J3m0TdZQN0wq87y0bV91gENqvowDACQyvdMJslfpegZ4yk');
    define('SAGE_INTEGRATION_PASSWORD','xjLqNV4gvIMepYKxi1j39rBqSo87VMCxTe3NWOERIJ3coUNfXIVMOQzA6eiVhd3Ll');
    /***
     *
     * Environment LIVE
    Vendor Name guardsrealestat
    Integration Key UaX2J3m0TdZQN0wq87y0bV91gENqvowDACQyvdMJslfpegZ4yk
    Integration Password xjLqNV4gvIMepYKxi1j39rBqSo87VMCxTe3NWOERIJ3coUNfXIVMOQzA6eiVhd3Ll
    Please store these credentials safely. If you lose them, you will need to generate a new set of credentials
     */
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
