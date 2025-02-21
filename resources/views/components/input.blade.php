@php
    $isCheckbox = $type === "checkbox";
@endphp

<label class="flex flex-col text-[18px]">
    <div class="flex {{$isCheckbox ? 'flex-row-reverse self-start gap-4' : 'flex-row justify-between' }}">
        <span>{{ $label }}{{ $isCheckbox ? '' : ':' }}</span>
        <input class=" {{$isCheckbox ? 'w-fit' : 'min-w-[65%] border-b-[2px] border-b-black' }}" type="{{ $type }}" name="{{ $inputName }}" id="{{$id}}" maxlength="20" placeholder="{{$type}}" >
    </div>
    <div class="show">
        <p class="text-[14px] text-[--primary-color] hidden">This is the feedback area</p>
    </div>
</label>
<script>
    
</script>