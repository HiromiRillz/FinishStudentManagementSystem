<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function showMainPage(){
        $user = auth()->user();
        return view('MainPage', compact('user'));
    } 

    public function showRegister() {
        return view('auth.UserRegister');
    }

    public function showLogin() {
        return view('auth.Login');
    }

    public function register(Request $request) {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password'])
        ]);

        Auth::login($user);
        return redirect()->route('show.MainPage');
    }

    public function login(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

       if (Auth::attempt($validated)){
        $request->session()->regenerate();

        return redirect()->route('show.MainPage');
       }
       
       throw ValidationException::withMessages([
        'credentials' => 'Sorry incorrect credentials'
       ]);
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
    }

    public function editUser(User $user){
        return view('UserInfoEdit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
        ]);

        return redirect()->route('show.MainPage')->with('success', '更新に成功しました。');
    }

    public function confirmDelete(){
        session(['confirm_delete' => true]);
        return redirect()->back();
    }

    public function destroy(Request $request, User $user){
        if ($request->input('confirm') === 'yes') {

            $user->delete();
    
            session()->forget('confirm_delete');
            return redirect()->route('show.login')->with('success', '削除完了しました。');
        }
    
        if ($request->input('confirm') === 'no') {
            session()->forget('confirm_delete');
            return redirect()->back();
        }
    }
}