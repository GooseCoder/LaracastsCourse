<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        // Validate the form
        $form->persist();
        // Create and save the user
        session()->flash('message', 'Thanks so much for signing up!');

        return redirect()->home();
    }

}
