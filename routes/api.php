  <?php
use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->group(['middleware' => 'auth.jwt'], function ($api) {
        $api->DELETE('logout', 'App\Http\Controllers\AuthController@logout');
        $api->GET('me', 'App\Http\Controllers\AuthController@show');
    });
    $api->POST('register', 'App\Http\Controllers\AuthController@register');
    $api->POST('login', 'App\Http\Controllers\AuthController@login');
});