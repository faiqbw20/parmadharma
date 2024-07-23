@forelse ($products as $product)
      <!-- Softovac Rami -->
      <div class="py-3.5 pl-4 pr-[22px] bg-white rounded-2xl flex gap-1 items-center relative">
        <img src="{{ Storage::url($product->photo) }}" class="w-full max-w-[70px] max-h-[70px] object-contain"
          alt="">
        <div class="flex flex-wrap items-center justify-between w-full gap-1">
          <div class="flex flex-col gap-1">
            <a href="{{ route('front.product.details', $product->slug) }}" class="text-base font-semibold stretched-link whitespace-nowrap w-[150px] truncate">
                {{ $product->name }}
            </a>
            <p class="text-sm text-grey">
                Rp {{ $product->price }}
            </p>
          </div>
          <div class="flex">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
            <img src="{{asset('assets/svgs/star.svg')}}" class="size-[18px]" alt="">
          </div>
        </div>
      </div>
      @empty
    @endforelse
