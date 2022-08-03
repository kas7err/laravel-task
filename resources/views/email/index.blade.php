<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Inquery</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="flex h-screen pt-10">
        <div class="m-auto">
           <div class="content" style="width: 75vh">
            <h1><span class="font-semibold">Name: </span>{{ $inquery['name'] }}</h1>
            <p><span class="font-semibold">Phone: </span>{{ $inquery['phone'] }}</p>
            <p><span class="font-semibold">Email: </span>{{ $inquery['email'] }}</p>
            <p><span class="font-semibold">Message: </span>{{ $inquery['message'] }}</p>

            <p class="py-3 text-2xl font-bold">Thank you!</p>
           </div>
        </div>
    </div>
</body>
</html>
