<x-layouts.post title="Why we built Signal" description="We shipped every week and told no one. The story of the internal tool that became a product." category="Company" date="Jan 15, 2026" readTime="4 min read" author="Jonah Reyes" authorImage="https://assets.ui.sh/avatars/11.webp?size=160" image="https://assets.ui.sh/wallpapers/silk.webp?variant=molten-amber">
    <p class="lead">Our last startup had a healthy shipping culture and a dead changelog. The gap between those two facts is why Signal exists.</p>

    <p>We merged forty pull requests in an average week. Real improvements — faster pages, fixed edge cases, small features customers had asked for by name. And every week, the news of all that work reached approximately no one. The changelog was four months stale. The "what's new" email went out when someone remembered, which was quarterly, which was never.</p>

    <h2>The embarrassing part</h2>
    <p>Customers kept asking support for features that already existed. Sales kept demoing from memory of a product three versions old. We once lost a renewal to a competitor whose pitch was, in part, a feature we had shipped eight months earlier. The work was done. The <em>telling</em> was the failure.</p>

    <h2>Why writing it never worked</h2>
    <p>Everyone's fix is a process: a rotating changelog duty, a Friday reminder, a template. Ours lasted five weeks. The problem is structural — the person with the context (the engineer who merged it) is not the person with the voice (whoever talks to customers), and the handoff between them is exactly the kind of low-urgency task that dies on a Friday afternoon.</p>

    <h2>The tool we wanted</h2>
    <p>So we built the obvious thing: a bot that read our merged PRs and wrote the first draft in customer language. The rule was one click — if approving the week's notes took more than a coffee's worth of attention, we'd failed. Then the drafts got good, the widget followed so updates showed up in-app, and reactions followed so we could hear something back.</p>

    <p>Two other founders saw our changelog and asked what ran it. That's the whole origin story — <a href="/changelog">the changelog you can read today</a> is the product, running on itself, the way it has since week one.</p>

    <h2>What we believe</h2>
    <ul>
        <li>Shipping without telling is half the job, done twice as slowly.</li>
        <li>The draft should come to you; only judgment should be human.</li>
        <li>A changelog is a conversation, not a broadcast — the replies are the roadmap.</li>
    </ul>
</x-layouts.post>
