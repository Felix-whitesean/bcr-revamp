@php
    $menu_items = config('reference.menu_icons');
    $menu_items_name = config('reference.menu_content');
    $menu_item = 'project-management';
@endphp


<div class="bg-[var(--white-75)] rounded-xl flex-[0_0_350px] p-4 pb-0 flex flex-col">
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <div class="company name flex p-2 gap-4">
        <img src="{{asset('images/f1.png')}}" class="w-16 h-12 self-center" alt="logo">
        <h5 class="title-text font-[Inknut_Antiqua] font-bold text-[20px] text-[var(--secondary-color)] uppercase">Biochar <br>Climate resolution</h5>
    </div>
    <div class="overflow-y-auto flex flex-col gap-2 pt-4 flex-[1_1_70%]  overflow-y-auto">
        @foreach ($menu_items as $menu_item => $label)
            <a href="?r={{$menu_item}}" class="flex gap-4 w-fit px-8 text-[17px]">
                @if ($menu_item === 'project-management')
                    <x-icon name="fluentui-document-settings-16-o" class="h-[20px]" />
                @else
                    <i class="{{ $menu_items[$menu_item] ?? '' }}"></i>
                @endif
                <span>{{$menu_items_name[$menu_item]}}</span>
            </a>
        @endforeach
    </div>
    <div class="footer bg-transparent pt-4 flex border-t-2 border-[#00000055] box flex-col text-black align-center overflow-y-hidden">
        <a href="faqs" class="m-auto hover:text-[#737373]"><i class="fi fi-rr-interrogation mr-4 text-[#737373]"></i> FAQs</a>
        <a href="help" class="m-auto mt-4 hover:text-[#737373]"><i class="fi fi-rs-shield-check mr-4 text-[#737373]"></i> Get help</a>
    </div>
</div>
