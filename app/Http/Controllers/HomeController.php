<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Show user create form
     */
    public function create(): View
    {
        return view('createUser');
    }

    /**
     * Store user data with server-side validation
     */
    public function store(HomeRequest $request): RedirectResponse
    {
        // ✅ Validation already done by HomeRequest
        $validatedData = $request->validated();

        // ✅ Password hashing
        $validatedData['password'] = Hash::make($validatedData['password']);

        // ✅ Store data
        User::create($validatedData);

        return back()->with('success', 'User created successfully.');
    }
}
