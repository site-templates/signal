@props([
    'eyebrow' => 'FAQ',
    'heading' => 'Answers, before you ask',
    'body' => 'Everything teams check before switching their changelog to Signal.',
    'items',
])
<!--
    Accordion of questions from resources/data/collections/faqs.json, using
    native details elements — the open/close animation lives in site.css.
-->
<section id="faq" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-3xl px-6">

        <div class="text-center" data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="font-display mt-4 text-3xl font-bold tracking-tight text-balance sm:text-[2.5rem] sm:leading-[1.15]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
        </div>

        <div class="mt-12 flex flex-col gap-3">
            @foreach ($items as $item)
                <details class="faq-item group rounded-2xl border border-line bg-panel px-6" data-reveal>
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 py-5 text-[15px] font-semibold text-ink">
                        {{ $item->question }}
                        <svg viewBox="0 0 16 16" class="size-4 shrink-0 fill-faint transition-transform duration-300 group-open:rotate-45" aria-hidden="true"><path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/></svg>
                    </summary>
                    <p class="pb-6 text-[15px]/7 text-muted">{{ $item->answer }}</p>
                </details>
            @endforeach
        </div>

    </div>
</section>
