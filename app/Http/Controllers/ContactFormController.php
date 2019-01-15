<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Get form data.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required',
        ]);

        // ToDo: Add mailer functionality here.

        return response()->json(null, 200);
    }
}
