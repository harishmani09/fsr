<div>
    <form action="#" wire:submit.prevent="siteForm" method="POST">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Site Details</h3>
                <p class="mt-1 text-sm text-gray-500">Please enter site details here
                </p>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="">
                    <!--Parameter 1:AC Details -->
                    <div class="grid grid-cols-6 gap-2 mb-8">
                        <h4 class="sm:col-span-6 font-semibold text-md">AC Details</h4>
                        <div class="sm:col-span-3">
                            <h4 class="font-semibold text-sm">AC Provided</h4>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span class="label-text">No</span>
                                    <input type="radio" wire:model="ac_provided" value="no"
                                        class="radio checked:bg-red-500" />
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span class="label-text">Yes</span>
                                    <input type="radio" wire:model="ac_provided" value="yes"
                                        class="radio checked:bg-blue-500" />
                                </label>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <h4 class="font-semibold text-sm">AC Working?</h4>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span class="label-text">No</span>
                                    <input type="radio" wire:model="ac_working" value="no"
                                        class="radio checked:bg-red-500" checked />
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span class="label-text">Yes</span>
                                    <input type="radio" wire:model="ac_working" value="yes"
                                        class="radio checked:bg-blue-500" checked />
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Parameter 2:DG Details -->
                    <div class="grid grid-cols-6 gap-2 mb-8">
                        <h4 class="sm:col-span-6 font-semibold text-md">DG Details</h4>
                        <div class="sm:col-span-3">
                            <h4 class="font-semibold text-sm">DG Available</h4>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span class="label-text">No</span>
                                    <input type="radio" wire:model="dg_details" value="no"
                                        class="radio checked:bg-red-500" checked />
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <span class="label-text">Yes</span>
                                    <input type="radio" wire:model="dg_details" value="yes"
                                        class="radio checked:bg-blue-500" checked />
                                </label>
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <h4 class="font-semibold text-sm">Capacity?</h4>
                            <label for="kva" class="block text-sm font-medium text-gray-700">In
                                kVA</label>
                            <div
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm">
                                <input type="text" wire:model="kva" id="kva"
                                    class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                            </div>
                            @error('kva')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Parameter 3:Environment Details -->
                    <div class="grid grid-cols-6 gap-2 mb-8">
                        <h4 class="pb-0 sm:col-span-6 font-semibold text-md">Environment Details</h4>
                        <div class="mt-0 sm:col-span-6">
                            <label class="text-base font-medium text-gray-900">Dust Levels</label>
                            <p class="text-sm leading-5 text-gray-500">Levels of pollutants in the
                                enviroment?</p>
                            <div class="mt-4 grid-cols-6">

                                <div
                                    class="space-y-4 justify-between sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="low" wire:model="dust_level" type="radio" value="low"
                                            checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="low"
                                            class="ml-3 block text-sm font-medium text-gray-700">Low</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="medium" wire:model="dust_level" value="medium" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="medium"
                                            class="ml-3 block text-sm font-medium text-gray-700">Medium</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="high" wire:model="dust_level" value="high" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="high"
                                            class="ml-3 block text-sm font-medium text-gray-700">High</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Parameter 4: Voltage Details -->
                    {{-- <div class="grid grid-cols-6 gap-2 mb-8">
                        <h4 class="pb-0 sm:col-span-6 font-semibold text-md">Voltage Details</h4>
                        <div class="mt-0 sm:col-span-6">
                            <label class="text-base font-medium text-gray-900">Electricity
                                Phase</label>

                            <fieldset class=" flex space-x-2 justify-between">
                                <div class="space-y-8">
                                    <div class="relative flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="L1-N" aria-describedby="voltage-description"
                                                wire:model="elec_phase" type="checkbox" value="L1-N"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">

                                            <p id="L1-N" class="text-gray-500">L1-N</p>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="L2-N" aria-describedby="voltage-description"
                                                wire:model="elec_phase" value="L2-N" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">

                                            <p id="L2-N" class="text-gray-500">L2-N</p>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="L3-N" aria-describedby="voltage-description"
                                                wire:model="elec_phase" value="L3-N" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">

                                            <p id="L3-N" class="text-gray-500">L3-N</p>
                                        </div>
                                    </div>
                                    @error('elec_phase')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="space-y-8">
                                    <div class="relative flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="L1-L2" aria-describedby="voltage-description"
                                                wire:model="elec_phase" value="L1-L2" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">

                                            <p id="L1-L2" class="text-gray-500">L1-L2</p>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="L2-L3" aria-describedby="voltage-description"
                                                wire:model="elec_phase" value="L2-L3" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">

                                            <p id="L2-L3" class="text-gray-500">L2-L3</p>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input id="L3-L1" aria-describedby="voltage-description"
                                                wire:model="elec_phase" value="L3-L1" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <div class="ml-3 text-sm">

                                            <p id="L3-L1" class="text-gray-500">L3-L1</p>
                                        </div>
                                    </div>
                                    @error('elec_phase')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div>
                                    <div>
                                        <label for="neutral_volt"
                                            class="block text-sm font-medium text-gray-700">Neutral
                                            to
                                            Earth</label>
                                        <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                            <input type="text" wire:model="neutral_volt" name="neutral_volt"
                                                id="neutral_volt"
                                                class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        </div>
                                        @error('neutral_volt')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="load_v" class="block text-sm font-medium text-gray-700">Load
                                            %</label>
                                        <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                            <input type="text" wire:model="load_v" name="load_v" id="load_v"
                                                class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        </div>
                                        @error('load_v')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                    </div> --}}
                    <!--Parameter 5:Load Type -->
                    <div class="grid grid-cols-6 gap-2">
                        <h4 class="pb-0 sm:col-span-6 font-semibold text-md">Load Type</h4>
                        <div class="mt-0 sm:col-span-3">

                            <fieldset class="mt-4">

                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="IT" wire:model="load_type" name="load_type" value="IT"
                                            type="radio" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="IT"
                                            class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="industrial" wire:model="load_type" name="load_type"
                                            value="industrial" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="industrial"
                                            class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="data-center" wire:model="load_type" name="load_type"
                                            value="data_center" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="data-center"
                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="health-care" wire:model="load_type" name="load_type"
                                            value="health_care" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="health-care"
                                            class="ml-3 block text-sm font-medium text-gray-700">Health
                                            Care</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other" wire:model="load_type" name="load_type"
                                            value="load_others" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="Other"
                                            class="ml-3 block text-sm font-medium text-gray-700">Others</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                    <!--Parameter 5:UPS Status -->
                    <div class="grid grid-cols-6 gap-2">
                        <h4 class="pb-0 sm:col-span-6 font-semibold text-md">UPS Status</h4>
                        <div class="mt-0 sm:col-span-3">

                            <fieldset class="mt-4">

                                <div class="space-y-4  sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="ups-working" wire:model="ups" name="ups" value="ups_working"
                                            type="radio" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="ups-working"
                                            class="ml-3 block text-sm font-medium text-gray-700">UPS
                                            Working</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="ups-not-working" wire:model="ups" name="ups"
                                            value="ups_not_working" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="ups-not-working"
                                            class="ml-3 block text-sm font-medium text-gray-700">UPS
                                            Not
                                            Working</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="ups-under-consideration" wire:model="ups" name="ups"
                                            value="ups_considering" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="ups-under-consideration"
                                            class="ml-3 block text-sm font-medium text-gray-700">UPS
                                            Under
                                            Consideration</label>
                                    </div>

                                </div>
                            </fieldset>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
        </div>
        @foreach ($errors->all() as $error)
            <p class="text-red-500 text-xs">{{ $error }}</p>
        @endforeach
    </form>
</div>
