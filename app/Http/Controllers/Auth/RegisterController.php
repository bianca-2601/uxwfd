<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    // Redirect setelah registrasi sukses
    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Tampilkan halaman form registrasi
    public function showRegistrationForm()
    {
        return view('signup'); // sesuaikan nama dan path blade kamu
    }

    // Validasi data input registrasi
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:8', 'confirmed'],
        ]);
    }

    // Simpan data user baru ke database
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // Simpan user tanpa login otomatis
        $this->create($request->all());

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

}
