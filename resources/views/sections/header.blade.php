<header class="py-4 gap-y-5 bg-white/25 backdrop-blur-[15px] sticky opacity-100 top-0 appear--fade-in z-50" data-appear="10">
  <div class="container flex items-center justify-between">
    <a class="text-2xl font-bold md:text-3xl" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @isoption('available_for_new_opportunities', true)
      <div class="hidden md:flex items-center py-3 px-5 gap-x-4 status bg-[#161A30]/80 text-white w-full md:w-auto rounded-xl">
        <div class="relative w-3 h-3 rounded-full icon bg-active-green animate-pulse-shadow before:w-full before:h-full before:absolute before:bg-active-green before:rounded-full after:w-full after:h-full after:absolute after:bg-active-green after:rounded-full before:content-[''] after:content-[''] before:animate-pulse-before after:animate-pulse-after"></div>
        <span class="text-sm text md:text-base">@option('new_opportunities_message')</span>
      </div>
    @endoption

    <a href="mailto:@option('email_address')" class="flex items-center gap-x-2 contact-js">
      <span class="text-sm lg:text-lg font-extralight">{{ __('Contact Me', 'sage') }}</span>
      @svg('images.svg.envelope')
    </a>
  </div>
</header>
