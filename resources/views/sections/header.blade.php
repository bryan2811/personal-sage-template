<?php
  use function Roots\bundle;
  bundle('header')->enqueue();
?>
<header class="py-4 gap-y-5 bg-white/25 backdrop-blur-[15px] sticky opacity-100 top-0 appear--fade-in" data-appear="10">
  <div class="container flex items-center justify-between">
    <a class="text-2xl font-bold md:text-3xl" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @isoption('available_for_new_opportunities', true)
      <div class="hidden md:flex items-center py-3 px-5 gap-x-4 status bg-[#121212]/80 text-white w-full md:w-auto rounded-xl">
        <div class="icon"></div>
        <span class="text-sm text md:text-base">@option('new_opportunities_message')</span>
      </div>
    @endoption

    <a href="mailto:@option('email_address')" class="flex items-center gap-x-2 contact-js">
      <span class="text-sm lg:text-lg font-extralight">{{ __('Contact Me', 'sage') }}</span>
      @svg('images.svg.envelope')
    </a>
  </div>
</header>
