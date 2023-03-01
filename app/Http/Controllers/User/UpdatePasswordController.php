<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('auth.passwords.edit');
    }

    public function update(UpdatePasswordRequest $request)
    {
        auth()->user()->update($request->validated());

        return redirect()
        ->route('user.password.edit')
        ->with('message', __('Password update sucessfully'));
    }
}
