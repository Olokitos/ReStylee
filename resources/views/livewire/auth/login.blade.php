<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $password = '';

    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        Session::regenerate();

        $this->redirectIntended(route('dashboard'), navigate: true);
    }
};
?>

<!-- Login View with Light Fonts and Default Styling -->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-gray-50">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img
      class="mx-auto h-24 w-auto max-w-full"
      src="https://scontent.fceb6-4.fna.fbcdn.net/v/t1.15752-9/501188619_492429883893301_7135192827881551303_n.png?_nc_cat=111&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGHNxY0IM33UytERFbmXRwtIRiN8Tek16ohGI3xN6TXqqupEuyKgngh5n2qjo431DHZPJuLoSmTbIAvgBeFoIyg&_nc_ohc=DPcXqXD7vv8Q7kNvwFjkFbx&_nc_oc=AdmlpwgGFTtLEFs14uUyFbFQMIqzfZMt7xQcIsGCVwK41_QapHf9y1w6DsyjhTpAhNk&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fceb6-4.fna&oh=03_Q7cD2gE-LGCQpnVkR62V3f2P2zSFa1q9UaUK3GZFD337EYJXgQ&oe=68694336"
      alt="Logo"
    />

    <h2 class="mt-10 text-center text-2xl font-light tracking-tight text-gray-900">
      Sign in to your account
    </h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form wire:submit.prevent="login" class="space-y-6" method="POST">
      <div>
        <label for="email" class="block text-sm font-light text-gray-900">Email address</label>
        <div class="mt-2">
          <input
            wire:model.defer="email"
            type="email"
            name="email"
            id="email"
            autocomplete="email"
            required
            autofocus
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm font-light"
          >
          @error('email') <span class="text-red-600 text-sm font-light">{{ $message }}</span> @enderror
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-light text-gray-900">Password</label>
          <div class="text-sm">
            <a href="/forgot-password" class="font-light text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input
            wire:model.defer="password"
            type="password"
            name="password"
            id="password"
            autocomplete="current-password"
            required
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:outline-indigo-600 sm:text-sm font-light"
          >
          @error('password') <span class="text-red-600 text-sm font-light">{{ $message }}</span> @enderror
        </div>
      </div>

      <div class="flex items-center">
        <input
          wire:model.defer="remember"
          id="remember"
          name="remember"
          type="checkbox"
          class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
        >
        <label for="remember" class="ml-2 block text-sm font-light text-gray-900">Remember Me</label>
      </div>

      <div>
        <button
          type="submit"
          class="flex w-full justify-center text-gray-800 bg-gray-800 hover:bg-gray-700 font-light rounded-lg text-sm px-5 py-2.5 text-center transition"
        >
          Sign in
        </button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500 font-light">
      No Account?
      <a href="/register" class="font-light text-indigo-600 hover:text-indigo-500">Register now.</a>
    </p>
  </div>
</div>
