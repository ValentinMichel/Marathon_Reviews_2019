<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Episode;
use App\Serie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function modifComp(){
        $user = User::findOrFail(Auth::user()->getAuthIdentifier());
        return view('users.index', ["user" => $user]);
    }

    public function upload(Request $request) {
        if ($request->hasFile('avatar')  && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $base = "avatar";
            $now = time();
            $nom = sprintf("%s_%d.%s",$base,$now,$file->extension());
            $file->storeAs("avatars", $nom);
            return 'storage/avatars/'.$nom;
        }
    }

    function update(Request $request){
        $user = User::findOrFail($request->id);
        $avatar = $this->upload($request);
        if($request->name != $user->name) $user->name = $request->name;
        if($request->email != $user->email) $user->email = $request->email;

        $user->password =Hash::make($request->password);

        if($user->avatar != null && $avatar != null) Storage::delete('avatars/'.$user->avatar);
        if($avatar != null) $user->avatar = $avatar;
        $user->save();
        return back();
    }
    public function stats(){
        $user = Auth::user();
        $seens = $user->seen()->get();
        $series = $user->seen()->get()->unique('serie_id');
        $comments = Comment::where('user_id', $user->id)->get();
        return view('users.stats', ['user'=>$user, 'seens' => $seens, 'comments' => $comments, 'series' => $series]);
    }
}
