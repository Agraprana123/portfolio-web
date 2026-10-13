@extends('layouts.app')

@section('title', 'About Me — FRAME')

@section('content')
<section class="min-h-screen px-5 pb-24 pt-36 md:px-10">
    <div class="mx-auto max-w-7xl">

        <p class="mb-5 text-sm text-[#A9F95B]">
            ABOUT ME / 02
        </p>

        <h1 class="max-w-5xl text-5xl font-black leading-tight sm:text-7xl">
            Turning ideas into
            <span class="text-[#A9F95B]">digital solutions.</span>
        </h1>

        <div class="mt-16 grid gap-12 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-bold">Who I am</h2>

                <p class="mt-5 leading-8 text-white/65">
                    Saya mahasiswa Informatika Universitas Bengkulu
                    yang tertarik pada pengembangan aplikasi web,
                    perancangan sistem, dan eksplorasi teknologi.
                    Saya senang mempelajari bagaimana sebuah ide
                    dapat diwujudkan menjadi aplikasi yang bermanfaat.
                </p>

                <p class="mt-5 leading-8 text-white/65">
                    Melalui berbagai proyek, saya terus mengembangkan
                    kemampuan analisis, pemrograman, kolaborasi,
                    dan penyelesaian masalah.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-bold">Technical skills</h2>

                <div class="mt-5 flex flex-wrap gap-3">
                    @foreach ([
                        'PHP', 'Laravel', 'Livewire', 'JavaScript',
                        'Python', 'SQL', 'MySQL', 'HTML',
                        'CSS', 'Git', 'REST API'
                    ] as $skill)
                        <span class="rounded-full border border-white/15
                                     px-4 py-2 text-sm">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>

                <h2 class="mt-12 text-2xl font-bold">Education</h2>

                <p class="mt-4 text-white/70">
                    Informatika — Universitas Bengkulu
                </p>
            </div>
        </div>

        <div class="mt-20 border-t border-white/10 pt-8">
            <p class="text-sm text-[#A9F95B]">LET'S CONNECT</p>

            <h2 class="mt-4 text-3xl font-bold sm:text-5xl">
                Always learning. Always building.
            </h2>

            <a href="{{ route('contact') }}"
               class="mt-8 inline-flex rounded-full bg-[#A9F95B]
                      px-6 py-3 font-semibold text-[#111310]">
                Contact me ↗
            </a>
        </div>
    </div>
</section>
@endsection