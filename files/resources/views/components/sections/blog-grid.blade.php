@props([
    'items' => [],
])
<!--
    The blog index: two-column rounded post cards from
    resources/data/collections/posts.json — author row up top, the cover
    image, then date and title, matching the reference blog treatment.
-->
<section id="blog-grid" class="pt-12 pb-20 sm:pb-28">
    <div class="mx-auto w-full max-w-4xl px-6">

        <div class="grid gap-6 sm:grid-cols-2">
            @foreach ($items as $post)
                <a href="{{ $post->link }}" class="group rounded-2xl border border-line bg-panel p-3 shadow-sm shadow-ink/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-ink/10" data-reveal>
                    <span class="flex items-center justify-between gap-3 px-2 py-2">
                        <span class="flex items-center gap-2">
                            <img src="{{ $post->authorImage }}" alt="" class="size-6 rounded-full object-cover" loading="lazy">
                            <span class="text-[13px] font-medium text-ink">{{ $post->author }}</span>
                        </span>
                        <span class="flex items-center gap-1.5 text-[12px] text-faint">
                            <svg viewBox="0 0 20 20" class="size-3.5 fill-current" aria-hidden="true"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z" clip-rule="evenodd"/></svg>
                            {{ $post->readTime }}
                        </span>
                    </span>
                    <img src="{{ $post->image }}" alt="{{ $post->imageAlt }}" class="aspect-[16/9] w-full rounded-xl border border-line object-cover" loading="lazy">
                    <span class="block px-2 pt-4 pb-2">
                        <span class="block text-[13px] text-faint">{{ $post->date }}</span>
                        <span class="font-display mt-1.5 block text-lg/6 font-semibold text-balance text-ink transition-colors duration-200 group-hover:text-accent">{{ $post->title }}</span>
                        <span class="mt-2 block text-sm/6 text-muted">{{ $post->description }}</span>
                    </span>
                </a>
            @endforeach
        </div>

    </div>
</section>
