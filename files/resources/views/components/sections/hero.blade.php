@props([
    'avatars' => [],
    'integrations' => [],
    'trustText' => 'Trusted by 2,400+ product teams',
    'showTrust' => '1',
    'heading1' => 'Release notes that',
    'heading2' => 'write themselves.',
    'showCursor' => '1',
    'body' => 'Turn merged pull requests into polished release notes, publish a branded changelog, and embed product updates anywhere.',
    'connectsLabel' => 'Connects to',
    'ctaText' => 'Start free',
    'ctaLink' => '/pricing',
    'secondaryText' => 'Book a demo',
    'secondaryLink' => '#',
])
<!--
    The opening statement: a trust pill, the giant two-line headline with the
    blinking accent cursor, the subcopy, the integrations row, both calls to
    action, then the product window. The window is drawn entirely in HTML and
    Tailwind — no screenshot to keep in sync, always razor sharp — and shows
    Signal turning merged pull requests into a publishable release.
-->
<section id="hero" class="relative overflow-hidden pt-44 pb-8 sm:pt-52">
    <div class="dot-grid pointer-events-none absolute inset-x-0 top-0 h-[34rem]" aria-hidden="true"></div>

    <div class="relative mx-auto w-full max-w-6xl px-6">

        <div class="flex flex-col items-center text-center">

            @if ($showTrust)
            <p class="flex items-center gap-3 rounded-full border border-line bg-panel py-1.5 pr-4 pl-2 text-[13px] text-muted shadow-sm shadow-ink/5" data-reveal>
                <span class="flex -space-x-2">
                    @foreach ($avatars as $avatar)
                        <img src="{{ $avatar->image }}" alt="" class="size-6 rounded-full border-2 border-panel object-cover" loading="lazy">
                    @endforeach
                </span>
                <span>{{ $trustText }}</span>
            </p>
            @endif

            <h1 class="font-display reveal-1 mt-8 text-5xl leading-[1.06] font-bold tracking-[-0.03em] text-balance sm:text-7xl lg:text-[5.25rem]" data-reveal>
                {{ $heading1 }}@if ($showCursor)<span class="cursor-bar" aria-hidden="true"></span>@endif
                <br>
                <span class="text-accent">{{ $heading2 }}</span>
            </h1>

            <p class="reveal-2 mt-7 max-w-2xl text-lg/8 text-pretty text-muted sm:text-xl/9" data-reveal>{{ $body }}</p>

            <p class="reveal-3 mt-6 flex flex-wrap items-center justify-center gap-x-4 gap-y-2 text-sm text-muted" data-reveal>
                <span class="font-medium text-faint">{{ $connectsLabel }}</span>
                @foreach ($integrations as $integration)
                    <span class="flex items-center gap-1.5">
                        <svg viewBox="0 0 20 20" class="size-4 fill-ink" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                        <span class="font-medium text-ink">{{ $integration->name }}</span>
                    </span>
                @endforeach
            </p>

            <div class="reveal-4 mt-9 flex flex-wrap items-center justify-center gap-3" data-reveal>
                <a href="{{ $ctaLink }}" class="rounded-full bg-accent px-6 py-3 text-[15px] font-semibold text-accent-ink shadow-lg shadow-accent/25 transition-all duration-200 hover:bg-accent-deep hover:shadow-accent/35">{{ $ctaText }}</a>
                <a href="{{ $secondaryLink }}" class="rounded-full border border-line bg-panel px-6 py-3 text-[15px] font-semibold text-ink transition-colors duration-200 hover:bg-raised">{{ $secondaryText }}</a>
            </div>

        </div>

        <!--
            The product window — pure HTML and Tailwind, aria-hidden decoration.
            Left: the connected repos and channels. Middle: a merged PR feed
            becoming a drafted release. Right: the publish panel.
        -->
        <div class="reveal-5 relative mt-16 sm:mt-20" data-reveal aria-hidden="true">
            <div class="glow pointer-events-none absolute -inset-x-10 -top-16 bottom-0" ></div>

            <div class="pointer-events-none absolute -top-2.5 -left-2.5 max-lg:hidden"><span class="handle block"></span></div>
            <div class="pointer-events-none absolute -top-2.5 -right-2.5 max-lg:hidden"><span class="handle block"></span></div>

            <div class="pointer-events-none relative select-none overflow-hidden rounded-2xl border border-line bg-panel shadow-2xl shadow-ink/15">
                <div class="flex items-center gap-2 border-b border-line px-5 py-3">
                    <span class="size-2.5 rounded-full bg-line"></span>
                    <span class="size-2.5 rounded-full bg-line"></span>
                    <span class="size-2.5 rounded-full bg-line"></span>
                    <span class="mx-auto flex items-center gap-2 rounded-md border border-line bg-canvas px-8 py-1 font-mono text-[11px] text-faint">
                        <svg viewBox="0 0 20 20" class="size-3 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd"/></svg>
                        app.signal.so/releases/v2.14
                    </span>
                </div>

                <div class="grid lg:grid-cols-[13rem_1fr] xl:grid-cols-[13rem_1fr_16rem]">

                    <!-- Left rail: sources and channels -->
                    <div class="border-r border-line bg-canvas/60 p-3 max-lg:hidden">
                        <div class="flex items-center gap-2 px-2 py-1.5">
                            <span class="flex size-5 items-center justify-center rounded-md bg-ink text-[10px] font-bold text-canvas">A</span>
                            <span class="text-[13px] font-semibold text-ink">Acme Inc</span>
                            <svg viewBox="0 0 16 16" class="size-3 fill-faint" aria-hidden="true"><path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                        </div>

                        <p class="mt-4 px-2 font-mono text-[10px] tracking-widest text-faint uppercase">Sources</p>
                        <div class="mt-1.5 flex flex-col gap-0.5 text-[13px] text-muted">
                            <span class="flex items-center gap-2.5 rounded-md bg-raised px-2 py-1.5 font-medium text-ink">
                                <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
                                acme/web
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 16 16" class="size-3.5 fill-current" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
                                acme/api
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z"/></svg>
                                Linear · ACM
                            </span>
                        </div>

                        <p class="mt-5 px-2 font-mono text-[10px] tracking-widest text-faint uppercase">Channels</p>
                        <div class="mt-1.5 flex flex-col gap-0.5 text-[13px] text-muted">
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M12.232 4.232a2.5 2.5 0 0 1 3.536 3.536l-1.225 1.224a.75.75 0 0 0 1.061 1.06l1.224-1.224a4 4 0 0 0-5.656-5.656l-3 3a4 4 0 0 0 .225 5.865.75.75 0 0 0 .977-1.138 2.5 2.5 0 0 1-.142-3.667l3-3Z"/><path d="M11.603 7.963a.75.75 0 0 0-.977 1.138 2.5 2.5 0 0 1 .142 3.667l-3 3a2.5 2.5 0 0 1-3.536-3.536l1.225-1.224a.75.75 0 0 0-1.061-1.06l-1.224 1.224a4 4 0 1 0 5.656 5.656l3-3a4 4 0 0 0-.225-5.865Z"/></svg>
                                changelog.acme.com
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 0 0 2 4.25v11.5A2.25 2.25 0 0 0 4.25 18h11.5A2.25 2.25 0 0 0 18 15.75V4.25A2.25 2.25 0 0 0 15.75 2H4.25ZM6 13.25V6.75a.75.75 0 0 1 1.28-.53l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.28-.53Z" clip-rule="evenodd"/></svg>
                                What's New widget
                            </span>
                            <span class="flex items-center gap-2.5 px-2 py-1.5">
                                <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z"/><path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z"/></svg>
                                Email digest
                            </span>
                        </div>
                    </div>

                    <!-- Middle: merged PRs becoming a drafted release -->
                    <div class="min-w-0 bg-panel">
                        <div class="flex items-center gap-2.5 border-b border-line px-5 py-3 text-[13px]">
                            <span class="rounded-md border border-line bg-canvas px-2 py-0.5 font-mono text-[11px] text-ink">v2.14</span>
                            <span class="truncate font-medium text-ink">March release</span>
                            <span class="ml-auto flex items-center gap-1.5 rounded-full bg-accent-soft px-2.5 py-1 text-[11px] font-semibold text-accent">
                                <span class="size-1.5 animate-pulse rounded-full bg-accent"></span>
                                Drafting
                            </span>
                        </div>

                        <div class="px-5 py-5 sm:px-7">
                            <p class="font-mono text-[10px] tracking-widest text-faint uppercase">Merged this week</p>

                            <div class="mt-3 flex flex-col gap-2 text-[13px]">
                                <p class="flex items-center gap-2.5">
                                    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-1.5 0V2.75A.75.75 0 0 1 5.75 2Zm4.5 0a2.25 2.25 0 0 0-2.25 2.25v.5a.75.75 0 0 0 1.5 0v-.5a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v6.19a2.25 2.25 0 1 0 1.5 0V4.25A2.25 2.25 0 0 0 10.75 2h-.5Z" clip-rule="evenodd"/></svg>
                                    <span class="truncate text-muted"><span class="font-mono text-[12px] text-faint">#412</span> <span class="text-ink">Rebuild checkout to remove the payment race</span></span>
                                    <span class="ml-auto shrink-0 rounded border border-line bg-canvas px-1.5 py-px font-mono text-[10px] text-faint">merged</span>
                                </p>
                                <p class="flex items-center gap-2.5">
                                    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-1.5 0V2.75A.75.75 0 0 1 5.75 2Zm4.5 0a2.25 2.25 0 0 0-2.25 2.25v.5a.75.75 0 0 0 1.5 0v-.5a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v6.19a2.25 2.25 0 1 0 1.5 0V4.25A2.25 2.25 0 0 0 10.75 2h-.5Z" clip-rule="evenodd"/></svg>
                                    <span class="truncate text-muted"><span class="font-mono text-[12px] text-faint">#415</span> <span class="text-ink">Add CSV export to the members table</span></span>
                                    <span class="ml-auto shrink-0 rounded border border-line bg-canvas px-1.5 py-px font-mono text-[10px] text-faint">merged</span>
                                </p>
                                <p class="flex items-center gap-2.5 max-sm:hidden">
                                    <svg viewBox="0 0 16 16" class="size-3.5 shrink-0 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-1.5 0V2.75A.75.75 0 0 1 5.75 2Zm4.5 0a2.25 2.25 0 0 0-2.25 2.25v.5a.75.75 0 0 0 1.5 0v-.5a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v6.19a2.25 2.25 0 1 0 1.5 0V4.25A2.25 2.25 0 0 0 10.75 2h-.5Z" clip-rule="evenodd"/></svg>
                                    <span class="truncate text-muted"><span class="font-mono text-[12px] text-faint">#418</span> <span class="text-ink">Ship dark mode for embedded widgets</span></span>
                                    <span class="ml-auto shrink-0 rounded border border-line bg-canvas px-1.5 py-px font-mono text-[10px] text-faint">merged</span>
                                </p>
                            </div>

                            <div class="mt-5 flex items-center gap-3" >
                                <span class="h-px flex-1 bg-line"></span>
                                <span class="flex items-center gap-1.5 font-mono text-[10px] tracking-widest text-accent uppercase">
                                    <svg viewBox="0 0 20 20" class="size-3 fill-current" aria-hidden="true"><path d="M15.98 1.804a1 1 0 0 0-1.96 0l-.24 1.192a1 1 0 0 1-.784.785l-1.192.238a1 1 0 0 0 0 1.962l1.192.238a1 1 0 0 1 .785.785l.238 1.192a1 1 0 0 0 1.962 0l.238-1.192a1 1 0 0 1 .785-.785l1.192-.238a1 1 0 0 0 0-1.962l-1.192-.238a1 1 0 0 1-.785-.785l-.238-1.192ZM6.949 5.684a1 1 0 0 0-1.898 0l-.683 2.051a1 1 0 0 1-.633.633l-2.051.683a1 1 0 0 0 0 1.898l2.051.684a1 1 0 0 1 .633.632l.683 2.051a1 1 0 0 0 1.898 0l.683-2.051a1 1 0 0 1 .633-.633l2.051-.683a1 1 0 0 0 0-1.898l-2.051-.683a1 1 0 0 1-.633-.633l-.683-2.051Z"/></svg>
                                    Signal drafts
                                </span>
                                <span class="h-px flex-1 bg-line"></span>
                            </div>

                            <div class="mt-4 rounded-xl border border-line bg-canvas/60 p-4">
                                <p class="text-[15px] font-semibold text-ink">Faster checkout, CSV exports, and widget dark mode</p>
                                <div class="mt-2.5 flex flex-col gap-1.5 text-[13px]/5 text-muted">
                                    <p class="flex gap-2"><span class="mt-2 size-1 shrink-0 rounded-full bg-accent"></span>Checkout is now a single round trip — no more double-charged carts on slow connections.</p>
                                    <p class="flex gap-2"><span class="mt-2 size-1 shrink-0 rounded-full bg-accent"></span>Export any members view to CSV, filters included.</p>
                                    <p class="flex gap-2 max-sm:hidden"><span class="mt-2 size-1 shrink-0 rounded-full bg-accent"></span>The What's New widget now follows your app's dark mode.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right rail: the publish panel -->
                    <div class="relative border-l border-line bg-canvas/40 max-xl:hidden">
                        <div class="border-b border-line px-5 py-3">
                            <p class="font-mono text-[10px] tracking-widest text-faint uppercase">Publish to</p>
                        </div>

                        <div class="flex flex-col gap-3 px-5 py-4 text-[13px]">
                            <p class="flex items-center gap-2.5 text-ink">
                                <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                                Hosted changelog
                            </p>
                            <p class="flex items-center gap-2.5 text-ink">
                                <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                                What's New widget
                            </p>
                            <p class="flex items-center gap-2.5 text-ink">
                                <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                                Email digest
                            </p>
                            <p class="flex items-center gap-2.5 text-muted">
                                <svg viewBox="0 0 20 20" class="size-4 fill-line" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                                Slack #product
                            </p>
                            <p class="flex items-center gap-2.5 text-muted">
                                <svg viewBox="0 0 20 20" class="size-4 fill-line" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"/></svg>
                                RSS feed
                            </p>

                            <span class="mt-2 flex justify-center rounded-lg bg-accent px-4 py-2.5 text-[13px] font-semibold text-accent-ink shadow-md shadow-accent/25">Publish release</span>
                            <p class="text-center text-[11px] text-faint">Scheduled · Today, 4:00 PM</p>
                        </div>

                        <div class="mx-5 mb-5 rounded-xl border border-line bg-panel p-4">
                            <p class="font-mono text-[10px] tracking-widest text-faint uppercase">Last release</p>
                            <p class="mt-2 flex items-center gap-2 text-[13px] text-ink">
                                <span class="font-mono text-faint">v2.13</span>
                                <span class="truncate">Comments on updates</span>
                            </p>
                            <p class="mt-2.5 flex items-center gap-3 text-[12px] text-muted">
                                <span class="flex items-center gap-1">👍 148</span>
                                <span class="flex items-center gap-1">🎉 62</span>
                                <span class="flex items-center gap-1">💬 17</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Fade the window into the canvas -->
            <div class="pointer-events-none absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-canvas to-transparent"></div>
        </div>
    </div>
</section>
