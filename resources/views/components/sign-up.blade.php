<div class=" bg-[---color] w-fit min-h-[40vh] max-h-[70vh] overflow-auto min-w-[50vw] m-auto p-2">
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <div class="form">
        <form action="" method="post" class="p-4 w-fit border-md bg-[f0f0f0] rounded-md m-auto flex flex-col gap-4 px-8">
            <h2>Sign up to continue </h2>
            <div class="inputs flex flex-col gap-4 text-[18px]">
                <label for="name"><span>Name:</span><input type="text" name="name" id="name" required></label>

                <label for="email">Email address:<input type="text" id="email"></label>

                <label for="phone">Phone:<input type="text" id="phone"></label>
                <div for="verification" class="verification flex justify-between">
                    <label for="code1">Verification code:</label>
                    <div class="flex space-x-2 min-w-[65%]">
                        <input type="text" class="" id="code1" maxlength="1" oninput="moveToNext(this, 'code2')">
                        <input type="text" class="w-8 text-center focus:outline-none" id="code2" maxlength="1" oninput="moveToNext(this, 'code3')">
                        <input type="text" class="w-8 text-center focus:outline-none" id="code3" maxlength="1" oninput="moveToNext(this, 'code4')">
                        <input type="text" class="w-8 text-center focus:outline-none" id="code4" maxlength="1" oninput="moveToNext(this, null)">
                    </div>
                </div>
            </div>
            <label><input type="checkbox"> I have read and agree to BCR regulations and instructions</label>

            <label class="justify-around"><input type="checkbox"> Get BCR news and updates</label>
            @php
                $newUrl = request()->fullUrlWithQuery(['formtype' => 'signin','id' => '3']);
            @endphp
            <button type="button" class="submit text-[19px] text-bold self-center rounded-sm px-32 py-[3px] border border-black hover:bg-[--white-75]">SUBMIT</button>
            <div class="flex justify-between">
                <a href="{{ $newUrl }}" class="text-[--secondary-color] self-end font-italic active:text-black visited:underline-offset-2">Forgot password</a>
                <a href="" class="text-[--secondary-color] self-end font-italic active:text-black visited:underline-offset-2">Have an account? Sign In</a>
            </div>
            
        </form>
    </div>
</div>
