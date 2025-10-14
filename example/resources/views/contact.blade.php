<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
     <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <h1>This is Contact Page</h1>
</body>
</html> -->

<x-layout>
     <x-slot:heading>
        Contact Page
    </x-slot:heading>

     <h1>This is Contact Page</h1>
     <x-slot:footer>
        <p class="text-red-500">Footer</p>
    </x-slot:footer>
</x-layout>