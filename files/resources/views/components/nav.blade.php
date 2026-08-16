@props([
    'links' => [],
    'brand' => 'Signal',
    'signInText' => 'Sign in',
    'signInLink' => '#',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
    'showBanner' => '1',
    'bannerText' => 'Signal 2.0 is here — release notes drafted by AI, straight from your merged PRs.',
    'bannerLinkText' => 'Read the announcement',
    'bannerLink' => '/changelog',
])
<!--
    The site header: an announcement bar and a floating pill nav, both
    riding a fixed wrapper so they hover over the canvas. The pill deepens
    its shadow once the page scrolls (see main.js).
-->
<header id="header" class="fixed inset-x-0 top-0 z-40 pt-3">
    <!-- Same container as every section (max-w-6xl + px-6) so the banner, pill, and page content share one left edge. -->
    <div class="mx-auto w-full max-w-6xl px-6">

    @if ($showBanner)
    <div class="mb-3 flex items-center justify-center gap-x-3 gap-y-1 rounded-full bg-ink px-5 py-2.5 text-[13px] text-canvas max-sm:flex-wrap" data-reveal>
        <svg viewBox="0 0 24 24" class="size-3.5 shrink-0 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
        <p class="text-center font-medium">{{ $bannerText }}</p>
        <span class="text-canvas/40 max-sm:hidden">·</span>
        <a href="{{ $bannerLink }}" class="shrink-0 font-semibold underline decoration-canvas/40 underline-offset-4 transition-colors duration-200 hover:decoration-canvas">{{ $bannerLinkText }}</a>
    </div>
    @endif

    <div class="nav-pill relative flex items-center gap-2 rounded-full border border-line bg-panel py-2.5 pr-2.5 pl-5" data-reveal>

        <a href="/" aria-label="Homepage" class="flex items-center gap-2">
            <svg viewBox="0 0 24 24" class="size-5 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
            <span class="text-[15px] font-semibold tracking-tight text-ink">{{ $brand }}</span>
        </a>

        <nav class="absolute left-1/2 flex -translate-x-1/2 items-center gap-1 max-lg:hidden" aria-label="Main">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="rounded-full px-3.5 py-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:bg-raised hover:text-ink">{{ $link->text }}</a>
            @endforeach
        </nav>

        <div class="ml-auto flex items-center gap-2">
            <a href="{{ $signInLink }}" class="rounded-full px-3.5 py-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:text-ink max-sm:hidden">{{ $signInText }}</a>
            <a href="{{ $ctaLink }}" class="rounded-full bg-accent px-4 py-2 text-sm font-semibold text-accent-ink transition-colors duration-200 hover:bg-accent-deep">{{ $ctaText }}</a>
            <button type="button" data-menu-button aria-expanded="false" aria-label="Toggle menu" class="flex size-9 items-center justify-center rounded-full border border-line text-ink lg:hidden">
                <svg viewBox="0 0 20 20" class="size-4 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75Zm0 10.5a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"/></svg>
            </button>
        </div>

        <div data-mobile-panel class="absolute inset-x-0 top-full mt-2 rounded-2xl border border-line bg-panel p-3 shadow-xl shadow-ink/10 lg:hidden">
            <nav class="flex flex-col" aria-label="Mobile">
                @foreach ($links as $link)
                    <a href="{{ $link->url }}" class="rounded-xl px-4 py-2.5 text-[15px] font-medium text-ink transition-colors duration-200 hover:bg-raised">{{ $link->text }}</a>
                @endforeach
            </nav>
            <div class="mt-2 flex items-center gap-2 border-t border-line pt-3">
                <a href="{{ $signInLink }}" class="flex-1 rounded-full border border-line px-4 py-2 text-center text-sm font-medium text-ink">{{ $signInText }}</a>
                <a href="{{ $ctaLink }}" class="flex-1 rounded-full bg-accent px-4 py-2 text-center text-sm font-semibold text-accent-ink">{{ $ctaText }}</a>
            </div>
        </div>

    </div>

    </div>
</header>
