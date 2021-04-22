---
title: Projects
description: The list of projects
pagination:
    collection: projects
    perPage: 4
---
@extends('_layouts.master')

@section('body')
<div class="flex-auto w-full container max-w-8xl m-auto px-4 py-8 lg:px-8">
    <h1>Proxectos</h1>

    <hr class="border-b my-6">

    @foreach ($pagination->items as $project)
    <!-- /*@include('_components.post-preview-inline')*/ -->

    @if ($project != $pagination->items->last())
    <hr class="border-b my-6">
    @endif
    @endforeach

    @if ($pagination->pages->count() > 1)
    <nav class="flex text-xs my-8">
        @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Páxina anterior"
                    class="bg-gray-200 hover:bg-gray-400 rounded-full mr-3 px-3 py-1"
                ><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
</svg></a>
        @endif

        @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Ir a páxina {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 rounded-full mr-3 px-3 py-1 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
                >{{ $pageNumber }}</a>
        @endforeach

        @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Páxina seguinte"
                    class="bg-gray-200 hover:bg-gray-400 rounded-full mr-3 px-3 py-1"
                ><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
</svg></a>
        @endif
    </nav>
</div>
    @endif
@stop
