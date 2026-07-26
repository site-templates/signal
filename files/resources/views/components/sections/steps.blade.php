@props([
    'eyebrow' => 'How it works',
    'heading' => 'From merge to megaphone in three steps',
    'body' => 'No new workflow to learn — Signal sits at the end of the one you already have.',
    'items',
])
<!--
    Three numbered steps from resources/data/collections/steps.json, joined
    by a dashed guide line. The number comes from the loop position, so
    reordering rows renumbers automatically.
-->
<section id="steps" class="border-y border-line bg-panel py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="mx-auto max-w-2xl text-center" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="font-display mt-4 text-3xl font-bold tracking-tight text-balance sm:text-[2.5rem] sm:leading-[1.15]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>

        <div class="relative mt-14 grid gap-10 sm:grid-cols-3 sm:gap-6">
            <div class="pointer-events-none absolute inset-x-[16%] top-6 hidden border-t border-dashed border-line sm:block" aria-hidden="true"></div>

            @foreach ($items as $item)
                <div class="relative text-center" data-reveal>
                    <span class="relative mx-auto flex size-12 items-center justify-center rounded-full border border-line bg-canvas font-mono text-sm font-semibold text-accent shadow-sm shadow-ink/5">{{ $loop->iteration }}</span>
                    <h3 class="font-display mt-5 text-[15px] font-semibold text-ink">{{ $item->title }}</h3>
                    <p class="mx-auto mt-2 max-w-xs text-sm/6 text-pretty text-muted">{{ $item->body }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
