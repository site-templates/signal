@props([
    'items' => [],
    'heading' => 'Changelogs your customers already read',
])
<!--
    The customer showcase: a marquee of miniature changelog windows, each a
    tiny CSS-built browser card carrying a customer's name and changelog
    domain. The row is rendered twice inside the track for a seamless loop;
    the second copy is hidden from assistive tech.
-->
<section id="logos" class="py-16 sm:py-20">
    <div class="mx-auto w-full max-w-6xl px-6">
        <p class="text-center font-mono text-[11px] font-medium tracking-widest text-faint uppercase" data-reveal>{{ $heading }}</p>
    </div>

    <div class="marquee mt-8 overflow-hidden" data-reveal>
        <div class="marquee-track flex gap-4 pr-4">
            @foreach ($items as $item)
                <span class="w-56 shrink-0 rounded-xl border border-line bg-panel shadow-sm shadow-ink/5">
                    <span class="flex items-center gap-1.5 border-b border-line px-3 py-2">
                        <span class="size-1.5 rounded-full bg-line"></span>
                        <span class="size-1.5 rounded-full bg-line"></span>
                        <span class="ml-2 truncate font-mono text-[10px] text-faint">{{ $item->domain }}</span>
                    </span>
                    <span class="block px-3 py-3">
                        <span class="block text-[13px] font-semibold text-ink">{{ $item->name }}</span>
                        <span class="mt-2 block h-1.5 w-3/4 rounded-full bg-raised"></span>
                        <span class="mt-1.5 block h-1.5 w-1/2 rounded-full bg-raised"></span>
                    </span>
                </span>
            @endforeach
            @foreach ($items as $item)
                <span class="w-56 shrink-0 rounded-xl border border-line bg-panel shadow-sm shadow-ink/5" aria-hidden="true">
                    <span class="flex items-center gap-1.5 border-b border-line px-3 py-2">
                        <span class="size-1.5 rounded-full bg-line"></span>
                        <span class="size-1.5 rounded-full bg-line"></span>
                        <span class="ml-2 truncate font-mono text-[10px] text-faint">{{ $item->domain }}</span>
                    </span>
                    <span class="block px-3 py-3">
                        <span class="block text-[13px] font-semibold text-ink">{{ $item->name }}</span>
                        <span class="mt-2 block h-1.5 w-3/4 rounded-full bg-raised"></span>
                        <span class="mt-1.5 block h-1.5 w-1/2 rounded-full bg-raised"></span>
                    </span>
                </span>
            @endforeach
        </div>
    </div>
</section>
