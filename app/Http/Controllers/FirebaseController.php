<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //
    public function index()
    {
        $firebase = (new Factory) 
            ->withServiceAccount(__DIR__.'/laravel-firebase-demo-e3396-firebase-adminsdk-ca8w5-f1d3917c19.json')
            ->withDatabaseUri('https://laravel-firebase-demo-e3396-default-rtdb.firebaseio.com');
 
        $database = $firebase->createDatabase();
 
        $blog = $database->getReference('blog');
 
        echo '<pre>';
        print_r($blog->getvalue());
        echo '</pre>';
    }
}
