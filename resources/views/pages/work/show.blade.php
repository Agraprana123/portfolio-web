@extends('layouts.app')

@section('title', $project->title . ' — FRAME')

@section('content')
<section class="min-h-screen px-5 pb-24 pt-36 md:px-10">
    <article class="mx-auto max-w-5xl">

        <a href="{{ route('work.index') }}"
           class="text-sm text-[#A9F95B]">
            ← Back to projects
        </a>

        <p class="mt-12 text-sm uppercase tracking-widest
                  text-[#A9F95B]">
            {{ $project->category }}
        </p>

        <h1 class="mt-5 text-5xl font-black leading-tight sm:text-7xl">
            {{ $project->title }}
        </h1>

        <p class="mt-8 max-w-3xl text-lg leading-8 text-white/60">
            {{ $project->summary }}
        </p>

        @if ($project->thumbnail)
            <img
                src="{{ asset('storage/' . $project->thumbnail) }}"
                alt="{{ $project->title }}"
                class="mt-12 w-full rounded-2xl object-cover"
            >
        @endif

        <div class="mt-12 grid gap-8 border-y border-white/10 py-8 sm:grid-cols-3">
            <div>
                <p class="text-sm text-white/50">Role</p>
                <p class="mt-2">{{ $project->role ?? 'Developer' }}</p>
            </div>

            <div>
                <p class="text-sm text-white/50">Year</p>
                <p class="mt-2">{{ $project->project_year ?? '—' }}</p>
            </div>

            <div>
                <p class="text-sm text-white/50">Category</p>
                <p class="mt-2">{{ $project->category }}</p>
            </div>
        </div>

        <div class="mt-12 whitespace-pre-line leading-8 text-white/75">
            {{ $project->description }}
        </div>

        <div class="mt-10 flex flex-wrap gap-4">
            @if ($project->demo_url)
                <a href="{{ $project->demo_url }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="rounded-full bg-[#A9F95B] px-6 py-3
                          font-semibold text-[#111310]">
                    Live Demo ↗
                </a>
            @endif

            @if ($project->repository_url)
                <a href="{{ $project->repository_url }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="rounded-full border border-white/25 px-6 py-3">
                    Repository ↗
                </a>
            @endif
        </div>
    </article>
</section>
@endsection