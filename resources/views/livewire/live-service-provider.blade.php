<div>
    <div class="bg-white px-4 py-5 shadow sm:rounded-lg  sm:p-6 ">
        <form wire:submit.prevent="serviceProviderForm" action="#" method="POST" enctype="multipart/form-data">
            @csrf

            @if (session()->has('success_message'))
                <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                    {{ session('success_message') }}
                </div>
            @endif
            <div class="md:grid md:grid-cols-2 w-full md:gap-6">

                <h3 class="text-lg font-medium leading-6 text-gray-900">Service Order Number</h3>
                <div class="border-0">
                    <input class="w-72 border-transparent bg-gray-100" wire:model="service_number" name="service_number"
                        id="" value="{{ old('service_number') }}" />

                </div>
                @error('service_number')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="md:grid md:grid-cols-2 w-full md:gap-6">

                <h3 class="  text-lg font-medium leading-6 text-gray-900">Call Date & Time
                </h3>
                <div>
                    <input class="border-transparent" type="datetime-local" wire:model="order_time" name="order_time"
                        value="{{ old('order_time') }}" />
                </div>
                @error('order_time')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>



            <!--Service Provider Details  -->

            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Service Provider Details
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Please enter site details here
                    </p>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="">
                        <!--Parameter 1:Service Provider Details -->
                        <div class="grid grid-cols-2 items-center">
                            <div>Service Provider Name:</div>

                            <div>
                                <textarea class="w-72" wire:model="service_provider" id="" cols="30" rows="1">{{ old('service_provider') }}</textarea>
                            </div>
                            @error('service_provider')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Parameter 2:Contract Type -->
                        <div class="grid grid-cols-2 items-center mt-4">
                            <div>Contract Type :</div>

                            <div class="space-y-4 w-64 sm:flex sm:items-center sm:space-y-0 sm:space-x-1">
                                <div class="flex items-center">
                                    <input id="low" wire:model="contract_type" value="warranty"type="radio"
                                        checked class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="low"
                                        class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="medium" wire:model="contract_type" value="camc" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="medium"
                                        class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="high" wire:model="contract_type" value="n-camc" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="contract_type" value="others" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                </div>
                                @error('contract_type')
                                    <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!--Parameter 3:Call Type -->
                        <div class="grid grid-cols-2  items-center content-center mt-4">
                            <div>Call Type :</div>

                            <div class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                                <div class="flex items-center">
                                    <input id="low" wire:model="call_type" value="install" type="radio" checked
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="low"
                                        class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="medium" wire:model="call_type" value="dda" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="medium"
                                        class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="breakdown" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="pm" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high" class="ml-2 block text-sm font-medium text-gray-700">PM
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="warranty-call"
                                        type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="camc-call"type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="ncamc-call"type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="cc" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="high" wire:model="call_type" value="others-call" type="radio"
                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="high"
                                        class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                </div>
                                @error('call_type')
                                    <p class="text-xs text-red-500">{{ $message }}</p>
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
            @foreach ($errors->all() as $error)
                <li class="text-red-500 text-xs">{{ $error }}</li>
            @endforeach
        </form>
    </div>

</div>
