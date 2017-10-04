<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
	public function index(){
		$users = User::orderBy('id', 'ASC')->paginate(5);
		return view('admin.users.index')->with('users', $users);
	}

    public function create(){
    	return view('admin.users.create');
    }

    public function store(UserRequest $request){
    	$users = new User($request->all());
			$users->type = $request->type;
    	$users->password = bcrypt($request->password);
    	$users->save();

        Flash::success("Se ha registrado " . $users->name . " de forma exitosa");
    	return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->fill($request->all());
				$user->type = $request->type;
        $user->save();

        Flash::warning('El usuario ' . $user->name . ' ha sido editado con exito!');
        return redirect()->route('users.index');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        Flash::error('El usuario ' . $user->name . ' ha sido borrado de forma exitosa!');
        return redirect()->route('users.index');
    }
}
