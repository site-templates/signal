<x-layouts.main title="Features" description="Everything Signal does between merged and announced — AI release notes, the hosted changelog, the What's New widget, feedback, and delivery.">
    <x-sections.page-header eyebrow="Features" heading="Everything between merged and announced" body="Four surfaces, one pipeline: the draft, the changelog, the widget, and the feedback loop."/>
    <x-sections.split/>
    <x-sections.split eyebrow="The widget" heading="Updates inside your product" body="The What's New widget badges unseen releases right in your app's chrome. Users read the update where they can act on it — feature adoption follows." stat="2× feature adoption on launch week" visual="widget" reverse="1"/>
    <x-sections.split eyebrow="Feedback" heading="Every release starts a conversation" body="Reactions, comments, and feature requests attach to the update itself. Promote a comment to a tracker issue in one click, with the customer's context riding along." stat="Feedback lands in your tracker, not a void" visual="feedback"/>
    <x-sections.split eyebrow="Delivery" heading="Announce once, reach everywhere" body="Email digests, Slack posts, and RSS go out with the release — each channel on its own schedule, every one branded as yours." stat="Five channels from one publish click" visual="notify" reverse="1"/>
    <x-sections.faq :items="$faqs"/>
    <x-sections.cta/>
</x-layouts.main>
