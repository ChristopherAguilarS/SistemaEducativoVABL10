<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();
        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <!-- Authentication -->
    <button wire:click="logout" class="ti-dropdown-item w-full" >
        <i class="ti ti-logout text-lg"></i>
            Log Out
    </button>
</div>
