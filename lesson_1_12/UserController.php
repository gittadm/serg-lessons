<?php

namespace lesson_1_12;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminUserResource;
use App\Http\Resources\ManagerUserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = User::find(23);

        $token = $user->createToken('api_token');

        return ['token' => $token->plainTextToken];
    }

    /**
     * @param Request $request
     * @return User|\Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function store(Request $request)
    {
        //$user = User::create($request->all());

        $user = Auth::user();

        return $user;
//        $user = User::find(23);
//
//        return ManagerUserResource::make($user);
    }

    public function storeAdmin(Request $request)
    {
        //$user = User::create($request->all());

        $user = User::find(23);

        return AdminUserResource::make($user);
    }
}
