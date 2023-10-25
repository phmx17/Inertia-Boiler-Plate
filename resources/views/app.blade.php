<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @routes
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @inertiaHead
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
</head>
<body>
<section class="px-8" >
    @inertia
<!-- this is what @inertia does: -->
{{--    <div id="app" data-page="{{ json_encode($page) }}" ></div>--}}

</section>
</body>
</html>

