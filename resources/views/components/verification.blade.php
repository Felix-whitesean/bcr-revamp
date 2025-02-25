@php

    $fields = config('fields.VERIFICATION_CODE_ID');

@endphp

<div class="flex flex-col absolute r-0 w-[100%] h-[100%] top-0 bg-[#ffffffdf] gap-8">
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h3 class="mx-auto self-start mt-32">Enter the verification code</h3>
    <form action="" method="post" class="flex flex-col gap-8 mx-auto">
        <div class="verification-code flex flex-row" >
            @foreach ($fields as $name => $label)
                <x-input class="align-center mt-24" :inputName="$fields[$name]" style="border-[1px] border-black w-[32px] p-[1px] focus:border-[2px] text-center" maxlength="1" :id="$fields[$name]" status="required"/>
            @endforeach
        </div>
        <button class="button border-[1px] border-black w-fit px-16 rounded-sm">Check</button>
    </form>
</div>
<script>
        function moveToNext(current) {
            let inputs = document.querySelectorAll('.verification-code input'); // Get all inputs inside components
            let index = Array.from(inputs).indexOf(current); // Find current input index

            if (current.value.length === 1 && index !== -1 && index < inputs.length - 1) {
                console.log("current.value");
                inputs[index + 1].focus(); // Move to next input
            }
            else{
                console.log("Unable to");
            }
        
        }
        document.addEventListener("keydown", function(event) {
            if (event.key === "Backspace") {
                let inputs = document.querySelectorAll('.verification-code input');
                let current = document.activeElement;
                let index = Array.from(inputs).indexOf(current);

                if (index > 0 && current.value === "") {
                    inputs[index - 1].focus(); // Move back to previous input
                }
            }
        });
</script>