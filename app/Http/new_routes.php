<?php

// Route::get('/photo/{size}/{name}', function($size = NULL, $name = NULL){
//     if(!is_null($size) &amp;&amp; !is_null($name)){
//         $size = explode('x', $size);
//         $cache_image = Image::cache(function($image) use($size, $name){
//            return $image-&gt;make(url('/photos/'.$name))-&gt;resize($size[0], $size[1]);
//         }, 10); // cache for 10 minutes

//         return Response::make($cache_image, 200, ['Content-Type' =&gt; 'image']);
//     } else {
//         abort(404);
//     }
// });