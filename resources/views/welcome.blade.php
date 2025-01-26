<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel with DaisyUI Dark Theme</title>
    @vite('resources/css/app.css')
</head>
<body>
    @livewire('header')


<hr>
@livewire('hero')
@livewire('footer')

    @vite('resources/js/app.js')
</body>
</html>
