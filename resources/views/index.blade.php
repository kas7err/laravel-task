@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold">Laravel task -<a class="font-normal text-md p-2 text-gray-500" href="/contact">Solution</a></h1>
<ul class="pl-5 pt-3 list-disc">
    <li>Setup a fresh Laravel application - latest version.</li>
    <li>Use Tailwind CSS as the CSS framework (recommended but not required).
        <ul class="pl-5 list-disc marker:text-gray-300 marker:p-4">
            <li>CDN version is fine.</li>
            <li>Bonus points if installed via NPM.</li>
        </ul>
    </li>
    <li>Create a new contact page at <span class="text-red-600 bg-gray-200" style="padding:1px 5px">/contact.</span></li>
    <li>Create a contact form on the page.</li>
    <li>The form should be built as a Vue component.</li>
    <li>The form should submit via ajax.</li>
    <li>The form should have the following fields:
        <ul class="pl-5 list-disc marker:text-gray-300 marker:p-4">
            <li>Name</li>
            <li>Email</li>
            <li>Phone</li>
            <li>Message</li>
        </ul>
    </li>
    <li>Implement proper server-side form validation, and display those errors client-side.
        <ul class="pl-5 list-disc marker:text-gray-300 marker:p-4">
            <li>All fields are required.</li>
            <li>Name and Email have a max length of 50 characters.</li>
            <li>Email must be a valid email.</li>
            <li>Message has a max length of 500 characters.</li>
        </ul>
    </li>
    <li>On a successful form submission:
        <ul class="pl-5 list-disc marker:text-gray-300 marker:p-4">
            <li>Save the form data to the database in an <span class="text-red-600 bg-gray-200" style="padding:1px 5px">inquiries</li>
            <li>Send an email notification to <span class="text-gray-500 underline">mail@example.com</span>. An actual email is not required. Feel free to use mailtrap.io or other
            to test.</li>
        </ul>
    </li>
    <li>Write a basic HTTP test to verifying (Optional - bonus points):
        <ul class="pl-5 list-disc marker:text-gray-300 marker:p-4">
            <li>The form validation works.</li>
            <li>That the value is being saved to the database.</li>
            <li>That the email notification was sent.</li>
        </ul>
    </li>
    <li>Provide the final codebase as a Git repository.</li>
</ul>
@endsection
