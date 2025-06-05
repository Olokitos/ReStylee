<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
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

<div class="flex flex-col gap-6">
    <form wire:submit="login" class="flex flex-col gap-4">
        <flux:input wire:model="email" label="Email" type="email" required autofocus />
        <flux:input wire:model="password" label="Password" type="password" required />

        <flux:checkbox wire:model="remember" label="Remember Me" />

        <flux:button type="submit" variant="primary" class="w-full">Login</flux:button>
    </form>
</div>
