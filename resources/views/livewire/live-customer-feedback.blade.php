<div>
    <form action="#" wire:submit.prevent="customerFeedbackForm" method="POST">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Customer Feedback</h1>
                {{-- <p class="mt-2 text-sm text-gray-700">Please enter</p> --}}
            </div>

        </div>
        <div class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg ">
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
                                        <input id="IT" wire:model="product_perf" name="product_perf"
                                            value="below_avg" type="radio" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="IT" class="ml-3 block text-sm font-medium text-gray-700">Below
                                            Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="industrial" wire:model="product_perf" name="product_perf"
                                            value="average" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="industrial"
                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="data-center" wire:model="product_perf" name="product_perf"
                                            value="good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="data-center"
                                            class="ml-3 block text-sm font-medium text-gray-700">Good
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="health-care" wire:model="product_perf" name="product_perf"
                                            value="very_good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="health-care"
                                            class="ml-3 block text-sm font-medium text-gray-700">Very Good
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other" wire:model="product_perf" name="product_perf"
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
                            Quality of Service

                        </td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                            <fieldset class="mt-4">

                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="IT" wire:model="service_quality" name="service_quality"
                                            value="below_avg" type="radio" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="IT" class="ml-3 block text-sm font-medium text-gray-700">Below
                                            Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="industrial" wire:model="service_quality" name="service_quality"
                                            value="average" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="industrial"
                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="data-center" wire:model="service_quality" name="service_quality"
                                            value="good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="data-center"
                                            class="ml-3 block text-sm font-medium text-gray-700">Good
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="health-care" wire:model="service_quality" name="service_quality"
                                            value="very_good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="health-care"
                                            class="ml-3 block text-sm font-medium text-gray-700">Very Good
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other" wire:model="service_quality" name="service_quality"
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
                            Accessibility of Call Logging

                        </td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                            <fieldset class="mt-4">

                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="IT" wire:model="call_logging" name="call_logging"
                                            type="radio" value="below_avg" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="IT"
                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                            Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="industrial" wire:model="call_logging" name="call_logging"
                                            value="average" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="industrial"
                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="data-center" wire:model="call_logging" name="call_logging"
                                            value="good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="data-center"
                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="health-care" wire:model="call_logging" name="call_logging"
                                            value="very_good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="health-care"
                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                            Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other" wire:model="call_logging" name="call_logging"
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
                            Engineer competency

                        </td>
                        <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                            <fieldset class="mt-4">

                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="IT" wire:model="engineer_quality" name="engineer_quality"
                                            value="below_avg" type="radio" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="IT"
                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                            Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="industrial" wire:model="engineer_quality" name="engineer_quality"
                                            value="average" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="industrial"
                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="data-center" wire:model="engineer_quality" name="engineer_quality"
                                            value="good"type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="data-center"
                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="health-care" wire:model="engineer_quality" name="engineer_quality"
                                            value="very_good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="health-care"
                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                            Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other" wire:model="engineer_quality" name="engineer_quality"
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
                                        <input id="IT" wire:model="overall_satisfaction"
                                            name="overall_satisfaction" value="below_avg" type="radio" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="IT"
                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                            Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="industrial" wire:model="overall_satisfaction"
                                            name="overall_quality" value="average" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="industrial"
                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="data-center" wire:model="overall_satisfaction"
                                            name="overall_quality" value="good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="data-center"
                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="health-care" wire:model="overall_satisfaction"
                                            name="overall_quality" value="very_good" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="health-care"
                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                            Good</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="other" wire:model="overall_satisfaction"
                                            name="overall_quality" value="excellent" type="radio"
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
                    <textarea class="w-96" wire:model="problem_desc" name="problem_desc" id="" cols="30"
                        rows="2"></textarea>
                </div>
                @error('problem_desc')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-2 items-center">
                <div>Action Taken</div>
                <div>
                    <textarea class="w-96" wire:model="action_taken" name="action_taken" id="" cols="30"
                        rows="2"></textarea>
                </div>
                @error('action_taken')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="grid grid-cols-2 items-center">
                <div>General Feedback</div>
                <div>
                    <textarea class="w-96" wire:model="general_feedback" name="general_feedback" id="" cols="30"
                        rows="2"></textarea>
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
