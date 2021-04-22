@extends('_layouts.master')

@php
$page->type = 'article';
@endphp

@section('body')
<div class="flex flex-col w-full container max-w-8xl mx-auto px-4 py-8 lg:px-8">
    @if ($page->cover_image)
    <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif


    <h1 class="text-6xl font-hairline">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">
            {{ $page->title }}
        </span>
    </h1>

    <p class="text-gray-700 text-xl md:mt-0">{{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
    @foreach ($page->categories as $i => $category)
    <a href="{{ '/blog/categories/' . $category }}" title="Publicado en {{ $category }}" class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px">{{ $category }}</a>
    @endforeach
    @endif

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
            <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                &LeftArrow; {{ $next->title }}
            </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
            <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                {{ $previous->title }} &RightArrow;
            </a>
            @endif
        </div>
    </nav>
</div>
@endsection