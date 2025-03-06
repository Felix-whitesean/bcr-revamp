@php
    $sign_up_fields = config('fields.SIGN_UP_NAMES');
    $sign_in_fields = config('fields.SIGN_IN_NAMES');
    $types = config('fields.FIELD_TYPES');
    $labels = config('fields.FIELD_LABELS');
    $status = config('fields.FIELD_STATUS');
    
    $isSignIn = $formtype === 'signin';

    $fields = $isSignIn ? $sign_in_fields : $sign_up_fields;
    $alt = $isSignIn ? "signup" : "signin";

    $newUrl = request()->fullUrlWithQuery(['formtype' => $alt]);
    $reset = request()->fullUrlWithQuery(['reset' => '1']);

@endphp

    <form onSubmit="handleSubmit()}}" method="POST" class="relative w-fit m-auto">
        <div class="auth lg:min-w-[500px] sm:min-w-[400px] p-4 w-fit border-md bg-[f0f0f0] rounded-md m-auto flex flex-col gap-4 px-8 shadow-[5px_5px_5px_rgba(0,0,0,0.25)_inset,-5px_-5px_5px_rgba(0,0,0,0.25)_inset]">
            <h2 class="bg-[--primary-color] box-border rounded-sm">{{$isSignIn ? "Sign in here" : "Sign up here"}}</h2> 
            @foreach ($fields as $name => $label)
                <x-input class="align-center mt-24" :inputName="$fields[$name]" :formtype="$formtype" :label="$labels[$name]" :type="$types[$name]" :id="$fields[$name]" :maxlength="50" style="border-b-[2px] border-b-black min-w-[65%]" bindString=":"  oninput="moveToNext(this)" :status="$status[$name]"/>
            @endforeach
            <button class="submit text-[19px] text-bold self-center rounded-sm px-32 py-[3px] border border-black hover:bg-[--white-75] mt-4">{{$isSignIn ? "Sign In" : "Sign Up"}}</button>
            <div class="flex justify-between">
                <a href="{{$newUrl}}" class= "text-[--secondary-color] self-end font-italic active:text-black visited:underline-offset-2"> {{$isSignIn ? "Create a new account" : "Have an account, Sign in"}} </a>
                <a href="{{$reset}}" class='text-red-600 self-end font-italic active:text-black visited:underline-offset-2 {{$isSignIn ? "": "hidden" }}'>Forgot password</a>
            </div>
            <span>{{$isSignIn ? 'Account is inactive' : ''}}</span>
        </div>
    </form>
    <x-verification formtype="verification" class="hidden"></x-verification>

<script>
            
</script>