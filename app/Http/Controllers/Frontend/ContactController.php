<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display contact form.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('frontend.contact');
    }

    /**
     * Store a contact message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        Contact::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Pesan anda telah berhasil dikirim. Kami akan menghubungi anda segera.');
    }
}
