@props([
    'eyebrow' => 'Loved by product teams',
    'heading' => 'The changelog stopped being a chore',
    'items',
])
<!--
    Three testimonial cards from resources/data/collections/testimonials.json.
-->
<section id="testimonials" class="border-y border-line bg-panel py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">

        <div class="mx-auto max-w-2xl text-center" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="font-display mt-4 text-3xl font-bold tracking-tight text-balance sm:text-[2.5rem] sm:leading-[1.15]">{{ $heading }}</h2>
        </div>

        <div class="mt-14 grid gap-4 lg:grid-cols-3">
            @foreach ($items as $item)
                <figure class="flex flex-col justify-between rounded-2xl border border-line bg-canvas p-7" data-reveal>
                    <blockquote class="text-[15px]/7 text-pretty text-ink">“{{ $item->quote }}”</blockquote>
                    <figcaption class="mt-6 flex items-center gap-3 border-t border-line pt-5">
                        <img src="{{ $item->avatar }}" alt="" class="size-9 rounded-full object-cover" loading="lazy">
                        <span>
                            <span class="block text-sm font-semibold text-ink">{{ $item->name }}</span>
                            <span class="block text-[13px] text-muted">{{ $item->role }}</span>
                        </span>
                    </figcaption>
                </figure>
            @endforeach
        </div>

    </div>
</section>
