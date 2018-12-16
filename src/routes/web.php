<?php

$namespace = '\sturt\salary\controllers';

Route::group([
        'middleware' => ['web'],
        'namespace' => $namespace,
    ], function (){

        Route::any(config('sa.ROUTE_NAME').'/{file}','SAController@getTestImage');

});