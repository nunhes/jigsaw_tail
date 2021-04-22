@extends('_layouts.master')

@section('body')
<section class="font-sans h-screen w-full bg-cover text-center flex flex-col items-center justify-center" style="background:url(https://source.unsplash.com/random/1920x1080) no-repeat center;">
    <div class="bg-white text-black rounded-full h-16 w-16 flex items-center justify-center mb-8"><i class="fas fa-play ml-1"></i></div>
    <label for="" class="uppercase tracking-extrawide text-white text-xs font-hairline mt-8">Watch Video</label>
    <h3 class="text-white mx-auto max-w-sm mt-4 font-normal text-2xl leading-normal">Differentiate Yourself And Attract
        More Attention Sales And Profits</h3>
</section>


<div class="flex-auto w-full container max-w-8xl m-auto px-4 py-8 lg:px-8">
  @foreach ($posts->where('featured', true) as $featuredPost)
    @if ($featuredPost->cover_image)
    <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
    @endif

    <p class="text-gray-700 font-medium my-2">
        {{ $featuredPost->getDate()->format('j F, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a href="{{ $featuredPost->getUrl() }}" title="Ler {{ $featuredPost->title }}" class="text-gray-900 font-hairline">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">
            {{ $featuredPost->title }}
        </span>
        </a>
    </h2>

    <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

    <a href="{{ $featuredPost->getUrl() }}" title="Ler - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
        Ler
    </a>

    @if (! $loop->last)
    <hr class="border-b my-6">
    @endif
  @endforeach


    @include('_components.newsletter-signup')

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
    <div class="flex flex-col md:flex-row md:-mx-6">
        @foreach ($row as $post)
        <div class="w-full md:w-1/2 md:mx-6">
            @include('_components.post-preview-inline')
        </div>

        @if (! $loop->last)
        <hr class="block md:hidden w-full border-b mt-2 mb-6">
        @endif
    @endforeach
    </div>

    @if (! $loop->last)
    <hr class="w-full border-b mt-2 mb-6">
    @endif
    @endforeach
    @stop

</div>