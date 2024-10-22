<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .bg-gray-100 {
            background-color: #f3f4f6;
        }

        .bg-gray-900 {
            background-color: #111827;
        }

        .text-gray-700 {
            color: #4b5563;
        }

        .text-gray-500 {
            color: #6b7280;
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .relative {
            position: relative;
        }

        .flex {
            display: flex;
        }

        .items-top {
            align-items: flex-start;
        }

        .justify-center {
            justify-content: center;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .pt-0 {
            padding-top: 0;
        }

        .max-w-6xl {
            max-width: 72rem;
        }

        .mx-auto {
            margin-right: auto;
            margin-left: auto;
        }

        .sm\:px-6 {
            padding-right: 1.5rem;
            padding-left: 1.5rem;
        }

        .lg\:px-8 {
            padding-right: 2rem;
            padding-left: 2rem;
        }

        .pt-8 {
            padding-top: 2rem;
        }

        .sm\:pt-0 {
            padding-top: 0;
        }

        .h-16 {
            height: 4rem;
        }

        .sm\:h-20 {
            height: 5rem;
        }

        .bg-white {
            background-color: #ffffff;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .shadow {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .sm\:rounded-lg {
            border-radius: 0.5rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .underline {
            text-decoration: underline;
        }

        .ml-4 {
            margin-left: 1rem;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                <!-- SVG content here -->
            </svg>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <!-- Content here -->
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <!-- Previous text content here -->
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 underline">Register</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
