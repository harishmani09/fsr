<div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">


    <div x-data="expensehandler()">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Expense Details</h1>
                <p class="mt-2 text-sm text-gray-700">Please enter details of incurred. Add new rows for more than one
                    entry</p>
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
                            Expense Head</th>
                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                            Expense Description </th>

                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                            Total Expense</th>

                        <th scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                            Expense Claimed</th>


                    </tr>
                </thead>
                <tbody>
                    <template x-for="(expense,index) in expenses" :key="index">
                        <tr>
                            <td><input x-model="expense.adhoc_expense" type="text" name="adhoc_expense[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>
                            <td><input x-model="expense.exp_desc" type="text" name="exp_desc[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td><input x-model="expense.exp_amount" type="text" name="exp_amount[]"
                                    class="w-24 rounded-md border-gray-300">
                            </td>

                            <td><input x-model="expense.claim_amount" type="text" name="claim_amount[]"
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

    </div>
    <script type="text/javascript">
        function expensehandler() {
            return {
                expenses: [],
                addNewField() {
                    this.expenses.push({
                        adhoc_expense: '',
                        exp_desc: '',
                        exp_amount: '',
                        claim_amount: '',


                    })
                },
                removeField(index) {
                    this.expenses.splice(index, 1)
                },

                saveForm(index) {

                    let web_api = '/sample1';
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
