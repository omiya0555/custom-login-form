<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Custon-form</title>
</head>
<!-- header -->
@include('components.header')

<div class="mt-16"></div>

<!-- seach-form -->
@include('components.search-form')

<body style="min-width: 330px; background: rgb(160,217,219);background: linear-gradient(90deg, rgba(160,217,219,1) 0%, rgba(109,223,168,1) 50%, rgba(0,158,82,1) 100%);">
<a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>

<h1>custom login form</h1>
    <p></p>
</body>
</html>