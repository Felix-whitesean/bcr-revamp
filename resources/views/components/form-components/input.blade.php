@php
    $isCheckbox = $type === "checkbox";
    $isPassword = $type === "password";
    $isrequired = $status == "required";
    $isverification = $formtype == "verification";
@endphp

<label class="flex flex-col text-[18px] pr-4 relative">
    <div class="flex {{$isCheckbox ? 'flex-row-reverse self-start gap-4' : 'flex-row justify-between' }}">
        <span class="text-[#434343]">{{ $label }}{{ $isCheckbox ? "" : "$bindString" }}</span>
        <input class='{{$isCheckbox ? "w-fit" : "$style self-end" }}' type="{{ $type }}" name="{{ $inputName }}" id="{{$id}}" maxlength="{{$maxlength}}" placeholder="{{$type}}" {{$status}} {{ !$isCheckbox ? 'value=' . old($inputName) : '' }} >
        <span class="absolute right-8 bottom-2"><i onClick="toggleTarget(this)" class="{{ $isPassword ? 'fi fi-rr-eye' : '' }}"></i></span>
        <span class="text-red-600 absolute right-0 bottom-2">{{ ($isrequired && !$isverification) ? '*' : '' }}</span>
    </div>
    <div class="show">
        <p class="text-[14px] text-[--primary-color] hidden">This is the feedback area</p>
    </div>
</label>
<script>
    function toggleTarget(target) {
        target.classList.toggle('fi-rr-eye'); // Removes/Adds the normal eye icon
        target.classList.toggle('fi-rr-eye-crossed');
        if(target.classList.contains('fi-rr-eye-crossed')){
            target.parentElement.parentElement.querySelector('input').type = 'text';
        }
        else{
            target.parentElement.parentElement.querySelector('input').type = "password";
        }
    }
    function showName(input) {
        console.log(input.name);
    }
</script>