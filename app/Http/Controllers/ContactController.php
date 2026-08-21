<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30', 'regex:/^[0-9+()\-\.\s]+$/'],
            'comments' => ['required', 'string', 'min:10', 'max:5000'],
        ], [
            'comments.required' => 'Please tell us a little about your project.',
            'comments.min' => 'Please provide at least 10 characters about your project.',
            'phone.regex' => 'Please enter a valid phone number.',
        ]);

        try {
            Mail::to(config('mail.contact_to'))->send(new ContactEnquiry($validated));
        } catch (Throwable $exception) {
            report($exception);

            return back()->withInput()->with(
                'contact_error',
                'We could not send your message right now. Please try again shortly or email us directly.'
            );
        }

        return back()->with(
            'contact_success',
            'Thank you. Your message has been sent successfully, and our team will contact you soon.'
        );
    }
}
