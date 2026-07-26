@props([
    'eyebrow' => 'Page',
    'heading' => 'Page heading',
    'body' => '',
    'showIcon' => '0',
])
<!--
    The inner-page opener: an optional dark icon badge, the eyebrow, a big
    centered headline, and supporting copy — the blog-index treatment from
    the reference sites.
-->
<section id="page-header" class="relative pt-44 pb-4 sm:pt-52">
    <div class="dot-grid pointer-events-none absolute inset-x-0 top-0 h-72" aria-hidden="true"></div>

    <div class="relative mx-auto w-full max-w-3xl px-6 text-center">
        @if ($showIcon)
        <span class="mx-auto flex size-12 items-center justify-center rounded-2xl bg-ink shadow-lg shadow-ink/20" data-reveal>
            <svg viewBox="0 0 24 24" class="size-5 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
        </span>
        @endif
        <p class="reveal-1 mt-6 font-mono text-[11px] font-medium tracking-widest text-accent uppercase" data-reveal>{{ $eyebrow }}</p>
        <h1 class="font-display reveal-1 mt-4 text-4xl font-bold tracking-tight text-balance sm:text-6xl" data-reveal>{{ $heading }}</h1>
        @if ($body)
        <p class="reveal-2 mx-auto mt-5 max-w-xl text-lg/8 text-pretty text-muted" data-reveal>{{ $body }}</p>
        @endif
    </div>
</section>
