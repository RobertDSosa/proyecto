<x-jet-action-section>
    <x-slot name="title">
        <p class="text-white">Autenticación de en dos pasos</p>
    </x-slot>

    <x-slot name="description">
        <p class="text-gray-300">Con la autenticación en dos pasos, puedes añadir otra capa de seguridad a tu cuenta.</p>
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                La autenticación en dos pasos está activada.
            @else
                La autenticación en dos pasos está desactivada.
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                Cuando la autenticación en dos pasos está activada. Recibirás un código aleatorio y seguro, el cuál podrás obtener desde la aplicación Auntenticador de Google desde tu celular.
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        La autenticación en dos pasos está activada. Escanea el código QR desde la aplicación de auntenticador de tu celular.
                    </p>
                </div>

                <div class="mt-4 dark:p-4 dark:w-56 dark:bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        Guarda estas contraseñas en un lugar seguro. Pueden ser usadas para recuperar el acceso en caso de perder tu celular.
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled" class="bg-green-500 hover:bg-green-800">
                        Activar
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            Generar nuevos códigos
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            Mostrar códigos de recuperación
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        Desactivar
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
