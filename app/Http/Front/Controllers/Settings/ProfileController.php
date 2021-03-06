<?php

namespace App\Http\Front\Controllers\Settings;

use App\Domain\User\Actions\UpdateUserAction;
use App\Http\Front\Requests\UpdateUserRequest;

class ProfileController
{
    public function edit()
    {
        $user = auth()->user();

        return view('front.settings.profile', compact('user'));
    }

    public function update(UpdateUserRequest $request, UpdateUserAction $updateUserAction)
    {
        $user = auth()->user();

        $updateUserAction->execute($user, $request->validated());

        flash()->message('Your profile has been updated!');

        return back();
    }
}
