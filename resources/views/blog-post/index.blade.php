@extends('root')

@section('content')
    <div class="container mx-auto pt-16 pb-8 px-4">
        <div class="text-center mb-16">
            <h1><a class="text-indigo hover:text-indigo-dark no-underline" href="https://github.com/robindrost/prismic-eloquent">Prismic Eloquent</a> Example Blog</h1>
        </div>

        @if (request('tag'))
            <a class="inline-block mb-12 no-underline rounded text-grey-darker bg-grey-lighter hover:bg-grey-light shadow p-3" href="{{ route('blog.index') }}">
                [x] remove tags
            </a>
        @endif

        <div class="flex flex-wrap w-100 -mx-4 mb-4">
            @foreach ($blogPosts as $blogPost)
                @include('blog-post.card')
            @endforeach
        </div>

        @if ($blogPosts->lastPage() > 1)
            <div class="bg-grey-light h-px w-100 mb-12"></div>
            <div class="text-center mt-16 w-100">
                {{ $blogPosts->links('paginator') }}
            </div>
        @endif
    </div>
@stop
