@props(['title' => 'Home', 'description' => '', 'showRulers' => '1'])
<!doctype html>
<html lang="en" class="scroll-smooth {{ $site->theme->appearance_class ?? '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} · {{ $site->name }}</title>
    <meta name="description" content="{{ $description }}">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Inter carries the whole site; the system mono face handles labels and code. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ $site->theme->fonts_url ?? 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap' }}" rel="stylesheet">

    <!-- Loads Tailwind and inlines the theme tokens plus resources/css/site.css (canvas motifs + motion) -->
    @vite(['resources/css/theme.css', 'resources/css/site.css'])

    <!-- Flag JS support before first paint so scroll reveals never flash (see main.js) -->
    <script>document.documentElement.classList.add('js')</script>
    <script src="/js/main.js" defer></script>
</head>
<body class="min-h-dvh bg-canvas font-sans text-ink antialiased">

    <!-- The design-canvas frame: faint ruler columns pinned to both viewport edges. -->
    @if ($showRulers)
    <div class="pointer-events-none fixed inset-y-0 left-0 z-0 max-lg:hidden" aria-hidden="true">
        <div class="ruler ruler-left h-full"></div>
    </div>
    <div class="pointer-events-none fixed inset-y-0 right-0 z-0 max-lg:hidden" aria-hidden="true">
        <div class="ruler h-full"></div>
    </div>
    @endif

    <!-- The site-wide nav. Its links live in resources/data/site.json (nav_links); the markup is components/nav.blade.php. -->
    <x-nav :links="$site->nav_links"/>

    <!-- The fixed header floats over this; each page's opening section carries its own top padding. -->
    <main class="relative">
        {{ $slot }}
    </main>

    <x-footer :product="$site->footer_product" :resources="$site->footer_resources" :company="$site->footer_company"/>

</body>
</html>
