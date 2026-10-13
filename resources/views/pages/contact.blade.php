@extends('layouts.app')

@section('title', 'Contact — FRAME')

@section('content')
<section class="min-h-screen px-5 pb-24 pt-36 md:px-10">
    <div class="mx-auto grid max-w-7xl gap-12 md:grid-cols-2">

        <div>
            <p class="text-sm text-[#A9F95B]">CONTACT / 03</p>

            <h1 class="mt-6 text-5xl font-black sm:text-7xl">
                Let's talk.
            </h1>

            <p class="mt-6 max-w-lg leading-8 text-white/60">
                Punya ide proyek, kesempatan kolaborasi, atau peluang
                profesional? Silakan kirim pesan melalui formulir ini.
            </p>
        </div>

        <div>
            <livewire:contact-form />
        </div>

    </div>
</section>
@endsection