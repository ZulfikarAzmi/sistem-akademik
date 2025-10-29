<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate(); // ini cuma bisa dipanggil dari LoginRequest, bukan Request biasa
    $request->session()->regenerate();

    // Redirect berdasarkan role
    $user = Auth::user();
    switch ($user->role) {
        case 'admin':
            return redirect()->route('dashboard.admin');
        case 'dosen':
            return redirect()->route('dashboard.dosen');
        case 'mahasiswa':
            return redirect()->route('dashboard.mahasiswa');
        default:
            Auth::logout();
            return redirect('/')->with('error', 'Role tidak dikenal.');
    }
}





    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
