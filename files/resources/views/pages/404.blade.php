<x-layouts.main title="Page not found" description="This page has not shipped.">
    <section class="relative flex min-h-dvh flex-col items-center justify-center px-6 py-40 text-center">
        <div class="dot-grid pointer-events-none absolute inset-x-0 top-0 h-96" aria-hidden="true"></div>

        <p class="relative inline-flex rounded-full border border-line bg-panel px-3 py-1 font-mono text-[12px] font-semibold text-accent" data-reveal>404</p>
        <h1 class="font-display reveal-1 relative mt-6 text-4xl font-bold tracking-tight text-balance sm:text-6xl" data-reveal>This page hasn't shipped.</h1>
        <p class="reveal-2 relative mt-5 max-w-md text-lg/8 text-muted" data-reveal>Maybe it's still in draft — or maybe the link drifted. Either way, the changelog knows everything that actually made it out.</p>

        <div class="reveal-3 relative mt-9 flex flex-wrap items-center justify-center gap-3" data-reveal>
            <a href="/" class="rounded-full bg-accent px-6 py-3 text-[15px] font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-deep">Back home</a>
            <a href="/changelog" class="rounded-full border border-line bg-panel px-6 py-3 text-[15px] font-semibold text-ink transition-colors duration-200 hover:bg-raised">Read the changelog</a>
        </div>
    </section>
</x-layouts.main>
