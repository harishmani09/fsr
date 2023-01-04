<div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">


    <div x-data="failedhandler()">
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Failed Parts Details</h1>
                <p class="mt-2 text-sm text-gray-700">Please enter details of failed parts below. Add new rows for more
                    parts</p>
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
                            Failed Part Code</th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                            Part Description </th>

                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                            Part Sr.No</th>

                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            Part BatchNo</th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            Part Quantity
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <template x-for="(fail,index) in fails" :key="index">
                        <tr>
                            <td><input x-model="fail.failed_part_code" type="text" name="failed_part_code[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="fail.failed_part_desc" type="text" name="failed_part_desc[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td><input x-model="fail.failed_part_srno" type="text" name="failed_part_srno[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td><input x-model="fail.failed_part_batch" type="text" name="failed_part_batch[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="fail.failed_part_qty" type="text" name="failed_part_qty[]"
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
        function failedhandler() {
            return {
                fails: [],
                addNewField() {
                    this.fails.push({
                        failed_part_code: '',
                        failed_part_desc: '',
                        failed_part_srno: '',
                        failed_part_batch: '',
                        failed_part_qty: '',

                    })
                },
                removeField(index) {
                    this.fails.splice(index, 1)
                },

                saveForm(index) {

                    let web_api = '/partFailed';
                    let response = fetch(web_api, {
                        method: 'POST',
                        body: JSON.stringify(this.fails[index]),
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
