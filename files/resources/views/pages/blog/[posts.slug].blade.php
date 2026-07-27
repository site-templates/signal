{{-- Dynamic page: one URL per entry of resources/data/collections/posts.json, matched on `slug` — $posts is the entry. Add an entry there to publish; its `content` HTML is the body. --}}
<x-layouts.post
    :title="$posts->title"
    :description="$posts->descriptionDetail"
    :category="$posts->category"
    :date="$posts->date"
    :readTime="$posts->readTimeDetail"
    :author="$posts->author"
    :authorImage="$posts->authorImage"
    :image="$posts->image">

    {!! $posts->content !!}

</x-layouts.post>
