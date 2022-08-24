<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Inquiry</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="flex h-screen pt-10">
        <div class="m-auto">
           <div class="content">
            <h1><span class="font-semibold">Name: </span>{{ $Inquiry['name'] }}</h1>
            <p><span class="font-semibold">Phone: </span>{{ $Inquiry['phone'] }}</p>
            <p><span class="font-semibold">Email: </span>{{ $Inquiry['email'] }}</p>
            <p><span class="font-semibold">Message: </span>{{ $Inquiry['message'] }}</p>

            <p class="py-3 text-2xl font-bold">Thank you!</p>
           </div>
        </div>
    </div>
</body>
</html>
