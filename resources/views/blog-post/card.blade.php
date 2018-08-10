<div class="w-full sm:w-1/2 px-4 mb-12 flex-no-shrink">
    <a href="{{ route('blog.show', ['slug' => $blogPost->uid]) }}" class="flex flex-col h-full w-full rounded overflow-hidden shadow-lg no-underline hover:bg-grey-light inline-block">
        <img width="480" height="290" class="w-full lazyload" data-src="{{ $blogPost->heroImage->teaser->url }}" alt="{{ $blogPost->heroImage->teaser->copyright }}">
        <div class="px-6 py-4 mb-auto">
            <span class="font-bold mb-2 text-black block">
                {{ $richText->asText($blogPost->title) }}
            </span>

            <p class="text-grey-darker text-sm -mb-4">
                {{ $richText->asText($blogPost->teaser) }}
            </p>
        </div>
        <div class="px-6 py-4">
            @foreach ($blogPost->tags as $tag)
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                    #{{ $tag }}
                </span>
            @endforeach
        </div>
    </a>
</div>
