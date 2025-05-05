<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit');

    }// end of getChangeData

    public function update(ProfileRequest $request)
    {
        $requestData = $request->validated();

        if ($request->image) {
            $requestData['image'] = $request->image->hashName();
            $request->image->store('public/uploads');
        }

        auth()->user()->update($requestData);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.home');

    }// end of postChangeData

}//end of controller
