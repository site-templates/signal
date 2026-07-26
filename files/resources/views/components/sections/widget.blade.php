@props([
    'items' => [],
    'eyebrow' => 'The widget',
    'heading' => 'Drop “What’s New” into your app',
    'body' => 'One script tag. Your users get a badge when something ships, a feed when they click, and a place to react — without ever leaving your product.',
    'snippet' => '<script src="https://cdn.signal.so/widget.js" data-project="acme"></script>',
    'snippetLabel' => 'Paste before the closing body tag',
    'badgeLabel' => "What's New",
])
<!--
    The embed showcase, split two ways: the copy and the one-line embed
    snippet on the left, and a CSS-built mock of a host app with the Signal
    widget popover open on the right. The popover's update rows come from
    resources/data/collections/widgetUpdates.json.
-->
<section id="widget" class="relative overflow-hidden py-20 sm:py-28">
    <div class="mx-auto grid w-full max-w-6xl items-center gap-14 px-6 lg:grid-cols-2">

        <div data-reveal>
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="font-display mt-4 text-3xl font-bold tracking-tight text-balance sm:text-[2.5rem] sm:leading-[1.15]">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>

            <div class="mt-8 rounded-xl border border-line bg-ink p-1.5 shadow-lg shadow-ink/15">
                <p class="flex items-center justify-between gap-4 px-3.5 py-2">
                    <span class="font-mono text-[11px] tracking-widest text-canvas/50 uppercase">{{ $snippetLabel }}</span>
                    <svg viewBox="0 0 20 20" class="size-4 fill-canvas/50" aria-hidden="true"><path d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z"/><path d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z"/></svg>
                </p>
                <p class="overflow-x-auto rounded-lg bg-canvas/5 px-3.5 py-3 font-mono text-[13px] whitespace-nowrap text-canvas/90">{{ $snippet }}</p>
            </div>
        </div>

        <!-- The host-app mock with the widget popover open. Decoration only. -->
        <div class="relative" data-reveal aria-hidden="true">
            <div class="pointer-events-none relative select-none overflow-hidden rounded-2xl border border-line bg-panel shadow-2xl shadow-ink/15">
                <div class="flex items-center justify-between border-b border-line px-5 py-3">
                    <span class="flex items-center gap-2 text-[13px] font-semibold text-ink">
                        <span class="size-4 rounded bg-ink"></span>
                        Acme Dashboard
                    </span>
                    <span class="relative flex items-center gap-3">
                        <span class="h-1.5 w-14 rounded-full bg-raised"></span>
                        <span class="relative flex size-7 items-center justify-center rounded-full border border-line bg-canvas">
                            <svg viewBox="0 0 24 24" class="size-3.5 text-accent" fill="currentColor"><g transform="rotate(12 12 12)"><rect x="3.4" y="12" width="3.8" height="8.6" rx="1.9"/><rect x="10.1" y="7.8" width="3.8" height="12.8" rx="1.9"/><rect x="16.8" y="3.4" width="3.8" height="17.2" rx="1.9"/></g></svg>
                            <span class="absolute -top-1 -right-1 flex size-4 items-center justify-center rounded-full bg-accent font-mono text-[9px] font-bold text-accent-ink">3</span>
                        </span>
                    </span>
                </div>

                <div class="grid grid-cols-[7rem_1fr] max-sm:grid-cols-1">
                    <div class="flex flex-col gap-2 border-r border-line bg-canvas/60 p-4 max-sm:hidden">
                        <span class="h-1.5 w-full rounded-full bg-raised"></span>
                        <span class="h-1.5 w-4/5 rounded-full bg-raised"></span>
                        <span class="h-1.5 w-full rounded-full bg-raised"></span>
                        <span class="h-1.5 w-3/5 rounded-full bg-raised"></span>
                    </div>
                    <div class="relative min-h-72 p-4">
                        <span class="block h-1.5 w-2/5 rounded-full bg-raised"></span>
                        <span class="mt-3 grid grid-cols-3 gap-3">
                            <span class="h-16 rounded-lg border border-line bg-canvas/70"></span>
                            <span class="h-16 rounded-lg border border-line bg-canvas/70"></span>
                            <span class="h-16 rounded-lg border border-line bg-canvas/70"></span>
                        </span>

                        <!-- The widget popover -->
                        <div class="absolute top-3 right-3 w-64 rounded-xl border border-line bg-panel shadow-2xl shadow-ink/20">
                            <p class="flex items-center justify-between border-b border-line px-4 py-2.5">
                                <span class="text-[13px] font-semibold text-ink">{{ $badgeLabel }}</span>
                                <span class="rounded-full bg-accent-soft px-2 py-0.5 font-mono text-[10px] font-semibold text-accent">3 new</span>
                            </p>
                            <div class="flex flex-col">
                                @foreach ($items as $item)
                                    <p class="flex flex-col gap-1 border-b border-line px-4 py-3 last:border-b-0">
                                        <span class="flex items-center gap-2">
                                            <span class="rounded border border-line bg-canvas px-1.5 py-px font-mono text-[9px] tracking-wider text-faint uppercase">{{ $item->tag }}</span>
                                            <span class="font-mono text-[10px] text-faint">{{ $item->date }}</span>
                                        </span>
                                        <span class="text-[13px] font-medium text-ink">{{ $item->title }}</span>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
