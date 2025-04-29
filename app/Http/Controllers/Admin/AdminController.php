<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\University;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Kullanıcı modelini ekleyin

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // resources/views/admin/login.blade.php dosyasını yükler
    }

    public function login(Request $request)
    {
        // 1. Validasyon
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Giriş denemesi
        if (Auth::attempt($credentials)) {
            // Giriş başarılıysa
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard'); // Yönlendirmek istediğiniz sayfa
        }

        // Giriş başarısızsa
        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler hatalı.',
            'password' => 'Girdiğiniz bilgiler hatalı.',
        ])->onlyInput('email');
    }

    public function showRegisterForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // veya admins tablosu
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Otomatik giriş yapmak isterseniz:
        Auth::login($user);

        return redirect()->route('admin.dashboard'); // veya istediğiniz route
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    // Ana sayfa
    public function showDashboard()
    {
        return view('admin.ecommerce'); // resources/views/admin/login.blade.php dosyasını yükler
    }

    /**
     * Helper method to safely encode HTML content
     */
    private function safeEncodeContent($content)
    {
        try {
            // HTML entity'leri decode et
            $decodedContent = html_entity_decode($content, ENT_QUOTES, 'UTF-8');
            // JSON olarak encode et
            return json_encode($decodedContent, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS);
        } catch (\Exception $e) {
            Log::error('Content encoding error: ' . $e->getMessage());
            return json_encode('');
        }
    }


    
}
