<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Inquiry;

Route::get('/', function () {
    return view('index');
});

Route::get('/email-template', function () {
    return view('email.index', [
        'Inquiry' => [
            'name' => 'Jhon Dow',
            'phone' => '55533321',
            'email' => 'fakemail.abv.bg',
            'message' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|max:50',
        'phone' => 'required|numeric|digits_between:6,10',
        'email' => 'required|email|max:50',
        'message' => 'required|max:500',
    ]);
    Inquiry::create($request->all());
    return response()->json('success', 200);

    // $validated = Validator::make($request->all(), [
    //     'name' => 'required|max:50',
    //     'phone' => 'required',
    //     'email' => 'required|email',
    //     'message' => 'required|max:3',
    // ]);

    // if ($validated->fails()) {
    //     return response()->json($validated->errors(), 400);
    // }
    // dd($request->all());
});

