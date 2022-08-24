<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Http\Requests\StoreInquiry;

class InquiryController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create(StoreInquiry $request)
    {
        $validatedData = $request->validated();
        $newInquiry = Inquiry::create($validatedData);
        return response()->json($newInquiry, 200);
    }
}
