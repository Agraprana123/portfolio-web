<div>
    @if ($sent)
        <div class="mb-4 rounded-lg bg-green-100 p-4 text-green-800">
            Pesan berhasil dikirim!
        </div>
    @endif

    <form wire:submit="submit" class="space-y-4">
        <div>
            <label for="name">Nama</label>
            <input
                id="name"
                type="text"
                wire:model="name"
                class="w-full rounded-lg border p-3"
            >
            @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                wire:model="email"
                class="w-full rounded-lg border p-3"
            >
            @error('email')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="subject">Subjek</label>
            <input
                id="subject"
                type="text"
                wire:model="subject"
                class="w-full rounded-lg border p-3"
            >
            @error('subject')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="message">Pesan</label>
            <textarea
                id="message"
                wire:model="message"
                rows="5"
                class="w-full rounded-lg border p-3"
            ></textarea>
            @error('message')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="rounded-lg bg-blue-900 px-6 py-3 text-white"
            wire:loading.attr="disabled"
        >
            <span wire:loading.remove>Kirim Pesan</span>
            <span wire:loading>Mengirim...</span>
        </button>
    </form>
</div>
