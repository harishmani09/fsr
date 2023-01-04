<div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">


    <div x-data="handler()">
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Call Details</h1>
                <p class="mt-2 text-sm text-gray-700">Please enter details of call below</p>
            </div>
            {{-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button type="button" onclick="addCalls()"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                    Visits</button>
            </div> --}}
        </div>

        <div class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
            <table id="cust_calls" class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col"
                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                            Call Details</th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                            Job Started </th>

                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                            Job Ended</th>

                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            Travel Time</th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            Call Status

                        </th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            With Engineer? </th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            Complaint Details</th>

                    </tr>
                </thead>
                <tbody>
                    <template x-for="(call,index) in calls" :key="index">
                        <tr>
                            <td><input x-model="call.call_number" type="text" name="call_number[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="call.job_start" type="datetime-local" name="job_start[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td><input x-model="call.job_end" type="datetime-local" name="job_end[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td><input x-model="call.travel_time" type="text" name="travel_time[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="call.call_status" type="text" name="call_status[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="call.engineer_name" type="text" name="engineer_name[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="call.complaint_details" type="text" name="complaint_details[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td>
                                <button type="button" class="bg-red-500 text-white px-1 py-0.5 text-xs rounded-md"
                                    @click.prevent="removeField(index)">&times;</button>
                                <button type="button" class="bg-blue-300 text-xs rounded-md py-1 px-2 font-semibold "
                                    @click.prevent="saveForm(index)">Save</button>
                            </td>
                        </tr>
                    </template>
                </tbody>
                <tfoot>
                    <tr>
                        <td><button type="button" @click.prevent="addNewField()"
                                class="rounded-md bg-blue-500 py-1 px-2  text-white text-xs font-bold">+ Add
                                Row</button></td>

                    </tr>
                </tfoot>
            </table>
        </div>
        {{-- <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div> --}}
    </div>
    <script type="text/javascript">
        function handler() {
            return {
                calls: [],
                addNewField() {
                    this.calls.push({
                        call_number: '',
                        job_start: '',
                        job_end: '',
                        travel_time: '',
                        call_status: '',
                        engineer_name: '',
                        complaint_details: '',
                    })
                },
                removeField(index) {
                    this.calls.splice(index, 1)
                },

                saveForm(index) {

                    let web_api = '/callDetails';
                    let response = fetch(web_api, {
                        method: 'POST',
                        body: JSON.stringify(this.calls[index]),
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content

                        }
                    }).then(response => {
                        if (!response.ok) {
                            throw new Error('there was an error in processing the request');
                        }
                    })

                }


            }

        }
    </script>
</div>
