<x-layouts.post title="How Northwind closed the feedback loop" description="From merge to megaphone to roadmap: how one team wired Signal's reactions and comments straight into their planning cycle." category="Customers" date="Feb 3, 2026" readTime="7 min read" author="Priya Raghavan" authorImage="https://assets.ui.sh/avatars/8.webp?size=160" image="https://assets.ui.sh/wallpapers/silk.webp?variant=platinum-flow">
    <p class="lead">Northwind ships a project-management tool to 40,000 teams. Eighteen months ago their changelog was a Notion page nobody updated. Today it's the first input to their planning cycle. Here's the wiring.</p>

    <h2>Step one: stop writing, start approving</h2>
    <p>The Notion page died the way they all do — the engineer who cared left, and the habit left with them. Northwind's fix was removing the writing step entirely: Signal drafts from merged PRs in their monorepo, path-mapped so each product's changes land in the right feed. A product manager spends five minutes on Friday approving the week's draft. That's the entire process.</p>

    <h2>Step two: put reactions on everything</h2>
    <p>Every published update carries reactions and comments. The numbers surprised them immediately: their most-thumbed release of the quarter was a bug fix for a timezone edge case — something the team considered too small to mention. <strong>The audience votes on what matters, and it doesn't vote the way the roadmap assumed.</strong></p>

    <h2>Step three: route comments to the tracker</h2>
    <p>The load-bearing feature is the smallest one. When a customer comments "any chance exports could include custom fields?", whoever's triaging clicks once and it becomes a Linear issue — with the customer's email, plan, and the release they were reading attached as context.</p>

    <blockquote>
        We used to run quarterly surveys to learn what customers wanted. Now the changelog tells us weekly, and the sample is people engaged enough to read release notes.
        <cite>Dana Whitfield, Head of Product at Northwind</cite>
    </blockquote>

    <h2>The loop, closed</h2>
    <p>Watch what happens across a full cycle: a PR merges → Signal announces it → customers react and ask → requests land in Linear with receipts → the next cycle ships the winners → and the changelog announces those too, tagged with the names of the people who asked. Northwind now @-mentions requesters in release comments — "you asked, it's live." Their reply rate on those mentions is comfortably the best retention email they never had to write.</p>

    <h2>What to copy</h2>
    <ul>
        <li>Make approval, not authorship, the human step.</li>
        <li>Publish small fixes — the audience rewards them more than you expect.</li>
        <li>Give every comment a one-click path into your tracker.</li>
        <li>Tell requesters when their thing ships. It's the whole loop, closed in one sentence.</li>
    </ul>
</x-layouts.post>
