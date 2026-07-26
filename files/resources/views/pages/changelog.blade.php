<x-layouts.main title="Changelog" description="What's new in Signal — every release, drafted and published with Signal itself.">
    <x-sections.page-header showIcon="1" eyebrow="Changelog" heading="What's new in Signal" body="Every release below was drafted from our merged PRs and published with Signal itself."/>
    <x-sections.changelog-list :items="$releases"/>
    <x-sections.cta heading="Want a changelog like this one?" body="This page is Signal, running on Signal. Yours can look this good by Friday." secondaryText="See pricing" secondaryLink="/pricing"/>
</x-layouts.main>
