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
            <form class="space-y-6" action="#" method="POST">
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg  sm:p-6 ">
                    <div class="md:grid md:grid-cols-2 w-full md:gap-6">

                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notification/SO No</h3>
                        <div class="border-0">
                            <textarea class="w-72 border-transparent bg-gray-100" name="service-provider" id="" cols="30"
                                rows="1"></textarea>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 w-full md:gap-6">

                        <h3 class="  text-lg font-medium leading-6 text-gray-900">Call Date & Time
                        </h3>
                        <div>
                            <input class="border-transparent" type="datetime-local" />
                        </div>
                    </div>
                </div>

                <!--Service Provider Details  -->
                <div class="bg-white
                                px-4 py-5 shadow sm:rounded-lg sm:p-6">
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
                                    <div>Service Provider Details :</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <!--Parameter 2:Contract Type -->
                                <div class="grid grid-cols-2 items-center mt-4">
                                    <div>Contract Type :</div>

                                    <div class="space-y-4 w-64 sm:flex sm:items-center sm:space-y-0 sm:space-x-1">
                                        <div class="flex items-center">
                                            <input id="low" name="dust-level" type="radio" checked
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Parameter 3:Call Type -->
                                <div class="grid grid-cols-2  items-center content-center mt-4">
                                    <div>Call Type :</div>

                                    <div
                                        class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                                        <div class="flex items-center">
                                            <input id="low" name="dust-level" type="radio" checked
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">PM
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>

                <!--Product Details  -->
                <div class="bg-white
                                px-4 py-5 shadow sm:rounded-lg sm:p-6">
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

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>Product Rating:</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>Product Serial Number:</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>Product Part Number:</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>IP Address:</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>CTD Number:</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 items-center">
                                    <div>FSB Number:</div>

                                    <div>
                                        <textarea class="w-72" name="service-provider" id="" cols="30" rows="1"></textarea>
                                    </div>
                                </div>
                                <!--Parameter 2:Contract Type -->
                                <div class="grid grid-cols-2 items-center mt-4">
                                    <div>Product Series:</div>

                                    <div class="space-y-4 w-64 sm:flex sm:items-center sm:space-y-0 sm:space-x-1">
                                        <div class="flex items-center">
                                            <input id="low" name="dust-level" type="radio" checked
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">IP</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">3P</label>
                                        </div>


                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Parameter 3:Call Type -->
                                <div class="grid grid-cols-2  items-center content-center mt-4">
                                    <div>Call Type :</div>

                                    <div
                                        class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                                        <div class="flex items-center">
                                            <input id="low" name="dust-level" type="radio" checked
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="low"
                                                class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="medium" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="medium"
                                                class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">PM
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="high" name="dust-level" type="radio"
                                                class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="high"
                                                class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>


                <!--Customer Information -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
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
                                    <input type="text" name="first-name" id="first-name"
                                        autocomplete="given-name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email-address" id="email-address"
                                        autocomplete="email"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country"
                                        class="block text-sm font-medium text-gray-700">Country</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option>India</option>
                                        <option>SriLanka</option>
                                        <option>Nepal</option>
                                        <option>Bangaladesh</option>
                                        <option>Bhutan</option>
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                        address</label>
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="city" id="city"
                                        autocomplete="address-level2"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="region" class="block text-sm font-medium text-gray-700">State /
                                        Province</label>
                                    <input type="text" name="region" id="region"
                                        autocomplete="address-level1"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                        Postal code</label>
                                    <input type="text" name="postal-code" id="postal-code"
                                        autocomplete="postal-code"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Site Information -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
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
                                                <input type="radio" name="radio-10"
                                                    class="radio checked:bg-red-500" checked />
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">Yes</span>
                                                <input type="radio" name="radio-10"
                                                    class="radio checked:bg-blue-500" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <h4 class="font-semibold text-sm">AC Working?</h4>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">No</span>
                                                <input type="radio" name="radio-10"
                                                    class="radio checked:bg-red-500" checked />
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">Yes</span>
                                                <input type="radio" name="radio-10"
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
                                                <input type="radio" name="radio-10"
                                                    class="radio checked:bg-red-500" checked />
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label cursor-pointer">
                                                <span class="label-text">Yes</span>
                                                <input type="radio" name="radio-10"
                                                    class="radio checked:bg-blue-500" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <h4 class="font-semibold text-sm">Capacity?</h4>
                                        <label for="name" class="block text-sm font-medium text-gray-700">In
                                            kVA</label>
                                        <div class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                            <input type="text" name="name" id="name"
                                                class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                        </div>
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
                                                    <input id="low" name="dust-level" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="low"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Low</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="medium" name="dust-level" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="medium"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Medium</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="high" name="dust-level" type="radio"
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
                                                            name="L1-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L1-N" class="text-gray-500">L1-N</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L2-N" aria-describedby="voltage-description"
                                                            name="L2-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L2-N" class="text-gray-500">L2-N</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L3-N" aria-describedby="voltage-description"
                                                            name="L3-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L3-N" class="text-gray-500">L3-N</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-y-8">
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L1-N" aria-describedby="voltage-description"
                                                            name="L1-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L1-N" class="text-gray-500">L1-N</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L2-N" aria-describedby="voltage-description"
                                                            name="L2-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L2-N" class="text-gray-500">L2-N</p>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-5 items-center">
                                                        <input id="L3-N" aria-describedby="voltage-description"
                                                            name="L3-N" type="checkbox"
                                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    </div>
                                                    <div class="ml-3 text-sm">

                                                        <p id="L3-N" class="text-gray-500">L3-N</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <label for="name"
                                                        class="block text-sm font-medium text-gray-700">Neutral
                                                        to
                                                        Earth</label>
                                                    <div
                                                        class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                                        <input type="text" name="name" id="name"
                                                            class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="name"
                                                        class="block text-sm font-medium text-gray-700">Load
                                                        %</label>
                                                    <div
                                                        class="mt-1 border-b border-gray-300 focus-within:border-indigo-600">
                                                        <input type="text" name="name" id="name"
                                                            class="block w-full border-0 border-b border-transparent bg-gray-50 focus:border-indigo-600 focus:ring-0 sm:text-sm">
                                                    </div>
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
                                                    <input id="IT" name="load-type" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Data
                                                        Center</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load-type" type="radio"
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
                                                    <input id="ups-working" name="ups" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="ups-working"
                                                        class="ml-3 block text-sm font-medium text-gray-700">UPS
                                                        Working</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="ups-not-working" name="ups" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="ups-not-working"
                                                        class="ml-3 block text-sm font-medium text-gray-700">UPS
                                                        Not
                                                        Working</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="ups-under-consideration" name="ups" type="radio"
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
                </div>

                <!--Installation Details -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
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
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="make" class=" text-sm font-medium text-gray-700">Make</label>
                                        <div class="mt-1">
                                            <input type="text" name="make" id="make"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-6">
                                        <label for="quantity"
                                            class=" text-sm font-medium text-gray-700">Quantity</label>
                                        <div class="mt-1">
                                            <input type="text" name="quantity" id="quantity"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="strings"
                                            class=" text-sm font-medium text-gray-700">Strings</label>
                                        <div class="mt-1">
                                            <input type="text" name="strings" id="strings"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="batch-code" class=" text-sm font-medium text-gray-700">Batch
                                            Code</label>
                                        <div class="mt-1">
                                            <input type="text" name="batch-code" id="batch-code"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>


                                </div>





                            </div>
                        </div>

                    </div>
                </div>


                <!--Call Details Table -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Call Details</h1>
                            <p class="mt-2 text-sm text-gray-700">Please enter details of call below</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <button type="button"
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
                                        Visits</th>
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
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div>
                                            <select id="call" name="call"
                                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                <option>Call Open</option>
                                                <option selected>Call Closed</option>
                                                <option>Under Consideration</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Customer Feedback -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
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
                                                    <input id="IT" name="load-type" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Data
                                                        Center</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Others</label>
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
                                                    <input id="IT" name="load-type" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Data
                                                        Center</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Others</label>
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
                                                    <input id="IT" name="load-type" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Data
                                                        Center</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Others</label>
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
                                                    <input id="IT" name="load-type" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Data
                                                        Center</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Others</label>
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
                                                    <input id="IT" name="load-type" type="radio" checked
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="IT"
                                                        class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="industrial" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="industrial"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                </div>

                                                <div class="flex items-center">
                                                    <input id="data-center" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="data-center"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Data
                                                        Center</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="health-care" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Health
                                                        Care</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="load-type" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="Other"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Others</label>
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
                                <textarea class="w-96" name="" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center">
                            <div>Action Taken</div>
                            <div>
                                <textarea class="w-96" name="" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 items-center">
                            <div>Other Feedback</div>
                            <div>
                                <textarea class="w-96" name="" id="" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Part Replacement Feedback -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Part Replacement Details</h1>
                            <p class="mt-2 text-sm text-gray-700">Please enter details of parts replaced</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <button type="button"
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
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr>
                                    <td
                                        class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>

                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Part Failed Feedback -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
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
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>
                                    <td class="px-3 py-4 text-sm text-gray-500">
                                        <div class="mt-1">
                                            <input type="text" name="volt" id="volt"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </td>

                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--Call SignOff  -->
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
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
                                <input type="text" name="customer-name" id="customer-name"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="customer name...">
                            </div>
                        </div>
                        <div>
                            <label for="customer-designation"
                                class="block text-sm font-medium text-gray-700">Customer
                                Designation</label>
                            <div class="mt-1">
                                <input type="text" name="customer-designation" id="customer-designation"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="customer designation...">
                            </div>
                        </div>

                        <div>
                            <label for="customer-signature" class="block text-sm font-medium text-gray-700">Customer
                                Signature</label>
                            <div class="mt-1">
                                <input type="text" name="customer-signature" id="customer-signature"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="customer signature...">
                            </div>
                        </div>

                        <div>
                            <label for="sign-date" class="block text-sm font-medium text-gray-700">Date</label>
                            <div class="mt-1">
                                <input type="date" name="sign-date" id="sign-date"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="sign-date...">
                            </div>
                        </div>

                    </div>
                    <div class="mt-2 text-lg font-semibold text-gray-700">Engineer Details</div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <div>
                            <label for="engineer-name" class="block text-sm font-medium text-gray-700">Engineer
                                Name</label>
                            <div class="mt-1">
                                <input type="text" name="engineer-name" id="engineer-name"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="engineer name...">
                            </div>
                        </div>


                        <div>
                            <label for="engineer-signature" class="block text-sm font-medium text-gray-700">Engineer
                                Signature</label>
                            <div class="mt-1">
                                <input type="text" name="engineer-signature" id="engineer-signature"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="engineer signature...">
                            </div>
                        </div>

                        <div>
                            <label for="sign-date" class="block text-sm font-medium text-gray-700">Date</label>
                            <div class="mt-1">
                                <input type="date" name="sign-date" id="sign-date"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="sign-date...">
                            </div>
                        </div>

                    </div>
                </div>





            </form>


        </main>
    </div>


</x-app-layout>
