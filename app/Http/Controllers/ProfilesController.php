<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'chats' => $user->chats()->withLikes()->paginate(10)
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if (auth()->user()->isNot($user)) {
            abort(404);
        }

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'gender' => ['in:male,female'],
            // 'birthday' => ['before:today'],
            'avatar' => ['image', 'dimensions:min_width=100, min_height=200'],
            'quote' => ['max:255'],
        ]);

        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->storeAs('avatars/' . $user->id, $filename, 'public');
            // $user->update([
            //     'avatar' => $filename,
            // ]);
            $attributes['avatar'] = $filename;

            // $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
