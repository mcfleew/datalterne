<x-guest-layout>
    <div class="w-full lg:w-4/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="rounded-t mb-0 px-6 py-6">
                <x-jet-validation-errors class="mb-4" />
                <div class="text-center mb-3">
                    <h6 class="text-blueGray-500 text-sm font-bold">
                        Sign in with
                    </h6>
                </div>
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                    <small>Or sign in with credentials</small>
                </div>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                        <x-jet-label for="email" value="{{ __('Email') }}" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" />
                        <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email" />
                    </div>
                    <div class="relative w-full mb-3">
                        <x-jet-label for="password" value="{{ __('Password') }}" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password" />
                    </div>
                    <div>
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <x-jet-checkbox id="remember_me" name="remember" class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />
                            <span class="ml-2 text-sm font-semibold text-blueGray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="text-center mt-6">
                        <x-jet-button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                    <hr class="mt-6 border-b-1 border-blueGray-300" />
                    <div class="flex flex-wrap mt-6">
                        <div class="w-1/2">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="w-1/2 text-right">
                            @if (Route::has('register'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                <small>Register</small>
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>