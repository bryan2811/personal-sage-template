<!-- Tailwind CSS Class References (for PurgeCSS) -->
<!-- bg-[#2B2A4C] bg-[#FFA732] bg-[#F4F27E] bg-[#508D69] bg-[#F4DFC8] bg-[#872341] bg-[#7743DB] gap-10 gap-32 gap-36 -->
@php
    $colors = ['#2B2A4C', '#FFA732', '#F4F27E', '#508D69', '#F4DFC8', '#872341', '#7743DB'];
@endphp

<div class="{{ $block->classes }} {{ $data['spacing_class'] }} appear--fade-in" data-appear="10">
  <div class="grid items-center h-screen lg:grid-cols-2 gap-x-5">
    <div class="relative flex flex-col justify-center min-h-screen py-6 overflow-hidden bg-[#161A30] sm:py-12">
      @foreach ([10, 32, 36] as $gap)
          <div class="relative flex gap-10 mt-10 overflow-hidden pointer-events-none">
              <div aria-hidden="true" class="flex items-center justify-around min-w-full gap-{{ $gap }} shrink-0 animate-marquee @if ($loop->index == 1) [animation-direction:reverse] @endif">
                  @foreach ($colors as $color)
                      <div class="w-[clamp(9.5rem,35vmin,22.5rem)] h-[clamp(0.5rem,18vmin,5rem)] bg-[{{ $color }}] rounded-full"></div>
                  @endforeach
              </div>
          </div>
      @endforeach
    </div>

    <div class="container grid text gap-y-4">
      <h2 class="text-base font-black lg:text-7xl xl:text-9xl">{{ $data['title'] }}</h2>
      <h3 class="text-2xl font-normal">{{ $data['subtitle'] }}</h3>
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</div>
