@extends('root')

@section('content')
    <div class="container mx-auto py-16 px-4">
        <a class="inline-block mb-12 no-underline rounded text-grey-darker bg-grey-lighter hover:bg-grey-light shadow p-3" href="{{ route('blog.index') }}">
            &laquo; overview
        </a>

        <div class="text-center mb-8">
            {!! $richText->asHtml($blogPost->title) !!}
        </div>

        <div class="text-center mb-8">
            <img
                width="1200"
                height="360"
                class="mb-2 rounded lazyload"
                data-src="{{ $blogPost->heroImage->hero->url }}"
                alt="{{ $blogPost->heroImage->hero->alt }}">
            <small class="text-grey-dark">{{ $blogPost->heroImage->hero->copyright }}</small>
        </div>

        <div class="w-3/4 mx-auto mb-8">
            @foreach ($blogPost->body as $block)
                <div class="mb-2 text-grey-darkest">
                    {!! $block->text !!}
                </div>
            @endforeach
        </div>

        <div class="w-3/4 mx-auto mb-12">
            @foreach ($blogPost->tags as $tag)
                <a href="{{ route('blog.index', ['tag' => $tag]) }}" class="inline-block bg-grey-lighter hover:bg-grey-light rounded-full px-3 py-1 mr-2 text-sm font-semibold text-grey-darker no-underline">
                    #{{ $tag }}
                </a>
            @endforeach
        </div>

        <div class="bg-grey-light h-px w-100 mb-12"></div>

        <h2 class="mb-4">Related blog posts</h2>
        <div class="flex flex-wrap w-100 -mx-4 -mb-12">
            @foreach ($blogPost->relatedBlogPosts as $item)
                @include('blog-post.card', ['blogPost' => $item->blog_post])
            @endforeach
        </div>
    </div>
@stop
