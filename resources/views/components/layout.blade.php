<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>
<body class="bg-gray-100">
    <header class="py-6 bg-white ">
        <div class="container mx-auto max-w-5xl">Users</div>
    </header>
    <main class="container mx-auto max-w-5xl py-8">
        {{ $slot }}
    </main>
</body>
</html>
