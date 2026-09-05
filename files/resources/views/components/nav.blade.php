@props([
    'links' => [],
    'brand' => 'Signal',
    'signInText' => 'Sign in',
    'signInLink' => '#',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
    'showBanner' => '1',
    'bannerText' => 'Signal 2.0 — release notes drafted straight from your merged PRs.',
    'bannerLinkText' => 'Read the announcement',
    'bannerLink' => '/changelog',
])
<!--
    The site header: two centred capsules floating over the canvas — a compact
    announcement pill and, under it, the nav. Both are sized to their contents
    (a short, wide bar reads as "slightly rounded" no matter how large its
    radius is; a capsule only looks like a capsule when its ends are in view),
    and both arrive through the [data-enter] cascade in resources/css/site.css
    so the header leads the page in rather than appearing beside it. The whole
    announcement is one link, so a phone gets a full-width tap target and the
    "Read the announcement" label can drop away below sm without losing it.
-->
<header id="header" class="fixed inset-x-0 top-0 z-40 pt-3">
    <!-- Same container as every section (max-w-6xl + px-6) so the header shares the page's left edge. -->
    <div class="mx-auto flex w-full max-w-6xl flex-col items-center px-6">

    @if ($showBanner)
    <!--
        Three nested elements on purpose: the outer one plays the entrance
        keyframe, the shell collapses its own height on scroll (grid 1fr → 0fr),
        and the capsule inside fades. See #header .announce-shell in site.css.
    -->
    <div class="w-full max-w-full" data-enter>
        <div class="announce-shell grid w-full">
            <div class="overflow-hidden">
                <a href="{{ $bannerLink }}" class="announce group mx-auto mb-2.5 flex w-fit max-w-full items-center gap-2.5 rounded-full bg-ink py-2 pr-4 pl-4 text-[13px] text-canvas transition-colors duration-200 hover:bg-ink/90">
                    <svg viewBox="0 0 24 24" class="size-3.5 shrink-0 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
                    <span class="min-w-0 font-medium max-sm:line-clamp-2">{{ $bannerText }}</span>
                    <span class="hidden h-3.5 w-px shrink-0 bg-canvas/25 sm:block" aria-hidden="true"></span>
                    <span class="hidden shrink-0 font-semibold text-canvas/85 transition-colors duration-200 group-hover:text-canvas sm:block">{{ $bannerLinkText }}</span>
                    <svg viewBox="0 0 20 20" class="size-3.5 shrink-0 fill-canvas/60 transition-all duration-200 group-hover:translate-x-0.5 group-hover:fill-canvas" aria-hidden="true"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 0 1 .02-1.06L11.168 10 7.23 6.29a.75.75 0 1 1 1.04-1.08l4.5 4.25a.75.75 0 0 1 0 1.08l-4.5 4.25a.75.75 0 0 1-1.06-.02Z" clip-rule="evenodd"/></svg>
                </a>
            </div>
        </div>
    </div>
    @endif

    <div class="nav-pill enter-1 relative flex w-full items-center gap-2 rounded-full border border-line bg-panel py-2 pr-2 pl-4 md:w-auto" data-enter>

        <a href="/" aria-label="Homepage" class="flex shrink-0 items-center gap-2 pr-1">
            <svg viewBox="0 0 24 24" class="size-5 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
            <span class="text-[15px] font-semibold tracking-tight text-ink">{{ $brand }}</span>
        </a>

        <span class="mx-1 h-5 w-px shrink-0 bg-line max-md:hidden" aria-hidden="true"></span>

        <nav class="flex items-center gap-0.5 max-md:hidden" aria-label="Main">
            @foreach ($links as $link)
                <a href="{{ $link->url }}" class="rounded-full px-3 py-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:bg-raised hover:text-ink">{{ $link->text }}</a>
            @endforeach
        </nav>

        <span class="mx-1 h-5 w-px shrink-0 bg-line max-md:hidden" aria-hidden="true"></span>

        <div class="ml-auto flex shrink-0 items-center gap-1.5 md:ml-0">
            <a href="{{ $signInLink }}" class="rounded-full px-3 py-1.5 text-sm font-medium text-muted transition-colors duration-200 hover:bg-raised hover:text-ink max-sm:hidden">{{ $signInText }}</a>
            <a href="{{ $ctaLink }}" class="rounded-full bg-accent px-4 py-2 text-sm font-semibold text-accent-ink shadow-sm shadow-accent/25 transition-colors duration-200 hover:bg-accent-deep">{{ $ctaText }}</a>
            <button type="button" data-menu-button aria-expanded="false" aria-label="Toggle menu" class="flex size-9 items-center justify-center rounded-full border border-line text-ink transition-colors duration-200 hover:bg-raised md:hidden">
                <svg viewBox="0 0 20 20" class="size-4 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75Zm0 10.5a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"/></svg>
            </button>
        </div>

        <div data-mobile-panel class="absolute inset-x-0 top-full mt-2 rounded-2xl border border-line bg-panel p-3 shadow-xl shadow-ink/10 md:hidden">
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
