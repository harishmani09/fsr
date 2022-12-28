<x-app-layout>

    <div class="mx-auto max-w-4xl">
        <header>
            <h2 class="text-center mt-6 font-bold text-4xl">Create Field Report</h2>
        </header>
        <main class="text-center mt-8 font-medium">

            <!--call & service provider details -->
            <livewire:live-service-provider />
            <!--Product Details  -->
            <div class="bg-white
                                px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <livewire:live-product />
            </div>


            <!--Customer Information -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <livewire:live-customer />
            </div>

            <!--Site Information -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                <livewire:live-site />
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
                                        <label for="volt" class=" text-sm font-medium text-gray-700">Volt/AH</label>
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
                                        <label for="strings" class=" text-sm font-medium text-gray-700">Strings</label>
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
                                <button type="button" onclick="addCalls()"
                                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                    Visits</button>
                            </div>
                        </div>

                        <div
                            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                            <table id="cust_calls" class="min-w-full divide-y divide-gray-300">

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
                                                    <input id="IT" name="engineer_quality" value="below_avg"
                                                        type="radio" checked
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
                                                    <input id="health-care" name="engineer_quality" value="very_good"
                                                        type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                    <label for="health-care"
                                                        class="ml-3 block text-sm font-medium text-gray-700">Very
                                                        Good</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="other" name="engineer_quality" value="excellent"
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
                                                    <input id="health-care" name="overall_quality" value="very_good"
                                                        type="radio"
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
                            <button onclick="addNewRow()" type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                Replaced Parts</button>
                            {{-- <button onclick="deleteRow(ele)" type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Delete
                                Parts</button> --}}
                        </div>
                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <table id="partTable" class="min-w-full divide-y divide-gray-300">

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
                            </tr>


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
                            <button type="button" onclick="addFailedPart()"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                                Failed Parts</button>
                        </div>
                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <table id="failedParts" class="min-w-full divide-y divide-gray-300">

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
                            </tr>
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
                            <label for="customer-designation" class="block text-sm font-medium text-gray-700">Customer
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

            <!--Ad Hoc Expenses -->
            <div x-data class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <form action="/expenses" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Upload Expense Invoices</h1>
                            <p class="mt-2 text-sm text-gray-700">Please Enter Invoice Expenses</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                            <button onclick="addNewExpenseRow()" type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                                Add Adhoc Expenses
                            </button>
                        </div>
                    </div>
                    <div
                        class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                        <table id="expenseTable" class="min-w-full divide-y divide-gray-300">

                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    Expense Name</th>
                                <th scope="col"
                                    class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                    Expense Description</th>

                                <th scope="col"
                                    class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                    Total Expense</th>
                                <th scope="col"
                                    class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                    Amount Claimed</th>
                            </tr>
                        </table>
                        <div
                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="cover-photo"
                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Expense
                                Invoices</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                <div
                                    class="flex max-w-lg justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                            fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload"
                                                class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="exp_file" type="file"
                                                    class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, PDF up to 5MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        function addNewRow() {
            const table = document.querySelector('#partTable');
            const rowCount = table.rows.length;
            const cellCount = table.rows[0].cells.length;
            const row = table.insertRow(rowCount);
            for (let i = 0; i <= cellCount; i++) {
                let cell = row.insertCell(i);
                if (i <= cellCount - 1) {
                    cell.innerHTML =
                        '<input type="text" name="part_quantity" class ="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >';
                } else {
                    cell.innerHTML = '<input type="button" value="delete" onclick="deleteRow(this)" />'
                }
            }
        }

        function deleteRow(ele) {
            const table = document.querySelector('#partTable');
            const rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert('there is no row available to delete');
                return;
            };
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }

        }

        function addNewExpenseRow() {
            const table = document.querySelector('#expenseTable');
            const rowCount = table.rows.length;
            const cellCount = table.rows[0].cells.length;
            const row = table.insertRow(rowCount);
            for (let i = 0; i <= cellCount; i++) {
                let cell = row.insertCell(i);
                if (i <= cellCount - 1) {
                    cell.innerHTML =
                        '<input type="text" name="adhoc_expense" class ="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >';
                } else {
                    cell.innerHTML = '<input type="button" value="delete" onclick="deleteExpenseRow(this)" />'
                }
            }
        }

        function deleteExpenseRow(ele) {
            const table = document.querySelector('#expenseTable');
            const rowCount = table.rows.length;
            if (rowCount < 1) {
                alert('there is no row available to delete');
                return;
            };
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }

        }

        function addFailedPart() {
            const table = document.querySelector('#failedParts');
            const rowCount = table.rows.length;
            const cellCount = table.rows[0].cells.length;
            const row = table.insertRow(rowCount);
            for (let i = 0; i <= cellCount; i++) {
                let cell = row.insertCell(i);
                if (i <= cellCount - 1) {
                    cell.innerHTML =
                        '<input type="text" name="adhoc_expense" class ="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >';
                } else {
                    cell.innerHTML = '<input type="button" value="delete" onclick="deleteExpenseRow(this)" />'
                }
            }
        }

        function deleteFailedPart(ele) {
            const table = document.querySelector('#failedParts');
            const rowCount = table.rows.length;
            if (rowCount < 1) {
                alert('there is no row available to delete');
                return;
            };
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }

        }

        function addCalls() {
            const table = document.querySelector('#cust_calls');
            const rowCount = table.rows.length;
            const cellCount = table.rows[0].cells.length;
            const row = table.insertRow(rowCount);
            for (let i = 0; i <= cellCount; i++) {
                let cell = row.insertCell(i);
                if (i <= cellCount - 1) {
                    cell.innerHTML =
                        '<input type="text" name="adhoc_expense" class ="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >';
                } else {
                    cell.innerHTML = '<input type="button" value="delete" onclick="deleteExpenseRow(this)" />'
                }
            }
        }

        function deleteCalls(ele) {
            const table = document.querySelector('#cust_calls');
            const rowCount = table.rows.length;
            if (rowCount < 1) {
                alert('there is no row available to delete');
                return;
            };
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }

        }
    </script>
</x-app-layout>
