<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tailwind Landing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            indigo: {
              600: '#4f46e5'
            }
          }
        }
      }
    }
  </script>
</head>
<body class="bg-white dark:bg-gray-900 bg-cover bg-center" 
      style="background-image: url('https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/494817179_1744456026493518_780908941467251957_n.png?stp=dst-png_s2048x2048&_nc_cat=103&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeEJhQGmoRbC5sN5hOHSla5Jnm8y9uaBvuOebzL25oG-41PeHikgAhHyryWczzvqllrr7Kg0cDMGX18M1FfEtwb-&_nc_ohc=GfUDZzr41T0Q7kNvwHVADt6&_nc_oc=AdkKK5k347KdLLD9YTW8RjmGxFc0nZ4P2BgQsGa1mSKqSxeXJ04oG1suzpG-jSRbNA0&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD2gGaIAVYW_d2xJoQVaVO5qJq0Lfnre_NwINQMKYVLc5FBw&oe=686917CB');">

<header class="absolute inset-x-0 top-0 z-50 bg-white dark:bg-gray-900 bg-opacity-90 dark:bg-opacity-90 backdrop-blur-sm">
  <nav class="flex items-center justify-between px-6 py-4 lg:px-8">
    <!-- Left: Logo -->
    <div class="flex lg:flex-1 items-center">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Logo" />
      </a>
    </div>

    <!-- Center: Navigation Links -->
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Product</a>
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Features</a>
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Marketplace</a>
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Company</a>
    </div>

    <!-- Right: Buttons -->
    <div class="flex items-center gap-3 lg:flex lg:flex-1 lg:justify-end">
      <button id="dark-mode-toggle" aria-label="Toggle dark mode" class="text-2xl">
        🌙
      </button>
      <a href="login" class="text-white bg-cyan-600 hover:bg-cyan-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        Log in
      </a>
      <a href="register" class="text-white bg-cyan-600 hover:bg-cyan-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        Register
      </a>
      <!-- Mobile menu button -->
      <button type="button" class="mobile-menu-open lg:hidden p-2.5 rounded-md text-gray-700 dark:text-gray-300" aria-label="Open menu">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
  </nav>

  <!-- Mobile menu -->
  <div class="mobile-menu hidden fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-white dark:bg-gray-900 px-6 py-6 rounded-lg shadow-lg">
    <div class="flex items-center justify-between">
      <a href="#" class="-m-1.5 p-1.5">
        <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Logo" />
      </a>
      <button type="button" class="mobile-menu-close p-2.5 rounded-md text-gray-700 dark:text-gray-300" aria-label="Close menu">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Horizontal nav links for mobile -->
    <nav class="mt-6 flex justify-center gap-x-10">
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Product</a>
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Features</a>
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Marketplace</a>
      <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Company</a>
    </nav>

    <!-- Buttons aligned horizontally -->
    <div class="mt-6 flex justify-center gap-4">
      <a href="login" class="text-white bg-cyan-600 hover:bg-cyan-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        Log in
      </a>
      <a href="register" class="text-white bg-cyan-600 hover:bg-cyan-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        Register
      </a>
      <button id="dark-mode-toggle-mobile-menu" class="text-2xl self-center">
        🌙
      </button>
    </div>
  </div>
</header>

<main>
  <div class="relative isolate px-6 pt-40 lg:px-8">
    <div class="text-center max-w-2xl mx-auto py-16">
      <h1 class="text-5xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-7xl">
        Wear More, Waste Less.
      </h1>
      <p class="mt-6 text-lg text-gray-600 dark:text-gray-300">
        Anim aute id magna aliqua ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
      </p>
      <div class="mt-10 flex justify-center gap-4">
        <a href="#" class="bg-indigo-600 text-white px-4 py-2.5 rounded-md font-semibold hover:bg-indigo-500">Get started</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-gray-300">Learn more →</a>
      </div>
    </div>
  </div>
</main>

<script>
  document.querySelector('.mobile-menu-open').addEventListener('click', () => {
    document.querySelector('.mobile-menu').classList.remove('hidden');
  });
  document.querySelector('.mobile-menu-close').addEventListener('click', () => {
    document.querySelector('.mobile-menu').classList.add('hidden');
  });

  const toggleDarkMode = () => {
    document.documentElement.classList.toggle('dark');
    [darkModeToggleDesktop, darkModeToggleMobile, darkModeToggleMobileMenu].forEach(btn => {
      btn.textContent = document.documentElement.classList.contains('dark') ? '☀️' : '🌙';
    });
  };

  const darkModeToggleDesktop = document.getElementById('dark-mode-toggle');
  const darkModeToggleMobile = document.getElementById('dark-mode-toggle-mobile');
  const darkModeToggleMobileMenu = document.getElementById('dark-mode-toggle-mobile-menu');

  darkModeToggleDesktop.addEventListener('click', toggleDarkMode);
  darkModeToggleMobile?.addEventListener('click', toggleDarkMode);
  darkModeToggleMobileMenu.addEventListener('click', toggleDarkMode);
</script>
</body>
</html>
