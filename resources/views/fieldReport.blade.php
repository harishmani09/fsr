<x-app-layout>

    <div class="mx-auto max-w-4xl">
        <header>
            <h2 class="text-center mt-6 font-bold text-4xl">Create Field Report</h2>
        </header>
        <main class="text-center mt-8 font-medium">
            <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
            <!--call & service provider details -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg  sm:p-6 ">
                <form action="/serviceProvider" method="POST">
                    @csrf
                    <div class="md:grid md:grid-cols-2 w-full md:gap-6">

                        <h3 class="text-lg font-medium leading-6 text-gray-900">Service Order Number</h3>
                        <div class="border-0">
                            <input class="w-72 border-transparent bg-gray-100" name="service_number" id=""
                                value="{{ old('service_number') }}" />
                        </div>
                        @error('service_number')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:grid md:grid-cols-2 w-full md:gap-6">

                        <h3 class="  text-lg font-medium leading-6 text-gray-900">Call Date & Time
                        </h3>
                        <div>
                            <input class="border-transparent" type="datetime-local" name="order_time"
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
                                        <textarea class="w-72" name="service_provider" id="" cols="30" rows="1">{{ old('service_provider') }}</textarea>
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
                                            <input id="low" name="contract_type" value="warranty"type="radio"
                                                checked
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="contract_type" value="camc" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="high" name="contract_type" value="n-camc" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="contract_type" value="others" type="radio"
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

                                    <div
                                        class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                                        <div class="flex items-center">
                                            <input id="low" name="call_type" value="install" type="radio"
                                                checked
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="call_type" value="dda" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="breakdown" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="pm"type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">PM
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="warranty-call"
                                                type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="camc-call"type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="ncamc-call"type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="cc" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" value="others-call"
                                                type="radio"
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

            <!--Product Details  -->
            <div class="bg-white
                                px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <form action="/productDetails" method="POST">
                    @csrf
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
                                    <div>Product Model:</div>

                                    <div class="bg-gray-400">
                                        <input type="text" class="w-72" name="product_model"
                                            value="{{ old('product_model') }}" id="product_model"
                                            placeholder="enter product name..." />
                                    </div>
                                    @error('product_model')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>Product Rating:</div>

                                    <div>
                                        <input type="text" class="w-72" name="product_rating" id=""
                                            value="{{ old('product_rating') }}"
                                            placeholder="enter product rating..." />
                                    </div>
                                    @error('product_rating')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>Product Serial Number:</div>

                                    <div>
                                        <input type="text" pattern="[a-zA-Z0-9_\-]+" class="w-72"
                                            name="product_serial" id="product_serial"
                                            value="{{ old('product_serial') }}" />
                                    </div>
                                    @error('product_serial')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>Product Part Number:</div>

                                    <div>
                                        <input type="text" pattern="[a-zA-Z0-9_\-]+" class="w-72"
                                            name="product_part" id="product_part"
                                            value="{{ old('product_part') }}" />
                                    </div>
                                    @error('product_part')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>IP Address:</div>

                                    <div>
                                        <input type="text" pattern="^((25[0-5]|(2[0-4]|1\d|[1-9]|)\d)\.?\b){4}$"
                                            class="w-72" name="ip_address" id="ip_address" />
                                    </div>
                                    @error('ip_address')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>CTD Number:</div>

                                    <div>
                                        <input type="text" class="w-72" name="ctd_number" />
                                    </div>
                                    @error('ctd_number')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>FSB Number:</div>

                                    <div>
                                        <input class="w-72" name="fsb_number" type="text" />
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
                                            <input id="low" name="product_series" type="radio" checked
                                                value="series_ip"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">IP</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="product_series" type="radio"
                                                value="series_3p"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">3P</label>
                                        </div>


                                        <div class="flex items-center">
                                            <input id="high" name="product_series" type="radio"
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

                                    <div
                                        class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                                        <div class="flex items-center">
                                            <input id="low" name="call_type" type="radio" checked
                                                value="call_install"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="call_type" type="radio" value="call_dda"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio"
                                                value="call_breakdown"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio" value="call_pm"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">PM
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio"
                                                value="call_warranty"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio" value="call_camc"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio" value="call_ncamc"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio" value="call_cc"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="call_type" type="radio"
                                                value="call_others"
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


            <!--Customer Information -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <form action="/customerDetails" method="POST">
                    @csrf
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Customer Details</h3>
                            <p class="mt-1 text-sm text-gray-500">Please enter customer details here
                            </p>
                        </div>
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" name="first_name" id="first-name"
                                        value="{{ old('first_name') }}" autocomplete="given-name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('first_name')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" name="last_name" id="last-name" autocomplete="family-name"
                                        value="{{ old('last_name') }}"
                                        class="mt-1
                                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                                        focus:ring-indigo-500 sm:text-sm">
                                    @error('last_name')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email_address" id="email-address"
                                        value="{{ old('email_address') }}" autocomplete="email"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('email_address')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="mobile_no" class="block text-sm font-medium text-gray-700">Mobile
                                        Number</label>
                                    <input type="text" name="mobile_no" id="mobile_no"
                                        value="{{ old('mobile_no') }}" autocomplete="mobile"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('email_address')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country"
                                        class="block text-sm font-medium text-gray-700">Country</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        value="{{ old('country') }}"
                                        class="mt-1
                                        block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm
                                        focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="india">India</option>
                                        <option value="srilanka">SriLanka</option>
                                        <option value="nepal">Nepal</option>
                                        <option value="bangladesh">Bangaladesh</option>
                                        <option value="bhutan">Bhutan</option>
                                    </select>
                                    @error('country')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                        address</label>
                                    <input type="text" name="street_address" id="street-address"
                                        value="{{ old('street_address') }}" autocomplete="street-address"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('street_address')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="city" id="city" value="{{ old('city') }}"
                                        autocomplete="address-level2"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('city')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="region" class="block text-sm font-medium text-gray-700">State /
                                        Province</label>
                                    <input type="text" name="region" id="region" value="{{ old('region') }}"
                                        autocomplete="address-level1"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    @error('region')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                        Postal code</label>
                                    <input type="text" name="postal_code" id="postal-code"
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

            <!--Site Information -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <form action="/siteDetails" method="POST">
                    @csrf
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
                                                <input type="radio" name="ac_provided" value="no"
                                                    class="radio checked:bg-red-500" checked />
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">Yes</span>
                                                <input type="radio" name="ac_provided" value="yes"
                                                    class="radio checked:bg-blue-500" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <h4 class="font-semibold text-sm">AC Working?</h4>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">No</span>
                                                <input type="radio" name="ac_working" value="no"
                                                    class="radio checked:bg-red-500" checked />
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">Yes</span>
                                                <input type="radio" name="ac_working" value="yes"
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
                                                <input type="radio" name="dg_details" value="no"
                                                    class="radio checked:bg-red-500" checked />
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">Yes</span>
                                                <input type="radio" name="dg_details" value="yes"
                                                    class="radio checked:bg-blue-500" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <h4 class="font-semibold text-sm">Capacity?</h4>
                                        <label for="kva" class="block text-sm font-medium text-gray-700">In
                                            kVA</label>
                                        <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                            <input type="text" name="kva" id="kva"
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
                                                    <input id="low" name="dust_level" type="radio"
                                                        value="low" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="low"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Low</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="medium" name="dust_level" value="medium"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="medium"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Medium</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="high" name="dust_level" value="high"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="high"
                                                        class="ml-3 block text-sm font-medium text-gray-700">High</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--Parameter 4: Voltage Details -->
                                <div class="grid grid-cols-6 gap-2 mb-8">
                                    <h4 class="pb-0 sm:col-span-6 font-semibold text-md">Voltage Details</h4>
                                    <div class="mt-0 sm:col-span-6">
                                        <label class="text-base font-medium text-gray-900">Electricity
                                            Phase</label>

                                        <fieldset class=" flex space-x-2 justify-between">
                                            <div class="space-y-8">
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L1-N" aria-describedby="voltage-description"
                                                            name="elec_phase" type="checkbox" value="L1-N"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L1-N" class="text-gray-500">L1-N</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L2-N" aria-describedby="voltage-description"
                                                            name="elec_phase" value="L2-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L2-N" class="text-gray-500">L2-N</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L3-N" aria-describedby="voltage-description"
                                                            name="elec_phase" value="L3-N" type="checkbox"
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
                                                            name="elec_phase" value="L1-L2" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L1-L2" class="text-gray-500">L1-L2</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L2-L3" aria-describedby="voltage-description"
                                                            name="elec_phase" value="L2-L3" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L2-L3" class="text-gray-500">L2-L3</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L3-L1" aria-describedby="voltage-description"
                                                            name="elec_phase" value="L3-L1" type="checkbox"
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
                                                    <div
                                                        class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                                        <input type="text" name="neutral_volt" id="neutral_volt"
                                                            class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                                    </div>
                                                    @error('neutral_volt')
                                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label for="load_v"
                                                        class="block text-sm font-medium text-gray-700">Load
                                                        %</label>
                                                    <div
                                                        class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                                        <input type="text" name="load_v" id="load_v"
                                                            class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                                    </div>
                                                    @error('load_v')
                                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>

                                </div>
                                <!--Parameter 5:Load Type -->
                                <div class="grid grid-cols-6 gap-2">
                                    <h4 class="pb-0 sm:col-span-6 font-semibold text-md">Load Type</h4>
                                    <div class="mt-0 sm:col-span-3">

                                        <fieldset class="mt-4">

                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="IT" name="load_type" value="IT"
                                                        type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load_type" value="industrial"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load_type" value="data_center"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load_type" value="health_care"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load_type" value="load_others"
                                                        type="radio"
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
                                                    <input id="ups-working" name="ups" value="ups_working"
                                                        type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="ups-working"
                                                        class="ml-3 block text-sm font-medium text-gray-700">UPS
                                                        Working</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="ups-not-working" name="ups"
                                                        value="ups_not_working" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="ups-not-working"
                                                        class="ml-3 block text-sm font-medium text-gray-700">UPS
                                                        Not
                                                        Working</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="ups-under-consideration" name="ups"
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

            <!--Installation Details -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <form action="/installationDetails" method="POST">
                    @csrf
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
                                        <label for="volt"
                                            class=" text-sm font-medium text-gray-700">Volt/AH</label>
                                        <div class="mt-1">
                                            <input type="text" name="volt_install" id="volt"
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
                                            <input type="text" name="make_install" id="make"
                                                value="{{ old('make_install') }}"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('make_install')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="sm:col-span-6">
                                        <label for="quantity"
                                            class=" text-sm font-medium text-gray-700">Quantity</label>
                                        <div class="mt-1">
                                            <input type="text" name="quantity_install" id="quantity"
                                                value="{{ old('quantity_install') }}"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('quantity_install')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="strings"
                                            class=" text-sm font-medium text-gray-700">Strings</label>
                                        <div class="mt-1">
                                            <input type="text" name="strings_install" id="strings"
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
                                            <input type="text" name="batch_code" id="batch-code"
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


            <!--Call Details Table -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <form action="/callDetails" method="POST">
                    @csrf
                    <div x-data="{}">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-xl font-semibold text-gray-900">Call Details</h1>
                                <p class="mt-2 text-sm text-gray-700">Please enter details of call below</p>
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                                <button type="button" @click="$refs.mytable.insertRow(0)"
                                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                    Visits</button>
                            </div>
                        </div>

                        <div
                            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Call Details</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                            Job Start Date</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                            Job Start Time</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                            Job End Date</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                            Job End Time</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                            Travel Time</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                            Call Status

                                        </th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                            Engineer Accompanied</th>
                                        <th scope="col"
                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                            Complaint Details</th>

                                    </tr>
                                </thead>
                                <tbody x-ref="mytable" class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td
                                            class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                            <div class="mt-1">
                                                <input type="text" name="call_number" id="volt"
                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>

                                        </td>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                            <div class="mt-1">
                                                <input type="date" name="job_start" id="volt"
                                                    class="block w-20 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                            <div class="mt-1">
                                                <input type="datetime-local" name="job_starttime" id="volt"
                                                    class="block w-20 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div class="mt-1">
                                                <input type="date" name="job_end" id="volt"
                                                    class="block w-20 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div class="mt-1">
                                                <input type="datetime-local" name="job_endtime" id="volt"
                                                    class="block w-20 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div class="mt-1">
                                                <input type="text" name="travel_time" id="volt"
                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div>
                                                <select id="call" name="call_status"
                                                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                    <option value="call_open" selected>Call Open</option>
                                                    <option value="call_closed">Call Closed</option>
                                                    <option value="call_consider">Under Consideration</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div class="mt-1">
                                                <input type="text" name="engineer_name" id="volt"
                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500">
                                            <div class="mt-1">
                                                <input type="text" name="complaint_details" id="volt"
                                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <!--Customer Feedback -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <form action="/feedbackDetails" method="POST">
                    @csrf
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Customer Feedback</h1>
                            {{-- <p class="mt-2 text-sm text-gray-700">Please enter</p> --}}
                        </div>

                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg ">
                        <table class="min-w-full divide-y divide-gray-300 table-auto">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                        Particulars</th>
                                    <th scope="col"
                                        class="hidden  px-3 py-3.5 text-center text-sm font-semibold text-gray-900 lg:table-cell">
                                        Rating</th>


                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        Product Performance

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <fieldset class="mt-4">

                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="IT" name="product_perf" value="below_avg"
                                                        type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Below
                                                        Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="product_perf" value="average"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="product_perf" value="good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Good
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="product_perf" value="very_good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Very Good
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="product_perf" value="excellent"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Excellent</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </td>


                                </tr>
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        Quality of Service

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <fieldset class="mt-4">

                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="IT" name="service_quality" value="below_avg"
                                                        type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Below
                                                        Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="service_quality" value="average"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="service_quality" value="good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Good
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="service_quality" value="very_good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Very Good
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="service_quality" value="excellent"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Excellent</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </td>


                                </tr>
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        Accessibility of Call Logging

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <fieldset class="mt-4">

                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="IT" name="call_logging" type="radio"
                                                        value="below_avg" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Below
                                                        Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="call_logging" value="average"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="call_logging" value="good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="call_logging" value="very_good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Very
                                                        Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="call_logging" value="excellent"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Excellent</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </td>


                                </tr>
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        Engineer competency

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <fieldset class="mt-4">

                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="IT" name="engineer_quality"
                                                        value="below_avg" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Below
                                                        Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="engineer_quality" value="average"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="engineer_quality"
                                                        value="good"type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="engineer_quality"
                                                        value="very_good" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Very
                                                        Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="engineer_quality"
                                                        value="excellent" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Excellent</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </td>


                                </tr>
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        Overall Satistaction

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <fieldset class="mt-4">

                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="IT" name="overall_satisfaction"
                                                        value="below_avg" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Below
                                                        Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="overall_quality" value="average"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="overall_quality" value="good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="overall_quality"
                                                        value="very_good" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Very
                                                        Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="overall_quality" value="excellent"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Excellent</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </td>


                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                    <div class=" mt-6">
                        <div class=" grid grid-cols-2 items-center">
                            <div class="">Problem Observation</div>
                            <div>
                                <textarea class="w-96" name="problem_desc" id="" cols="30" rows="2"></textarea>
                            </div>
                            @error('problem_desc')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 items-center">
                            <div>Action Taken</div>
                            <div>
                                <textarea class="w-96" name="action_taken" id="" cols="30" rows="2"></textarea>
                            </div>
                            @error('action_taken')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 items-center">
                            <div>General Feedback</div>
                            <div>
                                <textarea class="w-96" name="general_feedback" id="" cols="30" rows="2"></textarea>
                            </div>
                            @error('general_feedback')
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


            <!--Part Replacement Feedback -->
            <div x-data class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <form action="/partReplacement" method="POST">
                    @csrf
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Part Replacement Details</h1>
                            <p class="mt-2 text-sm text-gray-700">Please enter details of parts replaced</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <button @click="$refs.partTable.insertRow()" type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                Replaced Parts</button>
                        </div>
                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Part Code</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                        Description</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        Sr No.</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                        Batch Code</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        Qty</th>

                            </thead>
                            <tbody x-ref="partTable" class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        <div class="mt-1">
                                            <input type="text" name="part_code" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="part_description" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="part_srno" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="part_batchcode" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="part_quantity" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </form>
            </div>

            <!--Part Failed Feedback -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <form action="/partFailed" method="POST">
                    @csrf
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Parts Failed Details</h1>
                            <p class="mt-2 text-sm text-gray-700">Please enter details of failed parts</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <button type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                Failed Parts</button>
                        </div>
                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Part Code</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                        Description</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        Sr No.</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                        Batch Code</th>
                                    <th scope="col"
                                        class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                        Qty</th>

                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        <div class="mt-1">
                                            <input type="text" name="failed_part_code" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('failed_part_code')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="failed_part_desc" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('failed_part_desc')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="failed_part_srno" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('failed_part_srno')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="failed_part_batch" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('failed_part_batch')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="failed_part_qty" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        @error('failed_part_qty')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </td>

                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </form>
            </div>

            <!--Call SignOff  -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <form action="/signoff" method="POST">
                    @csrf
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Call SignOff Details</h1>
                            <div class="mt-2 text-lg font-semibold text-gray-700">Customer Details</div>
                        </div>

                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <div>
                            <label for="customer-name" class="block text-sm font-medium text-gray-700">Customer
                                Name</label>
                            <div class="mt-1">
                                <input type="text" name="customer_name" id="customer-name"
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
                                <input type="number" name="mobile_no" id="mobile_no"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="customer mobile...">
                            </div>
                            @error('mobile_no')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="customer-designation"
                                class="block text-sm font-medium text-gray-700">Customer
                                Designation</label>
                            <div class="mt-1">
                                <input type="text" name="customer_designation" id="customer-designation"
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
                                <input type="text" name="customer_signature" id="customer-signature"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="customer signature...">
                            </div>
                            @error('customer_signature')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="mt-2 text-lg font-semibold text-gray-700">Engineer Details</div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <div>
                            <label for="engineer-name" class="block text-sm font-medium text-gray-700">Engineer
                                Name</label>
                            <div class="mt-1">
                                <input type="text" name="engineer_name" id="engineer-name"
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
                                <input type="text" name="engineer_signature" id="engineer-signature"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="engineer signature...">
                            </div>
                            @error('engineer_signature')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="sign-date" class="block text-sm font-medium text-gray-700">SignOff
                                Date</label>
                            <div class="mt-1">
                                <input type="date" name="signoff_date" id="sign-date"
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








        </main>
    </div>


</x-app-layout>
