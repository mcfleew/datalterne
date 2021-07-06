<x-guest-layout>
    <div class="w-full lg:w-6/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="rounded-t mb-0 px-6 py-6">
                <x-jet-validation-errors class="mb-4" />
                <div class="text-center mb-3">
                    <h6 class="text-blueGray-500 text-sm font-bold">
                        Sign up with
                    </h6>
                </div>
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                    <small>Or sign up with credentials</small>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                        <x-jet-label for="name" value="{{ __('Name') }}" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" />
                        <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Name" />
                    </div>
                    <div class="relative w-full mb-3">
                        <x-jet-label for="email" value="{{ __('Email') }}" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" />
                        <x-jet-input id="email" type="email" name="email" :value="old('email')" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email" />
                    </div>
                    <div class="relative w-full mb-3">
                        <x-jet-label for="password" value="{{ __('Password') }}" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password" />
                    </div>
                    <div class="relative w-full mb-3">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password" />
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div>
                        <x-jet-label for="terms" class="inline-flex items-center cursor-pointer">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />

                                <div class="ml-2 text-sm font-semibold text-blueGray-600">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-pink-500 hover:text-pink-800">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-pink-500 hover:text-pink-800">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif
                    <div class="text-center mt-6">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <x-jet-button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>