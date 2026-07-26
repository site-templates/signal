<x-layouts.main title="Automated changelogs and release notes" description="Turn merged pull requests into polished release notes, publish a branded changelog, and embed product updates anywhere.">
    <x-sections.hero :avatars="$site->hero_avatars" :integrations="$integrations"/>
    <x-sections.logos :items="$customers"/>
    <x-sections.features :items="$features"/>
    <x-sections.steps :items="$steps"/>
    <x-sections.widget :items="$widgetUpdates"/>
    <x-sections.testimonials :items="$testimonials"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.cta/>
</x-layouts.main>
