<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Portfolio')</title>
  <!-- Tailwind CSS CDN (quick setup) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Material Symbols (Google Icons) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <script>
    tailwind.config = { theme: { extend: {} } }
  </script>
</head>
<body class="min-h-screen font-[Georgia,serif] bg-gradient-to-b from-[#FFF5F0] to-[#FFE8DD] text-[#4A2C2A]">
  @yield('content')
</body>
</html>
