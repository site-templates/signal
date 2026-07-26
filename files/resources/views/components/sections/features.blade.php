@props([
    'eyebrow' => 'Features',
    'heading' => 'Everything between “merged” and “announced”',
    'body' => 'Signal watches your repos and trackers, drafts the story, and delivers it everywhere your customers listen.',
    'items',
])
<!--
    The bento grid. Card copy and icons are repeating content, so they live in
    resources/data/collections/features.json — the first two cards render wide,
    the rest three across (the .bento rules in site.css). Each card is a
    spotlight-card: the accent bloom follows the cursor via main.js.
-->
<section id="features" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="mx-auto max-w-2xl text-center" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="font-display mt-4 text-3xl font-bold tracking-tight text-balance sm:text-[2.5rem] sm:leading-[1.15]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>

        <div class="bento mt-14 grid grid-cols-6 gap-4">
            @foreach ($items as $item)
                <div class="spotlight-card rounded-2xl border border-line bg-panel p-7 shadow-sm shadow-ink/5 transition-colors duration-300 hover:border-faint" data-reveal>
                    <span class="flex size-9 items-center justify-center rounded-lg border border-line bg-accent-soft text-accent">
                        {!! $item->icon !!}
                    </span>
                    <h3 class="font-display mt-5 text-[15px] font-semibold text-ink">{{ $item->title }}</h3>
                    <p class="mt-2 text-sm/6 text-pretty text-muted">{{ $item->body }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
