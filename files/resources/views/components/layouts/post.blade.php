@props([
    'title' => 'Untitled post',
    'description' => '',
    'category' => 'Product',
    'date' => 'Jan 1, 2026',
    'readTime' => '4 min read',
    'author' => 'Signal Team',
    'authorImage' => 'https://assets.ui.sh/avatars/2.webp?size=160',
    'image' => 'https://assets.ui.sh/wallpapers/silk.webp?variant=molten-amber',
    'imageAlt' => '',
    'backText' => 'Back to blog',
    'backLink' => '/blog',
])
<x-layouts.main :title="$title" :description="$description">
<article class="relative pt-40 pb-20 sm:pt-48 sm:pb-28">
    <div class="mx-auto w-full max-w-3xl px-6">

        <a href="{{ $backLink }}" class="group inline-flex items-center gap-2 text-sm font-medium text-muted transition-colors duration-200 hover:text-ink" data-reveal>
            <svg viewBox="0 0 16 16" class="size-4 fill-current transition-transform duration-200 group-hover:-translate-x-0.5" aria-hidden="true"><path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd"/></svg>
            {{ $backText }}
        </a>

        <p class="reveal-1 mt-8 font-mono text-[11px] font-medium tracking-widest text-accent uppercase" data-reveal>{{ $category }}</p>
        <h1 class="font-display reveal-1 mt-3 text-4xl leading-[1.1] font-bold tracking-tight text-balance sm:text-5xl" data-reveal>{{ $title }}</h1>

        <div class="reveal-2 mt-7 flex flex-wrap items-center gap-x-3 gap-y-2 text-sm text-muted" data-reveal>
            <span class="flex items-center gap-2">
                <img src="{{ $authorImage }}" alt="" class="size-6 rounded-full object-cover" loading="lazy">
                <span class="font-medium text-ink">{{ $author }}</span>
            </span>
            <span class="text-faint">·</span>
            <span>{{ $date }}</span>
            <span class="text-faint">·</span>
            <span>{{ $readTime }}</span>
        </div>

        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="reveal-3 mt-10 aspect-[2/1] w-full rounded-2xl border border-line object-cover" data-reveal>

        <div class="prose reveal-4 mt-12" data-reveal>
            {{ $slot }}
        </div>

    </div>
</article>
</x-layouts.main>
