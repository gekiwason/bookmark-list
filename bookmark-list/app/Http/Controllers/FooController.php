<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FooController extends Controller
{
    public function foo1()
    {
        return 'foo1!';
    }

    public function foo2()
    {
        return view('foo.foo2', [
            'title' => 'Foo2',
            'body' => 'My first Laravel.'
        ]);
    }

    public function foo3()
    {
        $user = User::find(1);
        return view('foo.foo3', [
            'user' => $user
        ]);
    }
}
