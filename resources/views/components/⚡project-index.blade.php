<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    ```blade
<div>
    {{-- Pencarian dan filter --}}
    <div class="mb-8 mt-12 grid gap-4 sm:grid-cols-2">
        <input
            type="search"
            wire:model.live.debounce.300ms="search"
            placeholder="Cari proyek..."
            aria-label="Cari proyek"
            class="w-full rounded-xl border border-white/15
                   bg-white/5 px-4 py-3 text-white
                   placeholder:text-white/40 outline-none
                   focus:border-[#A9F95B]"
        >

        <select
            wire:model.live="category"
            aria-label="Filter kategori proyek"
            class="w-full rounded-xl border border-white/15
                   bg-[#111310] px-4 py-3 text-white
                   outline-none focus:border-[#A9F95B]"
        >
            <option value="">Semua kategori</option>
            <option value="Web Development">Web Development</option>
            <option value="IoT">IoT</option>
            <option value="Computer Vision">Computer Vision</option>
        </select>
    </div>

    {{-- Daftar proyek --}}
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($projects as $project)
            <a
                wire:key="project-{{ $project->id }}"
                href="{{ route('work.show', $project->slug) }}"
                class="project-card group overflow-hidden rounded-2xl
                       border border-white/10 bg-white/[0.03]"
            >
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
            <p class="text-white/60 sm:col-span-2 lg:col-span-3">
                Tidak ada proyek yang sesuai dengan pencarian.
            </p>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-10">
        {{ $projects->links() }}
    </div>
</div>
</div>