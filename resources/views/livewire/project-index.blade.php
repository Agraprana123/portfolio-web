<div>
    <div class="mb-8 grid gap-4 sm:grid-cols-2">
        <input
            type="search"
            wire:model.live.debounce.300ms="search"
            placeholder="Cari proyek..."
            class="rounded-xl border border-white/15 bg-white/5
                   px-4 py-3 text-white outline-none
                   focus:border-[#A9F95B]"
        >

        <select
            wire:model.live="category"
            class="rounded-xl border border-white/15 bg-[#111310]
                   px-4 py-3 text-white"
        >
            <option value="">Semua kategori</option>
            <option value="Web Development">Web Development</option>
            <option value="IoT">IoT</option>
            <option value="Computer Vision">Computer Vision</option>
        </select>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($projects as $project)
            <a
                wire:key="project-{{ $project->id }}"
                href="{{ route('work.show', $project->slug) }}"
                class="rounded-2xl border border-white/10 p-5"
            >
                <p class="text-xs text-[#A9F95B]">
                    {{ $project->category }}
                </p>

                <h2 class="mt-3 text-xl font-bold">
                    {{ $project->title }}
                </h2>

                <p class="mt-3 text-white/60">
                    {{ $project->summary }}
                </p>
            </a>
        @empty
            <p class="text-white/60">
                Tidak ada proyek yang sesuai.
            </p>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $projects->links() }}
    </div>
</div>