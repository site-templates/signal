@props([
    'product' => [],
    'resources' => [],
    'company' => [],
    'brand' => 'Signal',
    'tagline' => 'Turn product changes into clear, customer-facing updates — automatically.',
    'productHeading' => 'Product',
    'resourcesHeading' => 'Resources',
    'companyHeading' => 'Company',
    'copyright' => '© 2026 Signal Labs, Inc. All rights reserved.',
    'statusText' => 'All systems broadcasting',
])
<!--
    The footer: brand and tagline on the left, three link columns whose rows
    live in resources/data/site.json (footer_product, footer_resources,
    footer_company), then the legal line.
-->
<footer class="relative border-t border-line bg-panel">
    <div class="mx-auto w-full max-w-6xl px-6 py-16 sm:py-20">

        <div class="flex flex-wrap justify-between gap-x-16 gap-y-12">
            <div class="max-w-xs">
                <a href="/" aria-label="Homepage" class="flex items-center gap-2">
                    <svg viewBox="0 0 24 24" class="size-5 text-accent" fill="currentColor" aria-hidden="true"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
                    <span class="text-[15px] font-semibold tracking-tight text-ink">{{ $brand }}</span>
                </a>
                <p class="mt-4 text-sm/6 text-muted">{{ $tagline }}</p>
            </div>

            <div class="flex flex-wrap gap-x-16 gap-y-10">
                <nav aria-label="Product">
                    <p class="text-[13px] font-semibold text-ink">{{ $productHeading }}</p>
                    <ul class="mt-4 flex flex-col gap-2.5 text-sm">
                        @foreach ($product as $link)
                            <li><a href="{{ $link->url }}" class="text-muted transition-colors duration-200 hover:text-ink">{{ $link->text }}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <nav aria-label="Resources">
                    <p class="text-[13px] font-semibold text-ink">{{ $resourcesHeading }}</p>
                    <ul class="mt-4 flex flex-col gap-2.5 text-sm">
                        @foreach ($resources as $link)
                            <li><a href="{{ $link->url }}" class="text-muted transition-colors duration-200 hover:text-ink">{{ $link->text }}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <nav aria-label="Company">
                    <p class="text-[13px] font-semibold text-ink">{{ $companyHeading }}</p>
                    <ul class="mt-4 flex flex-col gap-2.5 text-sm">
                        @foreach ($company as $link)
                            <li><a href="{{ $link->url }}" class="text-muted transition-colors duration-200 hover:text-ink">{{ $link->text }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>

        <div class="mt-14 flex flex-wrap items-center justify-between gap-4 border-t border-line pt-8">
            <p class="text-[13px] text-faint">{{ $copyright }}</p>
            <p class="flex items-center gap-1.5 font-mono text-[11px] tracking-widest text-faint uppercase">
                <span class="size-1.5 rounded-full bg-accent"></span>
                {{ $statusText }}
            </p>
        </div>

    </div>
</footer>
