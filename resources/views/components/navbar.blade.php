<nav class="fixed inset-x-0 top-0 z-50 border-b border-white/10
            bg-[#111310]/90 backdrop-blur-md">
    <div class="mx-auto flex max-w-7xl items-center
                justify-between px-5 py-5 md:px-10">

        <a href="{{ route('home') }}"
           class="text-xl font-black tracking-tight">
            FRAME<span class="text-[#A9F95B]">.</span>
        </a>

        <div class="flex items-center gap-5 text-sm md:gap-8">
            <a href="{{ route('work.index') }}"
               class="transition-colors hover:text-[#A9F95B]">
                Work
            </a>

            <a href="{{ route('about') }}"
               class="transition-colors hover:text-[#A9F95B]">
                About
            </a>

            <a href="{{ route('contact') }}"
               class="rounded-full bg-[#A9F95B] px-4 py-2
                      font-semibold text-[#111310]">
                Contact
            </a>
        </div>
    </div>
</nav>