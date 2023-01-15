<div>
    <form action="#" wire:submit.prevent="productForm" method="POST">
        @csrf

        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Product Details
                </h3>
                <p class="mt-1 text-sm text-gray-500">Please enter site details here
                </p>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="">
                    <!--Parameter 1:Service Provider Details -->
                    <div class="grid grid-cols-2 items-center">
                        <div>Product Name:</div>

                        <div class="bg-gray-400">
                            <input type="text" class="w-72" wire:model="product_name"
                                value="{{ old('product_name') }}" id="product_name"
                                placeholder="enter product mode..." />
                        </div>
                        @error('product_name')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>Product Category:</div>

                        <div>
                            <input type="text" class="w-72" wire:model="product_category" id=""
                                value="{{ old('product_category') }}" placeholder="enter product category..." />
                        </div>
                        @error('product_category')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>Product Model:</div>

                        <div>
                            <input type="text" pattern="[a-zA-Z0-9_\-]+" class="w-72" wire:model="product_model"
                                id="product_model" value="{{ old('product_model') }}" />
                        </div>
                        @error('product_model')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>Product Capacity:</div>

                        <div>
                            <input type="text" pattern="[a-zA-Z0-9_\-]+" class="w-72" wire:model="product_capacity"
                                id="product_capacity" value="{{ old('product_capacity') }}" />
                        </div>
                        @error('product_capacity')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>IP Address:</div>

                        <div>
                            <input type="text" pattern="^((25[0-5]|(2[0-4]|1\d|[1-9]|)\d)\.?\b){4}$" class="w-72"
                                wire:model="ip_address" id="ip_address" />
                        </div>
                        @error('ip_address')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>Product Status:</div>

                        <div>
                            <input type="text" class="w-72" wire:model="product_status" />
                        </div>
                        @error('product_status')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>FSB Number:</div>

                        <div>
                            <input class="w-72" wire:model="fsb_number" type="text" />
                        </div>
                        @error('fsb_number')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Parameter 2:Contract Type -->
                    <div class="grid grid-cols-2 items-center mt-4">
                        <div>Product Series:</div>

                        <div class="space-y-4 w-64 sm:flex sm:items-center sm:space-y-0 sm:space-x-1">
                            <div class="flex items-center">
                                <input id="low" wire:model="product_series" type="radio" checked
                                    value="series_ip" class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="low" class="ml-2 block text-sm font-medium text-gray-700">IP</label>
                            </div>

                            <div class="flex items-center">
                                <input id="medium" wire:model="product_series" type="radio" value="series_3p"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="medium" class="ml-2 block text-sm font-medium text-gray-700">3P</label>
                            </div>


                            <div class="flex items-center">
                                <input id="high" wire:model="product_series" name="product_series" type="radio"
                                    value="series_others"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high"
                                    class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                            </div>
                            @error('product_series')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Parameter 3:Call Type -->
                    <div class="grid grid-cols-2  items-center content-center mt-4">
                        <div>Call Type :</div>

                        <div class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                            <div class="flex items-center">
                                <input id="low" wire:model="call_type" type="radio" checked value="call_install"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="low"
                                    class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                            </div>

                            <div class="flex items-center">
                                <input id="medium" wire:model="call_type" type="radio" value="call_dda"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="medium" class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                            </div>

                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_breakdown"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high"
                                    class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                            </div>
                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_pm"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high" class="ml-2 block text-sm font-medium text-gray-700">PM
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_warranty"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high"
                                    class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                            </div>
                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_camc"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high"
                                    class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                            </div>
                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_ncamc"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high"
                                    class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                            </div>
                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_cc"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high" class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                            </div>
                            <div class="flex items-center">
                                <input id="high" wire:model="call_type" type="radio" value="call_others"
                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="high"
                                    class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                            </div>
                            @error('call_type')
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
        @foreach ($errors->all() as $error)
            <p class="text-red-500 text-xs">{{ $error }}</p>
        @endforeach


    </form>
</div>
