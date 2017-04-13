<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function manage($id)
    {
        $user = User::find($id);

        return view('pages.manage', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $update = User::find($id);

        $user = request(['name', 'streetname', 'streetnumber', 'phonenumber', 'zipcode', 'abode', 'email', 'password', ]);
        $update->name = $user['name'];
        $update->streetname = $user['streetname'];
        $update->streetnumber = $user['streetnumber'];
        $update->phonenumber = $user['phonenumber'];
        $update->zipcode = $user['zipcode'];
        $update->abode = $user['abode'];
        $update->email = $user['email'];
        if($user['password'] !== '') {
            $update->password = bcrypt($user['password']);
        }
        flash('gegevens zijn opgeslagen', 'success');
        $update->save();
        return redirect('/');
    }
}
