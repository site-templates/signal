@props([
    'heading' => 'Your next release deserves an announcement.',
    'body' => 'Connect a repo now and watch Signal draft your first release notes in under five minutes.',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
    'secondaryText' => 'See the live changelog',
    'secondaryLink' => '/changelog',
    'footnote' => 'Free forever for one project · No credit card',
])
<!--
    The closing move: a dark rounded panel — the announcement-bar language
    scaled up — with the headline, both actions, and the reassurance line.
-->
<section id="cta" class="py-20 sm:py-28">
    <div class="mx-auto w-full max-w-6xl px-6">
        <div class="relative overflow-hidden rounded-3xl bg-ink px-6 py-16 text-center sm:px-16 sm:py-20" data-reveal>
            <div class="dot-grid absolute inset-0 opacity-40" aria-hidden="true"></div>

            <div class="relative">
                <svg viewBox="0 0 24 24" class="mx-auto size-9 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>

                <h2 class="font-display mx-auto mt-6 max-w-2xl text-3xl font-bold tracking-tight text-balance text-canvas sm:text-[2.75rem] sm:leading-[1.12]">{{ $heading }}</h2>
                <p class="mx-auto mt-4 max-w-xl text-lg/8 text-pretty text-canvas/70">{{ $body }}</p>

                <div class="mt-9 flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ $ctaLink }}" class="rounded-full bg-accent px-6 py-3 text-[15px] font-semibold text-accent-ink shadow-lg shadow-accent/30 transition-colors duration-200 hover:bg-accent-deep">{{ $ctaText }}</a>
                    <a href="{{ $secondaryLink }}" class="rounded-full border border-canvas/25 px-6 py-3 text-[15px] font-semibold text-canvas transition-colors duration-200 hover:bg-canvas/10">{{ $secondaryText }}</a>
                </div>

                <p class="mt-6 font-mono text-[11px] tracking-widest text-canvas/50 uppercase">{{ $footnote }}</p>
            </div>
        </div>
    </div>
</section>
