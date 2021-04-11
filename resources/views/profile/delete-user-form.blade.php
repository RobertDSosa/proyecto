<x-jet-action-section>

    <div class="bg-gray-100">

    
    <x-slot name="title">
        <p class="text-white"> Eliminar cuenta </p>
    </x-slot>

    <x-slot name="description">
        <p class="text-gray-300">Aquí puedes eliminar permanentemente tu cuenta.</p>

    </x-slot>

</div>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Una vez que tu cuenta sea eliminada, toda la información y recursos asociados a esta serán eliminados. Asegúrate de respaldar toda tu información antes de continuar.
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                Eliminar cuenta
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                Eliminar cuenta
            </x-slot>

            <x-slot name="content">
               ¿Estás seguro/a de eliminar tu cuenta? No podrás recuperarla luego de proceder. Por favor ingresa tu contraseñ para confirmar que realmente deseas eliminar tu cuenta.

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="Contraseña"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Cancelar
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Eliminar cuenta
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
