<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Http;

new class extends Component {
    public $obj;

    public function mount()
    {
        $this->fetchAdvice();
    }

    public function fetchAdvice()
    {
        $response = Http::get('https://api.adviceslip.com/advice');
        $this->obj = json_decode($response->body())->slip;
    }
};

?>

<div
    class="flex flex-col items-center px-6 mx-4 mt-32 font-bold max-w-[530px] rounded-xl sm:px-10 bg-neutral-darkGrayishBlue font-manrope sm:mt-0">
    <p class="mt-4 py-6 text-xs tracking-[0.2rem] uppercase text-primary-neonGreen">advice #{{ $obj->id }}</p>
    <p class="text-2xl text-center text-primary-lightCyan">“{{ $obj->advice }}”</p>
    <div class="mt-6 md:hidden">
        @include('icons.divider-mobile', array('class' => 'w-[295px] max-w-[100%] h-auto'))
    </div>
    <div class="hidden md:mt-8 md:block">
        @include('icons.divider-desktop', array('class' => 'h-4 w-[444px]'))
    </div>
    <div wire:click="fetchAdvice" class="relative p-5 rounded-full cursor-pointer hover:duration-200 hover:transition-shadow hover:shadow-custom hover:animate-spin top-8 sm:top-8 bg-primary-neonGreen">
        @include('icons.dice', array('class' => 'h-6 w-6'))
    </div>
</div>
