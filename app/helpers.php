<?php

if (!function_exists('upload_image')) {
    function upload_image($image)
    {
        
        $imageExt = $image->getClientOriginalExtension();
        $imageName = $image->getClientOriginalName() . "." . now() . "." . $imageExt;

        $image->move(public_path('images'), $imageName);

        return $imageName;
    }
}
