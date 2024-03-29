<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Traits\Uploader;

class RegisteredUserController extends Controller
{
    use Uploader;
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = "Sign Up";
        return view('auth.register', compact('title'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'image-upload' => ['mimes:jpeg,jpg,png,jpg'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $name = $request->fname . $request->lname;

        $profile = $this->UploadFile($request->file('image-upload'), 'Profile', 'public', $name);

        $user = User::create([
            'profile_picture' => $profile,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'name' => $request->fname . ' ' . $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        $user->assignRole('registered');

        Auth::login($user);
        // return redirect(RouteServiceProvider::HOME);

        return redirect('/dashboard')->with('success', 'Registerd Sucessfully');
    }
}
