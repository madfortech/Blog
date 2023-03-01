<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   
        return view('user.profile.edit');
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        $user->update($request->validated());


        return redirect()
        ->route('user.profile.edit')
        ->with('message', __('update profile successfully'));
    }

   
    
    public function destroy()
    {
        $user = auth()->user();

        $user->update([
            'email' => time() . '_' . $user->email,
        ]);

        $user->delete();
        return redirect()
        ->route('login')
        ->with('message', __('Delete account successfully'));
    }
}
