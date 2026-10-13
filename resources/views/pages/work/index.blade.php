@extends('layouts.app')

@section('title', 'Selected Work — FRAME')

@section('content')
<section class="min-h-screen px-5 pb-24 pt-36 md:px-10">
    <div class="mx-auto max-w-7xl">

        <p class="mb-5 text-sm text-[#A9F95B]">
            SELECTED WORK / 01
        </p>

        <h1 class="text-5xl font-black sm:text-7xl">
            Projects<span class="text-[#A9F95B]">.</span>
        </h1>

        <p class="mt-6 max-w-2xl leading-8 text-white/60">
            Kumpulan proyek pengembangan web, aplikasi,
            dan eksplorasi teknologi.
        </p>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($projects as $project)
                <a href="{{ route('work.show', $project->slug) }}"
                   class="project-card group overflow-hidden rounded-2xl
                          border border-white/10 bg-white/[0.03]">

                    <div class="aspect-[4/3] overflow-hidden bg-white/5">
                        @if ($project->thumbnail)
                            <img
                                src="{{ asset('storage/' . $project->thumbnail) }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                                class="h-full w-full object-cover
                                       transition duration-500
                                       group-hover:scale-105"
                            >
                        @else
                            <div class="flex h-full items-center
                                        justify-center text-white/30">
                                Project Preview
                            </div>
                        @endif
                    </div>

                    <div class="p-5">
                        <p class="text-xs uppercase tracking-widest
                                  text-[#A9F95B]">
                            {{ $project->category }}
                        </p>

                        <h2 class="mt-3 text-xl font-bold">
                            {{ $project->title }}
                        </h2>

                        <p class="mt-3 leading-7 text-white/60">
                            {{ $project->summary }}
                        </p>

                        <p class="mt-5 text-sm">
                            View case study ↗
                        </p>
                    </div>
                </a>
            @empty
                <p class="text-white/60">
                    Belum ada proyek yang dipublikasikan.
                </p>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $projects->links() }}
        </div>
    </div>
</section>
@endsection