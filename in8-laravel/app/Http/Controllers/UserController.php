<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return [
            'status' => true,
            'users' => User::orderBy('birth')->get()
        ];
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = $data["user"];
        $validate = User::validate($user);
        if (!$validate->fails()) {
            $newUser = User::create([
                "name" => $user["name"],
                "email" => $user["email"],
                "birth" => $user["birth"],
                "phone" => $user["phone"],
            ]);
            return [
                'status' => true,
                'users' => User::orderBy('birth')->get(),
            ];
        } else {
            return [ 
                'status' => false,
                'erros' => $validate->errors()
            ];
        }
    }

    public function edit(int $id, Request $request)
    {
        $data = $request->all();
        $user = $data["user"];
        $userFind = User::find($id);

        if (!$userFind) {
            return [ 'status' => false ];
        }

        $validate = User::validate($user);
        if (!$validate->fails()) {
            $userFind["name"] = $user["name"];
            $userFind["email"] = $user["email"];
            $userFind["birth"] = $user["birth"];
            $userFind["phone"] = $user["phone"];
            $userFind->save();
            return [
                'status' => true,
                'users' => User::orderBy('birth')->get(),
            ];
        } else {
            return [ 
                'status' => false,
                'erros' => $validate->errors()
            ];
        }
    }

    public function delete(int $id)
    {
        $user = User::find($id);
        if($user) {
            $user->delete();
            return [
                'status' => true,
                'users' => User::orderBy('birth')->get(),
            ];
        } else {
            return [
                'status' => false,
                'erros' => [
                    'Nenhum usuário encontrado'
                ]
            ];
        }
    }
}
