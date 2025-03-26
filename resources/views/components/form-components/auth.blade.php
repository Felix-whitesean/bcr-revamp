@php
    $sign_up_fields = config('fields.SIGN_UP_NAMES');
    $sign_in_fields = config('fields.SIGN_IN_NAMES');
    $types = config('fields.FIELD_TYPES');
    $labels = config('fields.FIELD_LABELS');
    $status = config('fields.FIELD_STATUS');
    
    $isSignIn = $page === "login";

    $fields = $isSignIn ? $sign_in_fields : $sign_up_fields;
    $alt = $isSignIn ? "signup" : "login";

    $newUrl = request()->fullUrlWithQuery(['page' => $alt]);
    $reset = request()->fullUrlWithQuery(['reset' => '1']);
@endphp
    <form action="{{ route( $isSignIn ? 'login' : 'register') }}" method="post" class="relative w-fit m-auto">
        @csrf
        <div style="background-image: url('{{ asset('images/auth-01.png')}}');" class="auth relative  bg-cover bg-center">
            <div class="relative lg:min-w-[500px] sm:min-w-[400px] p-4 w-fit border-md m-auto flex flex-col gap-4 px-8 shadow-[0_4px_5px_rgba(0,0,0,0.25)]">
                <h2 class="box-border text-[100] rounded-sm text-[rgb(75,75,75)]">{{$isSignIn ? "Sign in here" : "Sign up here"}}</h2> 
                <p class="text-[var(--black-6)] text-[18px] text-center">{{$isSignIn ? "Welcome back." : "Start a great journey with us. Welcome to BCR."}}</p>
                @if ($errors->has('email'))
                    <div class="text-red-500 text-center flex gap-4">
                        <x-uni-exclamation-triangle class="h-[18px] self-center"/>
                        {{ $errors->first('email') }}
                        Please try again
                    </div>
                @elseif($errors)
                    <div class="text-red-500 text-center">
                        {{ $errors->first() }}
                    </div>
                @endif
                @foreach ($fields as $name => $label)
                    <x-input class="align-center mt-24" :inputName="$fields[$name]" :formtype="$page" :label="$labels[$name]" :type="$types[$name]" :id="$fields[$name]" :maxlength="50" style="border-b-[2px] border-b-black min-w-[65%]" bindString=":" :status="$status[$name]"/>
                @endforeach
                <button class="submit text-[19px] text-bold text-[var(--black-6)] hover:text-black self-center px-32 py-[3px] bg-[--white-4] hover:bg-[--white-75] mt-4 shadow-[0_4px_5px_rgba(0,0,0,0.25)]">{{$isSignIn ? "Sign In" : "Sign Up"}}</button>
                <div class="flex justify-between">
                    <div class="flex gap-2">
                        <span>{{ $isSignIn ? "Don't have an account," : "Have an account,"}}</span>
                        <a href="{{$newUrl}}" class= "text-[--secondary-color] self-end font-italic active:text-black visited:underline-offset-2 underline"> {{$isSignIn ? "Sign up" : "Sign in"}} </a>
                    </div>
                    <a href="{{$reset}}" class="text-red-600 self-end font-italic active:text-black visited:underline-offset-2 {{$isSignIn ? '': 'hidden' }}">Reset password</a>
                </div>
            </div>
            
        </div>
    </form>
    <x-verification formtype="verification" class=""></x-verification>

<script>
            
</script>