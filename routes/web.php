<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // var_dump(Storage::disk('s3')->files('mattl'));

    // S3 code!!!

    // Storage::disk( 's3' )->put('/mattl/test-image.jpg', file_get_contents( '../test-image.jpg' )
    // );
    //......................

    // Retrieve folder from S3!

    foreach (Storage::disk( 's3' )->files('mattl') as $file)
        //Output Individual image from S3!
        echo '<img src="data:image/jpeg;base64,'.
        base64_encode( Storage::disk('s3')->get($file)).'">';
        
    //.......................

    //Delete file from S3!

    // Storage::disk( 's3' )->delete( '/mattl/test-image.jpg' );
    //.......................
    // Just the Homepage.
    return view('welcome');
});
