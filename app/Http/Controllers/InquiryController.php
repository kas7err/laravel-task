<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|numeric|digits_between:6,10',
            'email' => 'required|email|max:50',
            'message' => 'required|max:500',
        ]);
        $newInquiry = Inquiry::create($validatedData);
        return response()->json($newInquiry, 200);
    }
}
