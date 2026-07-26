<x-layouts.main title="Blog" description="Insights and updates from the Signal team — on changelogs, release communication, and closing the feedback loop.">
    <x-sections.page-header showIcon="1" eyebrow="Blog" heading="Insights and updates" body="Notes on shipping, telling people about it, and listening to what comes back."/>
    <x-sections.blog-grid :items="$posts"/>
    <x-sections.cta/>
</x-layouts.main>
