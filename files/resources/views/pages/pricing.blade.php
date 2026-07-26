<x-layouts.main title="Pricing" description="Start free with one project, the hosted changelog, and the widget. Upgrade for AI release notes, delivery channels, and custom domains.">
    <x-sections.page-header eyebrow="Pricing" heading="Plans that scale with your shipping" body="Free for your first project. Paid when the whole team wants in."/>
    <x-sections.pricing eyebrow="Plans" :items="$plans"/>
    <x-sections.testimonials :items="$testimonials"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.cta/>
</x-layouts.main>
