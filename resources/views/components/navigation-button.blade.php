<a href="?page={{ $page}}" class="flex flex-row sm px-[26px] py-[12px] gap-4 lg:gap-2 rounded-sm active:bg-[var(--primary-color)] hover:cursor-pointer text-nowrap sm:self-start {{ $isActive ? 'bg-[var(--primary-color)]' : 'bg-transparent'}}" wire:click="showSection('{{$page}}')">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <i class="{{$iconClass}} self-center"></i>
    <span>{{$link}}</span>
</a>