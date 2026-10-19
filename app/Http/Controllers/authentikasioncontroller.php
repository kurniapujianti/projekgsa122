<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\User; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
 
class authentikasioncontroller extends Controller 
{ 
    // Menampilkan halaman login 
    public function login() 
    { 
        return view('login'); 
    } 
 
    // Memproses login menggunakan username dan password 
    public function loginProcess(Request $request) 
    { 
        $credentials = $request->validate([ 
            'name' => 'required', 
            'password' => 'required', 
        ]); 
 
        if (Auth::attempt($credentials, $request->filled('remember'))) { 
            $request->session()->regenerate(); 
 
            return redirect()->intended('/home'); 
        } 
 
        return back()->withErrors([ 
            'name' => 'Username atau password salah.', 
        ])->onlyInput('name'); 
    } 
 
    // Menampilkan halaman register 
    public function register() 
    { 
        return view('register'); 
    } 
 
    // Memproses register 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'name' => 'required|string|max:255|unique:users,name', 
            'password' => 'required|string|min:8|confirmed', 
        ]); 
 
        User::create([ 
            'name' => $request->name, 
            'password' => Hash::make($request->password), 
        ]); 
 
        return redirect('/login')->with( 
            'success', 
            'Registrasi berhasil! Silakan login.' 
        ); 
    } 
 
    // Halaman home 
    public function home() 
    { 
        return view('home'); 
    } 
 
    // Logout 
    public function logout(Request $request) 
    { 
        Auth::logout(); 
 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
 
        return redirect('/login')->with( 
            'success', 
            'Kamu sudah keluar.' 
        ); 
    } 
}