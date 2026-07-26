@props([
    'items' => [],
    'subscribeText' => 'Subscribe via RSS',
    'subscribeLink' => '#',
])
<!--
    The release timeline from resources/data/collections/releases.json —
    Signal's own changelog, running on the product it sells. Version pill and
    date in the left column, the release note on the right.
-->
<section id="changelog-list" class="pt-10 pb-20 sm:pb-28">
    <div class="mx-auto w-full max-w-3xl px-6">

        <p class="flex justify-end" data-reveal>
            <a href="{{ $subscribeLink }}" class="flex items-center gap-2 text-sm font-medium text-muted transition-colors duration-200 hover:text-ink">
                <svg viewBox="0 0 20 20" class="size-4 fill-accent" aria-hidden="true"><path d="M3.75 3a.75.75 0 0 0-.75.75v.5c0 .414.336.75.75.75H4c6.075 0 11 4.925 11 11v.25c0 .414.336.75.75.75h.5a.75.75 0 0 0 .75-.75V16C17 8.82 11.18 3 4 3h-.25Z"/><path d="M3 8.75A.75.75 0 0 1 3.75 8H4a8 8 0 0 1 8 8v.25a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75V16a6 6 0 0 0-6-6h-.25A.75.75 0 0 1 3 9.25v-.5ZM7 15a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/></svg>
                {{ $subscribeText }}
            </a>
        </p>

        <div class="mt-8 flex flex-col">
            @foreach ($items as $release)
                <article class="grid gap-6 border-t border-line py-10 sm:grid-cols-[9rem_1fr]" data-reveal>
                    <div>
                        <p class="inline-flex rounded-md border border-line bg-panel px-2 py-1 font-mono text-[12px] font-semibold text-ink">{{ $release->version }}</p>
                        <p class="mt-2.5 text-[13px] text-faint">{{ $release->date }}</p>
                        <p class="mt-2 inline-flex rounded-full bg-accent-soft px-2.5 py-0.5 text-[11px] font-semibold text-accent">{{ $release->tag }}</p>
                    </div>
                    <div>
                        <h2 class="font-display text-xl font-semibold tracking-tight text-ink">{{ $release->title }}</h2>
                        <p class="mt-3 text-[15px]/7 text-muted">{{ $release->body }}</p>
                        <div class="mt-4 flex flex-col gap-1.5">
                            @foreach ($release->points as $point)
                                <p class="flex gap-2.5 text-[15px]/7 text-muted"><span class="mt-3 size-1 shrink-0 rounded-full bg-accent"></span>{{ $point }}</p>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>
