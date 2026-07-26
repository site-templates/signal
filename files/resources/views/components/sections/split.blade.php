@props([
    'eyebrow' => 'Release notes',
    'heading' => 'From merged to announced',
    'body' => 'Signal reads every merged pull request, filters out the internal noise, and drafts the customer-facing story in your voice.',
    'stat' => '20 minutes of writing → one approve click',
    'visual' => 'notes',
    'reverse' => '0',
])
<!--
    An alternating feature split: copy on one side, a small CSS-built visual
    on the other. The visual field picks one of four mocks — notes, widget,
    feedback, or notify — and reverse flips the columns on wide screens.
-->
<section id="split" class="py-14 sm:py-16">
    <div class="mx-auto grid w-full max-w-6xl items-center gap-12 px-6 lg:grid-cols-2 lg:gap-16">

        @if ($reverse)
        <div class="max-lg:order-2" data-reveal>
        @else
        <div data-reveal>
        @endif
            <p class="font-mono text-[11px] font-medium tracking-widest text-accent uppercase">{{ $eyebrow }}</p>
            <h2 class="font-display mt-4 text-3xl font-bold tracking-tight text-balance sm:text-4xl">{{ $heading }}</h2>
            <p class="mt-4 text-lg/8 text-pretty text-muted">{{ $body }}</p>
            <p class="mt-6 inline-flex items-center gap-2.5 rounded-full border border-line bg-panel px-4 py-2 text-sm font-medium text-ink shadow-sm shadow-ink/5">
                <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path d="M11.983 1.907a.75.75 0 0 0-1.292-.657l-8.5 9.5A.75.75 0 0 0 2.75 12h6.572l-1.305 6.093a.75.75 0 0 0 1.292.657l8.5-9.5A.75.75 0 0 0 17.25 8h-6.572l1.305-6.093Z"/></svg>
                {{ $stat }}
            </p>
        </div>

        @if ($reverse)
        <div class="max-lg:order-1" data-reveal aria-hidden="true">
        @else
        <div data-reveal aria-hidden="true">
        @endif
            <div class="pointer-events-none relative select-none rounded-2xl border border-line bg-panel p-5 shadow-xl shadow-ink/10">
                @if ($visual == 'notes')
                <div class="flex flex-col gap-3">
                    <p class="flex items-center gap-2.5 text-[13px]">
                        <span class="rounded border border-line bg-canvas px-1.5 py-px font-mono text-[11px] text-faint">#412</span>
                        <span class="truncate text-muted">fix: debounce checkout submit, drop dup charge path</span>
                        <span class="ml-auto shrink-0 rounded border border-line bg-canvas px-1.5 py-px font-mono text-[10px] text-faint">merged</span>
                    </p>
                    <p class="flex items-center justify-center gap-2 font-mono text-[10px] tracking-widest text-accent uppercase">
                        <svg viewBox="0 0 16 16" class="size-3 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M8 2a.75.75 0 0 1 .75.75v8.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.22 3.22V2.75A.75.75 0 0 1 8 2Z" clip-rule="evenodd"/></svg>
                        Signal rewrites
                    </p>
                    <div class="rounded-xl border border-line bg-canvas/60 p-4">
                        <p class="text-[14px] font-semibold text-ink">Checkout is faster and safer</p>
                        <p class="mt-1.5 text-[13px]/5 text-muted">Purchases now complete in a single round trip — even on a flaky connection, you'll never see a duplicate charge.</p>
                    </div>
                </div>
                @endif
                @if ($visual == 'widget')
                <div class="flex flex-col gap-2.5">
                    <p class="flex items-center justify-between">
                        <span class="text-[13px] font-semibold text-ink">What's New</span>
                        <span class="rounded-full bg-accent-soft px-2 py-0.5 font-mono text-[10px] font-semibold text-accent">2 new</span>
                    </p>
                    <p class="rounded-lg border border-line bg-canvas/60 px-3.5 py-3 text-[13px] font-medium text-ink">Faster checkout, fewer retries</p>
                    <p class="rounded-lg border border-line bg-canvas/60 px-3.5 py-3 text-[13px] font-medium text-ink">CSV export for members</p>
                    <p class="rounded-lg bg-ink px-3.5 py-2.5 text-center font-mono text-[11px] text-canvas">&lt;script src="cdn.signal.so/widget.js"&gt;</p>
                </div>
                @endif
                @if ($visual == 'feedback')
                <div class="flex flex-col gap-3">
                    <p class="flex items-center gap-3 text-[13px] text-muted">
                        <span class="flex items-center gap-1 rounded-full border border-line bg-canvas px-2.5 py-1">👍 148</span>
                        <span class="flex items-center gap-1 rounded-full border border-line bg-canvas px-2.5 py-1">🎉 62</span>
                        <span class="flex items-center gap-1 rounded-full border border-accent bg-accent-soft px-2.5 py-1 font-medium text-accent">💬 17</span>
                    </p>
                    <div class="rounded-xl border border-line bg-canvas/60 p-4">
                        <p class="flex items-center gap-2 text-[13px]">
                            <img src="https://assets.ui.sh/avatars/11.webp?size=160" alt="" class="size-5 rounded-full object-cover" loading="lazy">
                            <span class="font-medium text-ink">jordan@basecoat.dev</span>
                        </p>
                        <p class="mt-2 text-[13px]/5 text-muted">Love this — any chance exports could include custom fields too?</p>
                    </div>
                    <p class="flex items-center gap-2 self-end rounded-lg bg-ink px-3 py-1.5 font-mono text-[11px] text-canvas">
                        <svg viewBox="0 0 16 16" class="size-3 fill-accent" aria-hidden="true"><path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/></svg>
                        Create issue in Linear
                    </p>
                </div>
                @endif
                @if ($visual == 'notify')
                <div class="flex flex-col gap-2.5">
                    <p class="flex items-center gap-3 rounded-lg border border-line bg-canvas/60 px-3.5 py-2.5 text-[13px]">
                        <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z"/><path d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z"/></svg>
                        <span class="text-ink">Email digest</span>
                        <span class="ml-auto font-mono text-[11px] text-faint">2,315 subscribers</span>
                    </p>
                    <p class="flex items-center gap-3 rounded-lg border border-line bg-canvas/60 px-3.5 py-2.5 text-[13px]">
                        <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 0 0 1.28.53l3.58-3.579a.78.78 0 0 1 .527-.224 41.202 41.202 0 0 0 5.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0 0 10 2Z" clip-rule="evenodd"/></svg>
                        <span class="text-ink">Slack · #product-updates</span>
                        <span class="ml-auto font-mono text-[11px] text-faint">posted</span>
                    </p>
                    <p class="flex items-center gap-3 rounded-lg border border-line bg-canvas/60 px-3.5 py-2.5 text-[13px]">
                        <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path d="M3.75 3a.75.75 0 0 0-.75.75v.5c0 .414.336.75.75.75H4c6.075 0 11 4.925 11 11v.25c0 .414.336.75.75.75h.5a.75.75 0 0 0 .75-.75V16C17 8.82 11.18 3 4 3h-.25Z"/><path d="M3 8.75A.75.75 0 0 1 3.75 8H4a8 8 0 0 1 8 8v.25a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75V16a6 6 0 0 0-6-6h-.25A.75.75 0 0 1 3 9.25v-.5ZM7 15a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/></svg>
                        <span class="text-ink">RSS feed</span>
                        <span class="ml-auto font-mono text-[11px] text-faint">live</span>
                    </p>
                </div>
                @endif
            </div>
        </div>

    </div>
</section>
