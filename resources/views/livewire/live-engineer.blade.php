<div>
    <form action="#" wire:submit.prevent="engineerForm" method="POST">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="mt-2 text-lg font-semibold text-gray-700">Engineer Details</div>
        <div x-data="{ open: false }"
            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
            <div>
                <label for="engineer-name" class="block text-sm font-medium text-gray-700">Engineer
                    Name</label>
                <div class="mt-1">
                    <input type="text" wire:model="engineer_name" name="engineer_name" id="engineer-name"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="engineer name...">
                </div>
                @error('engineer_name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>


            <div>
                <label for="engineer-signature" class="block text-sm font-medium text-gray-700">Engineer
                    Signature</label>
                <div class="mt-1">
                    <input type="text" x-on:click="open=true" wire:model="engineer_signature"
                        name="engineer_signature" id="engineer-signature"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="engineer signature...">
                    <div x-show="open" @click.outside="open=false">
                        <livewire:signature-pad />
                    </div>
                </div>
                @error('engineer_signature')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="sign-date" class="block text-sm font-medium text-gray-700">SignOff
                    Date</label>
                <div class="mt-1">
                    <input type="date" wire:model="signoff_date" name="signoff_date" id="sign-date"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="sign-date...">
                </div>
                @error('signoff_date')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
        </div>
    </form>
</div>
