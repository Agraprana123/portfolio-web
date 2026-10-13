@extends('layouts.app')

@section('title', 'FRAME — Digital Portfolio')

@section('description', 'Portfolio proyek pengembangan web dan teknologi.')

@section('content')
    <section class="flex min-h-screen items-center px-5 pb-16 pt-32 md:px-10">
        <div class="mx-auto w-full max-w-7xl">
            <p class="hero-item mb-6 text-sm uppercase tracking-[0.25em]
                      text-[#A9F95B]">
                Informatics Student / Full Stack Developer
            </p>

            <h1 class="hero-item max-w-5xl text-5xl font-black
                       leading-[0.95] tracking-tight
                       sm:text-7xl md:text-8xl">
                Juan Agraprana Putra 
                <span class="text-[#A9F95B]">experiences.</span>
            </h1>

            <div class="hero-item mt-10 flex flex-col gap-6
                        md:flex-row md:items-end md:justify-between">
                <p class="max-w-xl text-base leading-8 text-white/60">
                    Saya mengembangkan aplikasi web dan solusi teknologi
                    dengan fokus pada fungsi, pengalaman pengguna,
                    serta proses pemecahan masalah.
                </p>

                <a href="{{ route('work.index') }}"
                   class="inline-flex w-fit rounded-full border
                          border-white/30 px-6 py-3
                          transition hover:border-[#A9F95B]
                          hover:text-[#A9F95B]">
                    Explore my work ↗
                </a>
            </div>

            <div class="hero-item mt-24 border-t border-white/15 pt-5
                        text-xs uppercase tracking-[0.2em] text-white/50">
                Selected projects / 2024 — {{ date('Y') }}
            </div>
        </div>
    </section>

    <section class="px-5 pb-24 md:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="mb-4 text-sm text-[#A9F95B]">01 / INTRODUCTION</p>

            <h2 class="reveal max-w-4xl text-3xl font-bold
                       leading-tight sm:text-5xl">
                More than code. Every project starts with a problem
                worth solving.
            </h2>

            <p class="reveal mt-6 max-w-2xl leading-8 text-white/60">
                Dari pengembangan aplikasi hingga eksplorasi teknologi,
                setiap proyek menjadi kesempatan untuk belajar,
                bereksperimen, dan membangun sesuatu yang bermanfaat.
            </p>
        </div>
    </section>
@endsection