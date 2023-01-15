<div>
    <form action="#" method="POST" wire:submit.prevent="customerForm">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Customer Details</h3>
                <p class="mt-1 text-sm text-gray-500">Please enter customer details here
                </p>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Company
                            name</label>
                        <input type="text" wire:model="company_name" name="company_name" id="company-name"
                            value="{{ old('company_name') }}" autocomplete="given-name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('first_name')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="contact_name" class="block text-sm font-medium text-gray-700">Contact Person
                            Name</label>
                        <input type="text" wire:model="contact_name" name="contact_name" id="contact_name"
                            value="{{ old('contact_name') }}"
                            class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm">
                        @error('contact_name')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Contact Person Email
                        </label>
                        <input type="text" wire:model="email_address" name="email_address" id="email-address"
                            value="{{ old('email_address') }}" autocomplete="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('email_address')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="mobile_no" class="block text-sm font-medium text-gray-700">Contact Mobile
                            Number</label>
                        <input type="text" wire:model="mobile_no" name="mobile_no" id="mobile_no"
                            value="{{ old('mobile_no') }}" autocomplete="mobile"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('mobile_no')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <select id="country" wire:model="country" name="country" autocomplete="country-name"
                            value="{{ old('country') }}"
                            class="mt-1
                            block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm
                            focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value="india">India</option>
                            <option value="srilanka">Sri Lanka</option>
                            <option value="nepal">Nepal</option>
                        </select>
                        @error('country')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="street-address" class="block text-sm font-medium text-gray-700">Company Street
                            address</label>
                        <input type="text" wire:model="street_address" name="street_address" id="street-address"
                            value="{{ old('street_address') }}" autocomplete="street-address"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('street_address')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="city" class="block text-sm font-medium text-gray-700"> Company City</label>
                        <input type="text" wire:model="city" name="city" id="city"
                            value="{{ old('city') }}" autocomplete="address-level2"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('city')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="region" class="block text-sm font-medium text-gray-700">Company State
                        </label>
                        <input type="text" wire:model="region" name="region" id="region"
                            value="{{ old('region') }}" autocomplete="address-level1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('region')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                            Postal code</label>
                        <input type="text" wire:model="postal_code" name="postal_code" id="postal-code"
                            value="{{ old('postal_code') }}" autocomplete="postal_code"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('postal_code')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
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
