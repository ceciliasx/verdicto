<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class LawyerAccessController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('lawyeraccess.only', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $validated = $request->validate([
            'license'   => 'nullable|mimes:pdf|max:2048',
            'portfolio' => 'nullable|mimes:pdf,doc,docx|max:4096',
            'education' => 'nullable|string',
            'domicile'  => 'nullable|string',
            'schedule'  => 'nullable|string',
        ]);

        // Store uploaded files
        if ($request->hasFile('license')) {
            $validated['license_path'] = $request->file('license')->store('licenses', 'public');
        }
        
        if ($request->hasFile('portfolio')) {
            $validated['portfolio_path'] = $request->file('portfolio')->store('portfolios', 'public');
        }

        // Update user profile with new info
        $user->update($validated);

        return redirect()->route('lawyer.edit')->with('success', 'Data berhasil diperbarui!');
    }
}