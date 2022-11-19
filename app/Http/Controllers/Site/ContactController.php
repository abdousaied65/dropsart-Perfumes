<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send_message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 0
        ]);
        return redirect()->back()->with('success','تم ارسال رسالتك بنجاح');
    }
}
