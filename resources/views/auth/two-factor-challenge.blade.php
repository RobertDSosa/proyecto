<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src=" {{URL::asset('/images/logo.png')}}" alt="Logo Centro Cristiano" class="rounded-full w-36 h-36 border-2 border-green-700">
         </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                Por favor, confirma el acceso a tu cuenta ingresando el código de autenticación enviado a tu aplicación de auntenticación.
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                Por favor confirma el acceso a tu cuenta ingresando uno de tus códigos de recuperación de cuenta.
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <x-jet-label for="code" value="Código" />
                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-jet-label for="recovery_code" value="Código de recuperación" />
                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        Utilizar código de recuperación
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        Utilizar un código de autenticación
                    </button>

                    <x-jet-button class="ml-4 bg-green-900 hover:bg-green-700">
                        Iniciar sesión
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
