<div>
    <form action="#" wire:submit.prevent="installationForm" method="POST">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Installation Details</h3>
                <p class="mt-1 text-sm text-gray-500">Please enter installation details here
                </p>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="">
                    <!--Parameter 1:AC Details -->
                    <div class="grid grid-cols-6 gap-2 mb-8">
                        <h4 class="sm:col-span-6 font-semibold text-md">Battery Details</h4>
                        <p class=" text-xs font-semibold sm:col-span-6">(For External Batteries FR BDR
                            to
                            be
                            Filled and
                            enclosed)
                        </p>
                        <div class="sm:col-span-6">
                            <label for="volt" class=" text-sm font-medium text-gray-700">Volt/AH</label>
                            <div class="mt-1">
                                <input type="text" wire:model="volt_install" name="volt_install" id="volt"
                                    value="{{ old('volt_install') }}"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            @error('volt_install')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="make" class=" text-sm font-medium text-gray-700">Make</label>
                            <div class="mt-1">
                                <input type="text" wire:model="make_install" name="make_install" id="make"
                                    value="{{ old('make_install') }}"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            @error('make_install')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="sm:col-span-6">
                            <label for="quantity" class=" text-sm font-medium text-gray-700">Quantity</label>
                            <div class="mt-1">
                                <input type="text" wire:model="quantity_install" name="quantity_install"
                                    id="quantity" value="{{ old('quantity_install') }}"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            @error('quantity_install')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="strings" class=" text-sm font-medium text-gray-700">Strings</label>
                            <div class="mt-1">
                                <input type="text" wire:model="strings_install" name="strings_install" id="strings"
                                    value="{{ old('strings_install') }}"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            @error('strings_install')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="sm:col-span-6">
                            <label for="batch-code" class=" text-sm font-medium text-gray-700">Batch
                                Code</label>
                            <div class="mt-1">
                                <input type="text" wire:model="batch_code" name="batch_code" id="batch-code"
                                    value="{{ old('batch_code') }}"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            @error('batch_code')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>





                </div>
            </div>

        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
        </div>
    </form>
</div>
