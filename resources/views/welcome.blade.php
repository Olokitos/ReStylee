<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tailwind Landing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class', // enable dark mode via 'class'
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
<body class="bg-white dark:bg-gray-900 bg-[url('https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/494817179_1744456026493518_780908941467251957_n.png?stp=dst-png_s2048x2048&_nc_cat=103&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeEJhQGmoRbC5sN5hOHSla5Jnm8y9uaBvuOebzL25oG-41PeHikgAhHyryWczzvqllrr7Kg0cDMGX18M1FfEtwb-&_nc_ohc=GfUDZzr41T0Q7kNvwHVADt6&_nc_oc=AdkKK5k347KdLLD9YTW8RjmGxFc0nZ4P2BgQsGa1mSKqSxeXJ04oG1suzpG-jSRbNA0&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&oh=03_Q7cD2gGaIAVYW_d2xJoQVaVO5qJq0Lfnre_NwINQMKYVLc5FBw&oe=686917CB')] bg-cover bg-center">

  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Logo" />
        </a>
      </div>

      <div class="flex lg:hidden items-center gap-3">
        <button id="dark-mode-toggle-mobile" aria-label="Toggle dark mode" class="text-2xl">
          🌙
        </button>
        <button type="button" class="mobile-menu-open -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-gray-300" aria-label="Open main menu">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <div class="hidden lg:flex lg:gap-x-12 items-center">
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Product</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Features</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Marketplace</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Company</a>
      </div>

      <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center gap-3">
        <button id="dark-mode-toggle" aria-label="Toggle dark mode" class="text-2xl">
          🌙
        </button>
        <a href="login" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 inline-block">
          Log in
        </a>
        <a href="register" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 inline-block">
          Register
        </a>
      </div>
    </nav>

    <!-- Mobile menu -->
    <div class="mobile-menu hidden lg:hidden fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-white dark:bg-gray-900 px-6 py-6 sm:ring-1 sm:ring-gray-900/10 dark:sm:ring-gray-200/20">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Logo" />
        </a>
        <button type="button" class="mobile-menu-close -m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-300" aria-label="Close menu">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10 dark:divide-gray-600/30">
          <div class="space-y-2 py-6">
            <a href="#" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">Product</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">Features</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">Marketplace</a>
            <a href="#" class="block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">Company</a>
          </div>
          <div class="py-6 flex flex-col gap-3">
            <a href="login" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 inline-block">
              Log in
            </a>
            <a href="register" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 inline-block">
              Register
            </a>
            <button id="dark-mode-toggle-mobile-menu" aria-label="Toggle dark mode" class="text-2xl self-start">
              🌙
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="relative isolate px-6 pt-14 lg:px-8">
      <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div
          class="relative left-[calc(50%-11rem)] w-[36rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72rem]"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        ></div>
      </div>
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 text-center">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div
            class="relative rounded-full px-3 py-1 text-sm text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:text-gray-400 dark:ring-gray-300/20 dark:hover:ring-gray-300/40"
          >
            Announcing our next round of funding.
            <a href="#" class="font-semibold text-indigo-600 dark:text-indigo-400">
              <span class="absolute inset-0" aria-hidden="true"></span>
              Read more <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
        <h1 class="text-5xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-7xl">
          Wear More, Waste Less.
        </h1>
        <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-300">
          Anim aute id magna aliqua ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a
            href="#"
            class="rounded-md bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
            >Get started</a
          >
          <a href="#" class="text-sm font-semibold text-gray-900 dark:text-gray-300">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
      <div
        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true"
      >
        <div
          class="relative left-[calc(50%+3rem)] w-[36rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72rem]"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        ></div>
      </div>
    </div>
  </main>

  <script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-open').addEventListener('click', () => {
      document.querySelector('.mobile-menu').classList.remove('hidden');
    });
    document.querySelector('.mobile-menu-close').addEventListener('click', () => {
      document.querySelector('.mobile-menu').classList.add('hidden');
    });

    // Dark mode toggle buttons (desktop and mobile)
    const darkModeToggleDesktop = document.getElementById('dark-mode-toggle');
    const darkModeToggleMobile = document.getElementById('dark-mode-toggle-mobile');
    const darkModeToggleMobileMenu = document.getElementById('dark-mode-toggle-mobile-menu');

    const updateButtonIcon = (btn) => {
      if (document.documentElement.classList.contains('dark')) {
        btn.textContent = '☀️'; // Sun emoji for light mode toggle
      } else {
        btn.textContent = '🌙'; // Moon emoji for dark mode toggle
      }
    };

    const toggleDarkMode = () => {
      document.documentElement.classList.toggle('dark');
      updateButtonIcon(darkModeToggleDesktop);
      updateButtonIcon(darkModeToggleMobile);
      updateButtonIcon(darkModeToggleMobileMenu);
    };

    // Initialize icons on load
    [darkModeToggleDesktop, darkModeToggleMobile, darkModeToggleMobileMenu].forEach(btn => {
      updateButtonIcon(btn);
      btn.addEventListener('click', toggleDarkMode);
    });
  </script>

</body>
</html>
