<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cmsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:posts|max:300',
            'body' => 'required',
        ]);

    }
}
