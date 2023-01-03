<div>
    <form action="#" wire:submit.prevent="callSignOffForm" method="POST">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Call SignOff Details</h1>
                <div class="mt-2 text-lg font-semibold text-gray-700">Customer Details</div>
            </div>

        </div>
        <div x-data="{ open: false }"
            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
            <div>
                <label for="customer-name" class="block text-sm font-medium text-gray-700">Customer
                    Name</label>
                <div class="mt-1">
                    <input type="text" wire:model="customer_name" id="customer-name"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="customer name...">
                </div>
                @error('customer_name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="mobile_no" class="block text-sm font-medium text-gray-700">Mobile
                    Number</label>
                <div class="mt-1">
                    <input type="number" wire:model="mobile_no" id="mobile_no"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="customer mobile...">
                </div>
                @error('mobile_no')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="customer-designation" class="block text-sm font-medium text-gray-700">Customer
                    Designation</label>
                <div class="mt-1">
                    <input type="text" wire:model="customer_designation" name="customer_designation"
                        id="customer-designation"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="customer designation...">
                </div>
                @error('customer_designation')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="customer-signature" class="block text-sm font-medium text-gray-700">Customer
                    Signature</label>
                <div class="mt-1">
                    <input type="text" x-on:click="open=true" wire:model="customer_signature"
                        name="customer_signature" id="customer-signature"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="customer signature...">
                    <div x-show="open" @click.outside="open=false">
                        <livewire:signature-pad />

                    </div>
                </div>
                @error('customer_signature')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>

    </form>
</div>


</div>
