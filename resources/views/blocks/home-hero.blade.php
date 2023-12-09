<div class="{{ $block->classes }} {{ $data['spacing_class'] }} appear--fade-in" data-appear="10">
  <div class="grid items-center h-screen lg:grid-cols-2 gap-x-5">
    <div class="h-full bg-red-400"></div>
    <div class="container text">
      <h2 class="text-base font-black uppercase lg:text-9xl">{{ $data['title'] }}</h2>
    </div>
  </div>
  {{-- @if ($items)
  <p>hey</p>
    <ul>
      @foreach ($items as $item)
        <li>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif --}}

  <div>
    <InnerBlocks />
  </div>
</div>
