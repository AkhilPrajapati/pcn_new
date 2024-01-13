<?php

use Illuminate\Support\Str;

// flash helper functions
function flash_login()
{
    $data = array(
        'flash'=>'Login Successsfull',
        'alert-type'=>'success',
    );
    return $data;
}
function flash_registered()
{
    $data = array(
        'flash'=>'User Registered Successsfully',
        'alert-type'=>'success',
    );
    return $data;
}

function flash_deleted()
{
    $data = array(
        'flash'=>'Record Deleted Permanantly',
        'alert-type'=>'error',
    );
    return $data; 
}
function flash_added()
{
    $data = array(
        'flash'=>'Reord Added Successsfully',
        'alert-type'=>'success',
    );
    return $data; 
}
function flash_updated()
{
    $data = array(
        'flash'=>'Redord Updated Successsfully',
        'alert-type'=>'success',
    );
    return $data;
}
function flash_warning()
{
    $data = array(
        'flash'=>'Warning: Something went wrong',
        'alert-type'=>'warning',
    );
    return $data;
}
function flash_approved()
{
    $data = array(
        'flash'=>'Media Request Approved Successfully',
        'alert-type'=>'success',
    );
    return $data;
}
function flash_rejected()
{
    $data = array(
        'flash'=>'Media Request Rejected',
        'alert-type'=>'error',
    );
    return $data;
}

// image not found
function imageview($editor)
{
    return " alt=";
    
}

//Image uploader
function imagehelper($request, $object, $filename, $path)
{
    if($request->hasFile($filename))
        {
            $file = $request->file($filename);
            $newName = time().$filename.".".$file->getClientOriginalExtension();
            $file->move($path, $newName);
            $object->$filename = $newName;
        }
}


function trimhelper($request, $object)
{
    $new_domain = $request->domain;
    $new_domain = Str::lower($new_domain);
    $new_domain = Str::replace("www.", "", $new_domain);
    $new_domain = Str::replace(".", "", $new_domain);
    $new_domain = Str::replace("np", "", $new_domain);
    $new_domain = Str::replace("com", "", $new_domain);
    $new_domain = Str::replace("news", "", $new_domain);
    $new_domain = Str::replace("com", "", $new_domain);
    $new_domain = Str::replace(":", "", $new_domain);
    $new_domain = Str::replace("http", "", $new_domain);
    $new_domain = Str::replace("https", "", $new_domain);
    $new_domain = Str::replace("//", "", $new_domain);
    $new_domain = Str::replace("http:", "", $new_domain);
    $new_domain = Str::replace("https:", "", $new_domain);
    $new_domain = Str::replace("/", "", $new_domain);
    $new_domain = Str::replace("http:://", "", $new_domain);
    $new_domain = Str::replace("https:://", "", $new_domain);
    $new_domain = Str::replace(" ", "", $new_domain);
    
    $object->domain = $new_domain;
    return $new_domain;
}