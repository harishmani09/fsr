<x-app-layout>
    <div>
        <x-slot name="header">
            <div class="flex justify-between">
                <div>
                    {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Field Report') }}
                    </h2> --}}
                </div>
                <div class="flex space-x-4 items-center">
                    <a href="{{ route('reports.pdf') }}"class="">
                        <svg width="15mm" height="12mm" viewBox="0 0 131.102 92.126">
                            <g fill="#6B7280" fill-opacity=".945">
                                <path
                                    d="M86.753 53.163v11.232H46.105V53.163h-7.813v14.534c0 1.822 1.746 3.3 3.912 3.3h48.449c2.164 0 3.912-1.476 3.912-3.3V53.163h-7.812zM65.713 52.05 54.528 40.624s-1.701-1.358.144-1.358h6.303v-16.63s-.25-.81 1.193-.81h8.872c1.04 0 1.017.682 1.017.682v16.415h5.818c2.24 0 .553 1.422.553 1.422S68.91 51.024 67.584 52.144c-.955.812-1.87-.095-1.87-.095z" />
                            </g>
                        </svg></a>
                    <div>

                        <svg width="30" height="22" version="1.0" viewBox="0 0 1280 914" fill="#6B7280">
                            <path
                                d="M119.5 1.1C68.5 7.6 24.2 43.9 7.4 93.2.3 114.1.9 83.2.4 451c-.2 227 0 334.5.7 341 2.6 23.7 11.6 46.8 25.7 66 6.6 9.1 20.4 22.9 29 29 14.4 10.3 33.4 19 51.1 23.2 8.5 2 11.7 2.1 226.1 2.9 119.6.5 355.2.8 523.5.6l306-.3 8.5-2.1c13.7-3.4 20.7-6 33.5-12.3 40.9-20.2 68.4-59.4 74.4-105.9.8-5.9 1.1-107.9 1.1-344.5-.1-277.4-.3-337.1-1.4-341.6-4.2-17.3-10.9-32.7-20.2-46.7-7.1-10.7-20.3-24.6-31.3-32.9-8.8-6.7-30-17.7-39.9-20.8-3-1-9.5-2.7-14.5-3.9l-9.2-2.2L645 .4c-296.1-.1-521.5.2-525.5.7zM904 317.6C736.2 485.4 656.9 564.1 653.5 566.1c-6.9 4-15 4.1-21.7.1-2.9-1.7-94.8-92.8-250.7-248.5L135 72h1014.5L904 317.6zm307 132.6-.5 342.3-2.2 7.7c-5.8 20.4-15.3 31.8-32.6 39.1l-7.2 3-172.7-173.4-172.7-173.4 193.7-193.8C1123.3 195.2 1210.7 108 1211 108c.3 0 .3 154 0 342.2zM268 301.5 458.5 492 283.8 666.7 109.1 841.4l-6.2-2.9c-12.3-5.9-20.8-17.3-24.6-33-1.6-6.5-1.8-30.1-2-350.8-.2-189 0-343.7.4-343.7.5 0 86.5 85.7 191.3 190.5zm300.5 300c45.1 45.5 62 61.9 64.9 63.1 5 2 13.3 2 18.2-.1 2.8-1.1 20.7-18.4 63.4-61l59.5-59.5 150.3 150.3C1007.4 776.9 1075 844.7 1075 845c0 .3-196.4.5-436.5.5S202 845.3 202 845c0-.6 304.3-305 305-305 .3 0 28 27.6 61.5 61.5z" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto max-w-4xl">


                        <main class="text-center mt-8 font-medium">


                            <div class="bg-white px-4 py-5 shadow border border-gray-100 sm:rounded-lg  sm:p-6 ">

                                <div>
                                    <!--Header with Heading -->
                                    <div class="flex items-center justify-between mb-8 border-b">
                                        <div class="flex-shrink-0">
                                            <img class="h-8 w-8"
                                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300"
                                                alt="Your Company">
                                        </div>
                                        <div class="space-y-1 flex flex-col">
                                            <div class="text-3xl font-bold ">Field Service Report</div>
                                            <div class="font-bold text-sm">Service Provider Name</div>
                                            <div class="font-bold text-sm pb-2">Service Provider Address</div>
                                        </div>
                                        <div class="flex-shrink text-sm space-y-1 pb-2">
                                            <div>Customer Care Number: 1800 *** **** </div>
                                            <div>Email: support@company.com </div>
                                            <div>Website: www.company.com </div>
                                        </div>
                                    </div>

                                    <!--Customer & Ticket Details  -->
                                    <div class="flex">
                                        <!--Customer Details  -->
                                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                            <div class="px-4 py-5 sm:px-6">
                                                <div class=" text-lg font-medium leading-6 text-gray-900">
                                                    Customer Details
                                                </div>
                                            </div>
                                            <div class="flex justify-between border-gray-200">
                                                @foreach ($customers as $customer)
                                                    <dl>
                                                        <div
                                                            class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                                            <dt class=" text-sm font-medium text-gray-500">
                                                                Company Name
                                                            </dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                {{ $customer->company_name }}</dd>
                                                        </div>
                                                        <div
                                                            class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Company
                                                                Address
                                                            </dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                {{ $customer->street_address }},{{ $customer->city }},{{ $customer->region }},Pin:{{ $customer->postal_code }},{{ $customer->country }}
                                                            </dd>
                                                        </div>

                                                    </dl>
                                                    <dl>
                                                        <div
                                                            class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-1 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Contact Person
                                                            </dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                {{ $customer->contact_name }}</dd>
                                                        </div>
                                                        <div
                                                            class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-1 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Contact
                                                                Email </dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                {{ $customer->email_address }}</dd>
                                                        </div>
                                                        <div
                                                            class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-1 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Contact
                                                                Phone </dt>
                                                            <dd
                                                                class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                {{ $customer->mobile_no }}</dd>
                                                        </div>

                                                    </dl>
                                                @endforeach
                                            </div>

                                        </div>
                                        <!--Ticket Details  -->
                                        <div class="ml-2">
                                            @foreach ($services as $service)
                                                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                                    <div class="px-4 py-5 sm:px-6">
                                                        <h3 class=" text-lg font-medium leading-6 text-gray-900">
                                                            Ticket
                                                            Details</h3>

                                                    </div>
                                                    <div class="border-t border-gray-200">
                                                        <dl>
                                                            <div
                                                                class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                <dt class="text-sm font-medium text-gray-500">Ticket Id
                                                                </dt>
                                                                <dd
                                                                    class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                    {{ $service->service_number }}</dd>
                                                            </div>
                                                            <div
                                                                class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                                <dt class="text-sm font-medium text-gray-500">Call
                                                                    Date & Time</dt>
                                                                <dd
                                                                    class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                    {{ $service->order_time }}</dd>
                                                            </div>
                                            @endforeach
                                            @foreach ($engineers as $engineer)
                                                <div
                                                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Call
                                                        Closed
                                                        Date
                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $engineer->signoff_date }}</dd>
                                                </div>
                                            @endforeach
                                            </dl>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Complaint Details -->
                            <div class="flex border-t mt-2">
                                @foreach ($calls as $call)
                                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                        <dl>
                                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Customer Complaint
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                    {{ $call->complaint_details }}</dd>
                                            </div>
                                        </dl>
                                    </div>
                                @endforeach
                                <div>
                                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                        <dl>
                                            @foreach ($services as $service)
                                                <div
                                                    class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Call Category
                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $service->call_type }}</dd>
                                                </div>
                                            @endforeach
                                            @foreach ($calls as $call)
                                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Call Status
                                                    </dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $call->call_status }}</dd>
                                                </div>
                                            @endforeach
                                        </dl>
                                    </div>
                                </div>
                            </div>

                            <!--Product Details -->
                            <div class="mt-2">
                                <div class="text-lg leading-6 font-medium">Product Details </div>

                                <div class="overflow-hidden shadow md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                    Product Name</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Product Category</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Product Model</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Product Capacity</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Product Serial No.</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Unit Working Satus</th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td
                                                        class="border-r whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        {{ $product->product_name }}</td>
                                                    <td
                                                        class=" border-r whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        {{ $product->product_category }}</td>
                                                    <td
                                                        class="border-r whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        {{ $product->product_model }}</td>
                                                    <td
                                                        class="border-r whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        {{ $product->product_capacity }}</td>
                                                    <td
                                                        class="border-r whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        {{ $product->product_series }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                        {{ $product->product_status }}</td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!--Service & Observation -->
                            <div class="mt-2">
                                <div class="text-lg leading-6 font-medium">Service & Observation </div>
                                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                    @foreach ($feedbacks as $feedback)
                                        <dl>
                                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">Observed Problem:
                                                </dt>
                                                <dd
                                                    class="border-l-2 mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                    {{ $feedback->problem_desc }}</dd>
                                            </div>
                                        </dl>
                                    @endforeach
                                </div>
                                <div class="mt-2 border-t overflow-hidden shadow md:rounded-lg">
                                    <div class="grid grid-cols-3">
                                        <div class="border-b border-r grid-rows-3">
                                            <div class="border-b bg-gray-50">Input Current</div>
                                            <div class=" grid grid-cols-3">
                                                <div>a</div>
                                                <div>b</div>
                                                <div>c</div>
                                            </div>
                                            <div class=" grid grid-cols-3">
                                                <div>p</div>
                                                <div>q</div>
                                                <div>r</div>
                                            </div>
                                        </div>
                                        <div class=" border-b border-r grid-rows-3">
                                            <div class="border-b bg-gray-50 ">Output Current</div>
                                            <div class=" grid grid-cols-2">
                                                <div>a</div>
                                                <div>b</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div>p</div>
                                                <div>q</div>
                                            </div>
                                        </div>
                                        <div class=" border-b  grid-rows-3">
                                            <div class="border-b bg-gray-50">Battery Current</div>
                                            <div class=" grid grid-cols-2">
                                                <div>Charging Current</div>
                                                <div>Discharge Current</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div>p</div>
                                                <div>q</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class=" border-b border-r grid-rows-3">
                                            <div class="bg-gray-50">Input Voltage</div>
                                            <div class=" border-t grid grid-cols-2">
                                                <div>L-N</div>
                                                <div>E-N</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div>p</div>
                                                <div>q</div>

                                            </div>
                                        </div>
                                        <div class=" border-b border-r grid-rows-3">
                                            <div class="bg-gray-50">Output Voltage</div>
                                            <div class="border-t grid grid-cols-2">
                                                <div>L-N</div>
                                                <div>E-N</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div>p</div>
                                                <div>q</div>
                                            </div>
                                        </div>
                                        <div class=" border-b grid-rows-3">
                                            <div class="bg-gray-50">Battery Voltage</div>
                                            <div class="border-t grid grid-cols-2">
                                                <div class="border-r">Charging Voltage</div>
                                                <div>Discharge Voltage after 3-5 Min</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div class="border-r">p</div>
                                                <div>q</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <div class="grid-rows-3 border-r">
                                            <div class="bg-gray-50">Frequency</div>
                                            <div class=" border-t grid grid-cols-2">
                                                <div class="border-r border-b">I/O</div>
                                                <div class="border-r border-b">O/P</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div>50</div>
                                                <div>50</div>
                                            </div>
                                        </div>
                                        <div class="grid-rows-3 border-r">
                                            <div class="bg-gray-50 ">
                                                Display Information</div>
                                            <div class="border-t grid grid-cols-2">
                                                <div class="border-r border-b">Error Code With Description
                                                </div>
                                                <div class="border-r border-b">Load %</div>

                                            </div>
                                            <div class=" grid grid-cols-2">
                                                <div>50</div>
                                                <div>50</div>
                                            </div>
                                        </div>
                                        <div class="  grid-rows-2">
                                            <div class="bg-gray-50">Other Fault observation if any</div>
                                            <div class="border-t">no</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mt-2 border-y">
                                            <h3 class="border-b">Battery Test Report</h3>
                                            <div class="grid grid-cols-5 border-b">
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Battery Make:</div>
                                                    <div>Quanta</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Battery Model:</div>
                                                    <div>SMF</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Battery AH:</div>
                                                    <div>26</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Nos of Bank:</div>
                                                    <div>1</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Ambient Temperature:</div>
                                                    <div>0</div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-5 mt-2 border-y">
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Installed Battery Position
                                                        from +(VE)</div>
                                                    <div>Quanta</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Batch Code</div>
                                                    <div>Quanta</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Serial No</div>
                                                    <div>Quanta</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Charging Voltage</div>
                                                    <div>Quanta</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">
                                                        Battery
                                                        Voltage</div>
                                                    <div>Quanta</div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-[4fr_1.1fr_1fr_1fr_1.5fr]  mt-2 border-y">
                                                <div class="grid-rows-2 ">
                                                    <div class="border-b bg-gray-50">Battery Voltage during
                                                        Discharging
                                                    </div>
                                                    <div class="border-r grid grid-cols-5">
                                                        <div class="grid-rows-2">
                                                            <div class="text-xs">After 2 Mins</div>
                                                            <div>ok</div>
                                                        </div>
                                                        <div class="grid-rows-2">
                                                            <div class="text-xs">After 5 Mins</div>
                                                            <div>ok</div>
                                                        </div>
                                                        <div class="grid-rows-2">
                                                            <div class="text-xs">After 10 Mins</div>
                                                            <div>ok</div>
                                                        </div>
                                                        <div class="grid-rows-2">
                                                            <div class="text-xs">After 20 Mins</div>
                                                            <div>ok</div>
                                                        </div>
                                                        <div class="grid-rows-2">
                                                            <div class="text-xs">Battery Low/Before Cut off
                                                            </div>
                                                            <div>ok</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b text-md bg-gray-50">Battery Status
                                                    </div>
                                                    <div>ok</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Total Voltage</div>
                                                    <div>243</div>
                                                </div>
                                                <div class="grid-rows-2 border-r">
                                                    <div class="border-b bg-gray-50">Total Current</div>
                                                    <div>26</div>
                                                </div>
                                                <div class="grid-rows-2">
                                                    <div class="border-b text-sm bg-gray-50">Connected Load
                                                        Details</div>
                                                    <div>Lorem ipsum dolor sit amet.</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <dl>
                                            @foreach ($engineers as $engineer)
                                                <div class="flex bg-gray-50 px-4 py-5">
                                                    <dt class="text-sm font-medium text-gray-500">Engineer Remarks
                                                        on failure conclusion / Root Cause</dt>
                                                    <dd
                                                        class="pl-2 border-l-2 mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $engineer->engineer_comment }}
                                                    </dd>
                                                </div>
                                            @endforeach
                                        </dl>
                                    </div>
                                    <div class="border-y">
                                        <dl>
                                            @foreach ($partsReplacement as $partReplacement)
                                                <div class="flex bg-gray-50 px-4 py-5">
                                                    <dt class=" pr-2 text-sm font-medium text-gray-500">
                                                        Replaced
                                                        Spares
                                                        if Any</dt>
                                                    <dd
                                                        class="pl-2 border-l-2 mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $partReplacement->part_description }}
                                                    </dd>
                                                </div>
                                            @endforeach
                                        </dl>
                                    </div>
                                    <div class="border-y">
                                        <dl>
                                            @foreach ($partsFailed as $partFailed)
                                                <div class="flex bg-gray-50 px-4 py-5">
                                                    <dt class="pr-2 text-sm font-medium text-gray-500">Required
                                                        Spares
                                                        if Any</dt>
                                                    <dd
                                                        class=" pl-2 border-l-2 mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $partFailed->failed_part_desc }}
                                                    </dd>
                                                </div>
                                            @endforeach
                                        </dl>
                                    </div>
                                    <div class="border-y">
                                        @foreach ($feedbacks as $feedback)
                                            <dl>
                                                <div class="flex bg-gray-50 px-4 py-5">
                                                    <dt class="pr-2 text-sm font-medium text-gray-500">Customer
                                                        Remarks
                                                    </dt>
                                                    <dd
                                                        class=" pl-2 border-l-2 mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                        {{ $feedback->general_feedback }}
                                                    </dd>
                                                </div>
                                            </dl>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!--Service Images -->
                            <div class="mt-6 border-y">
                                <div class="text-xl mb-6 leading-6 font-semibold text-gray-900">Service Images
                                </div>
                                <div class="grid grid-cols-4 gap-4 ">
                                    <div>
                                        <div> Serial No. Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?1" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Display Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?2" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div>
                                            Terminal Block Pucture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?3" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Battery Bank Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?4" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Faulty PCB/Spares/Section Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?5" />
                                    </div>
                                    <div>
                                        <div>Faulty PCB/Spares Barcode Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?6" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Faulty PCB/Spares Barcode Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?7" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Equipments Installation Position Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?8" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Customer Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?9" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Customer Name & Sign</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?10" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> ngineer Picture</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?11" />
                                        <div>timestamp</div>
                                    </div>
                                    <div>
                                        <div> Engineer Name & Sign</div>
                                        <img class=" gap-4" src="https://placeimg.com/200/250/nature?12" />
                                        <div>timestamp</div>
                                    </div>

                                </div>
                            </div>
                    </div>

                    {{-- <div class="md:grid md:grid-cols-3 md:gap-6">
                                        <div class="md:col-span-1">
                                            <h3 class="text-lg font-medium leading-6 text-gray-900">Service Provider
                                                Details
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
                                                        @foreach ($services as $service)
                                                            <ul>
                                                                <div>{{ $service->service_provider }}</div>
                                                            </ul>
                                                        @endforeach
                                                    </div>
                                                    @error('service_provider')
                                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <!--Parameter 2:Contract Type -->
                                                <div class="grid grid-cols-2 items-center mt-4">
                                                    <div>Contract Type :</div>

                                                    <div
                                                        class="space-y-4 w-64 sm:flex sm:items-center sm:space-y-0 sm:space-x-1">

                                                        @foreach ($services as $service)
                                                            <div class="flex items-center">

                                                                <input id="low" name="contract_type"
                                                                    value="warranty" type="radio"
                                                                    {{ $service->contract_type == 'warranty' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">

                                                                <label for="low"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>

                                                            </div>

                                                            <div class="flex items-center">
                                                                <input id="medium" name="contract_type"
                                                                    value="camc" type="radio"
                                                                    {{ $service->contract_type == 'camc' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="medium"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                                            </div>

                                                            <div class="flex items-center">
                                                                <input id="high" name="contract_type"
                                                                    value="n-camc" type="radio"
                                                                    {{ $service->contract_type == 'n-camc' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="contract_type"
                                                                    value="others" type="radio"
                                                                    {{ $service->contract_type == 'others' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                                            </div>
                                                        @endforeach

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
                                                        @foreach ($services as $service)
                                                            <div class="flex items-center">
                                                                <input id="low" name="call_type"
                                                                    value="install" type="radio"
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                    {{ $service->call_type == 'install' ? 'checked' : '' }}>
                                                                <label for="low"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                                            </div>

                                                            <div class="flex items-center">
                                                                <input id="medium" name="call_type" value="dda"
                                                                    type="radio"
                                                                    {{ $service->call_type == 'dda' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="medium"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                                            </div>

                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type"
                                                                    value="breakdown" type="radio"
                                                                    {{ $service->call_type == 'breakdown' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type"
                                                                    value="pm"type="radio"
                                                                    {{ $service->call_type == 'pm' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">PM
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type"
                                                                    value="warranty-call" type="radio"
                                                                    {{ $service->call_type == 'warranty-call' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type"
                                                                    value="camc-call"type="radio"
                                                                    {{ $service->call_type == 'camc-call' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type"
                                                                    value="ncamc-call"type="radio"
                                                                    {{ $service->call_type == 'ncamc-call' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type" value="cc"
                                                                    type="radio"
                                                                    {{ $service->call_type == 'cc' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <input id="high" name="call_type"
                                                                    value="others-call" type="radio"
                                                                    {{ $service->call_type == 'others-call' ? 'checked' : '' }}
                                                                    class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                <label for="high"
                                                                    class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                                            </div>
                                                        @endforeach
                                                        @error('call_type')
                                                            <p class="text-xs text-red-500">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </div> --}}



                    <!--Product Details  -->
                    {{-- <div
                                        class="bg-white
                                            px-4 py-5 shadow sm:rounded-lg sm:p-6">


                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            @foreach ($products as $product)
                                                <div class="md:col-span-1">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Product
                                                        Details
                                                    </h3>
                                                    <p class="mt-1 text-sm text-gray-500">Please enter site details
                                                        here
                                                    </p>
                                                </div>
                                                <div class="mt-5 md:col-span-2 md:mt-0">
                                                    <div class="">
                                                        <!--Parameter 1:Service Provider Details -->
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>Product Model:</div>

                                                            <div class="bg-gray-400">
                                                                {{ $product->product_model }}
                                                            </div>
                                                            @error('product_model')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>Product Rating:</div>

                                                            <div>
                                                                {{ $product->product_rating }}
                                                            </div>
                                                            @error('product_rating')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>Product Serial Number:</div>

                                                            <div>
                                                                {{ $product->product_serial }}
                                                            </div>
                                                            @error('product_serial')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>Product Part Number:</div>

                                                            <div>
                                                                {{ $product->product_part }}
                                                            </div>
                                                            @error('product_part')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>IP Address:</div>

                                                            <div>
                                                                {{ $product->ip_address }}
                                                            </div>
                                                            @error('ip_address')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>CTD Number:</div>

                                                            <div>
                                                                {{ $product->ctd_number }}
                                                            </div>
                                                            @error('ctd_number')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="grid grid-cols-2 items-center">
                                                            <div>FSB Number:</div>

                                                            <div>
                                                                {{ $product->fsb_number }}
                                                            </div>
                                                            @error('fsb_number')
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <!--Parameter 2:Contract Type -->
                                                        <div class="grid grid-cols-2 items-center mt-4">
                                                            <div>Product Series:</div>

                                                            <div
                                                                class="space-y-4 w-64 sm:flex sm:items-center sm:space-y-0 sm:space-x-1">
                                                                <div class="flex items-center">
                                                                    <input id="low" name="product_series"
                                                                        type="radio" value="series_ip"
                                                                        {{ $product->product_series == 'series_ip' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="low"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">IP</label>
                                                                </div>

                                                                <div class="flex items-center">
                                                                    <input id="medium" name="product_series"
                                                                        type="radio" value="series_3p"
                                                                        {{ $product->product_series == 'series_3p' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="medium"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">3P</label>
                                                                </div>


                                                                <div class="flex items-center">
                                                                    <input id="high" name="product_series"
                                                                        type="radio" value="series_others"
                                                                        {{ $product->product_series == 'series_other' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                                                </div>
                                                                @error('product_series')
                                                                    <div class="text-red-500 text-xs">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!--Parameter 3:Call Type -->
                                                        <div
                                                            class="grid grid-cols-2  items-center content-center mt-4">
                                                            <div>Call Type :</div>

                                                            <div
                                                                class="space-y-4 w-64 grid grid-cols-3  sm:items-center sm:space-y-0 sm:space-x-1">
                                                                <div class="flex items-center">
                                                                    <input id="low" name="call_type"
                                                                        type="radio" checked value="call_install"
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                        {{ $product->call_type == 'call_install' ? 'checked' : '' }}>
                                                                    <label for="low"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">Install</label>
                                                                </div>

                                                                <div class="flex items-center">
                                                                    <input id="medium" name="call_type"
                                                                        type="radio" value="call_dda"
                                                                        {{ $product->call_type == 'call_dda' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="medium"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">DDA</label>
                                                                </div>

                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_breakdown"
                                                                        {{ $product->call_type == 'call_breakdown' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">Breakdown</label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_pm"
                                                                        {{ $product->call_type == 'call_pm' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">PM
                                                                    </label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_warranty"
                                                                        {{ $product->call_type == 'call_warranty' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">Warranty</label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_camc"
                                                                        {{ $product->call_type == 'call_camc' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">CAMC</label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_ncamc"
                                                                        {{ $product->call_type == 'call_ncamc' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">N-CAMC</label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_cc"
                                                                        {{ $product->call_type == 'call_cc' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">CC</label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="high" name="call_type"
                                                                        type="radio" value="call_others"
                                                                        {{ $product->call_type == 'call_others' ? 'checked' : '' }}
                                                                        class="h-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                    <label for="high"
                                                                        class="ml-2 block text-sm font-medium text-gray-700">Others</label>
                                                                </div>
                                                                @error('call_type')
                                                                    <div class="text-red-500 text-xs">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            @endforeach
                                        </div>


                                    </div> --}}


                    <!--Customer Information -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">


                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            <div class="md:col-span-1">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900">Customer
                                                    Details
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Please enter customer details
                                                    here
                                                </p>
                                            </div>
                                            <div class="mt-5 md:col-span-2 md:mt-0">
                                                <div class="grid grid-cols-6 gap-6">
                                                    @foreach ($customers as $customer)
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="first-name"
                                                                class="block text-sm font-medium text-gray-700">First
                                                                name</label>
                                                            <div>{{ $customer->first_name }}</div>
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="last-name"
                                                                class="block text-sm font-medium text-gray-700">Last
                                                                name</label>
                                                            <div>{{ $customer->last_name }}</div>
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="email-address"
                                                                class="block text-sm font-medium text-gray-700">Email
                                                                address</label>
                                                            <div>{{ $customer->email_address }}</div>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="mobile_no"
                                                                class="block text-sm font-medium text-gray-700">Mobile
                                                                Number</label>
                                                            <div>{{ $customer->mobile_no }}</div>
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="country"
                                                                class="block text-sm font-medium text-gray-700">Country</label>
                                                            <select id="country" name="country"
                                                                autocomplete="country-name"
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
                                                                <div class="text-red-500 text-xs">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-span-6">
                                                            <label for="street-address"
                                                                class="block text-sm font-medium text-gray-700">Street
                                                                address</label>
                                                            <div>{{ $customer->street_address }}</div>
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                            <label for="city"
                                                                class="block text-sm font-medium text-gray-700">City</label>
                                                            <div>{{ $customer->city }}</div>
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                            <label for="region"
                                                                class="block text-sm font-medium text-gray-700">State /
                                                                Province</label>
                                                            <div>{{ $customer->region }}</div>
                                                        </div>

                                                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                            <label for="postal-code"
                                                                class="block text-sm font-medium text-gray-700">ZIP /
                                                                Postal code</label>
                                                            <div>{{ $customer->postal_code }}</div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>


                                    </div> --}}

                    <!--Site Information -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            <div class="md:col-span-1">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900">Site Details
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Please enter site details here
                                                </p>
                                            </div>
                                            <div class="mt-5 md:col-span-2 md:mt-0">
                                                <div class="">
                                                    @foreach ($sites as $site)
                                                        <!--Parameter 1:AC Details -->
                                                        <div class="grid grid-cols-6 gap-2 mb-8">
                                                            <h4 class="sm:col-span-6 font-semibold text-md">AC Details
                                                            </h4>
                                                            <div class="sm:col-span-3">
                                                                <h4 class="font-semibold text-sm">AC Provided</h4>
                                                                <div class="form-control">
                                                                    <label class="label cursor-pointer">
                                                                        <span class="label-text">No</span>
                                                                        <input type="radio" name="ac_provided"
                                                                            value="no"
                                                                            {{ $site->ac_provided == 'no' ? 'checked' : '' }}
                                                                            class="radio checked:bg-red-500" />
                                                                    </label>
                                                                </div>
                                                                <div class="form-control">
                                                                    <label class="label cursor-pointer">
                                                                        <span class="label-text">Yes</span>
                                                                        <input type="radio" name="ac_provided"
                                                                            value="yes"
                                                                            class="radio checked:bg-blue-500"
                                                                            {{ $site->ac_provided == 'yes' ? 'checked' : '' }} />
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-3">
                                                                <h4 class="font-semibold text-sm">AC Working?</h4>
                                                                <div class="form-control">
                                                                    <label class="label cursor-pointer">
                                                                        <span class="label-text">No</span>
                                                                        <input type="radio" name="ac_working"
                                                                            value="no"
                                                                            {{ $site->ac_working == 'no' ? 'checked' : '' }}
                                                                            class="radio checked:bg-red-500" />
                                                                    </label>
                                                                </div>
                                                                <div class="form-control">
                                                                    <label class="label cursor-pointer">
                                                                        <span class="label-text">Yes</span>
                                                                        <input type="radio" name="ac_working"
                                                                            value="yes"
                                                                            {{ $site->ac_working == 'yes' ? 'checked' : '' }}
                                                                            class="radio checked:bg-blue-500" />
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--Parameter 2:DG Details -->
                                                        <div class="grid grid-cols-6 gap-2 mb-8">
                                                            <h4 class="sm:col-span-6 font-semibold text-md">DG Details
                                                            </h4>
                                                            <div class="sm:col-span-3">
                                                                <h4 class="font-semibold text-sm">DG Available</h4>
                                                                <div class="form-control">
                                                                    <label class="label cursor-pointer">
                                                                        <span class="label-text">No</span>
                                                                        <input type="radio" name="dg_details"
                                                                            value="no"
                                                                            {{ $site->dg_details == 'no' ? 'checked' : '' }}
                                                                            class="radio checked:bg-red-500" />
                                                                    </label>
                                                                </div>
                                                                <div class="form-control">
                                                                    <label class="label cursor-pointer">
                                                                        <span class="label-text">Yes</span>
                                                                        <input type="radio" name="dg_details"
                                                                            value="yes"
                                                                            {{ $site->dg_details == 'yes' ? 'checked' : '' }}
                                                                            class="radio checked:bg-blue-500" />
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-3">
                                                                <h4 class="font-semibold text-sm">Capacity?</h4>
                                                                <label for="kva"
                                                                    class="block text-sm font-medium text-gray-700">In
                                                                    kVA</label>

                                                                {{ $site->kva }}
                                                            </div>
                                                        </div>
                                                        <!--Parameter 3:Environment Details -->
                                                        <div class="grid grid-cols-6 gap-2 mb-8">
                                                            <h4 class="pb-0 sm:col-span-6 font-semibold text-md">
                                                                Environment
                                                                Details
                                                            </h4>
                                                            <div class="mt-0 sm:col-span-6">
                                                                <label class="text-base font-medium text-gray-900">Dust
                                                                    Levels</label>
                                                                <p class="text-sm leading-5 text-gray-500">Levels of
                                                                    pollutants
                                                                    in
                                                                    the
                                                                    enviroment?</p>
                                                                <div class="mt-4 grid-cols-6">

                                                                    <div
                                                                        class="space-y-4 justify-between sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                        <div class="flex items-center">
                                                                            <input id="low" name="dust_level"
                                                                                type="radio" value="low"
                                                                                {{ $site->dust_level == 'low' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="low"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">Low</label>
                                                                        </div>

                                                                        <div class="flex items-center">
                                                                            <input id="medium" name="dust_level"
                                                                                value="medium" type="radio"
                                                                                {{ $site->dust_level == 'medium' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="medium"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">Medium</label>
                                                                        </div>

                                                                        <div class="flex items-center">
                                                                            <input id="high" name="dust_level"
                                                                                value="high" type="radio"
                                                                                {{ $site->dust_level == 'high' ? 'checked' : '' }}
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
                                                            <h4 class="pb-0 sm:col-span-6 font-semibold text-md">
                                                                Voltage
                                                                Details
                                                            </h4>
                                                            <div class="mt-0 sm:col-span-6">
                                                                <label
                                                                    class="text-base font-medium text-gray-900">Electricity
                                                                    Phase</label>

                                                                <fieldset class=" flex space-x-2 justify-between">
                                                                    <div class="space-y-8">
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex h-5 items-center">
                                                                                <input id="L1-N"
                                                                                    aria-describedby="voltage-description"
                                                                                    name="elec_phase" type="checkbox"
                                                                                    value="L1-N"
                                                                                    {{ $site->elec_phase == 'L1-N' ? 'checked' : '' }}
                                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            </div>
                                                                            <div class="ml-3 text-sm">

                                                                                <p id="L1-N"
                                                                                    class="text-gray-500">
                                                                                    L1-N
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex h-5 items-center">
                                                                                <input id="L2-N"
                                                                                    aria-describedby="voltage-description"
                                                                                    name="elec_phase" value="L2-N"
                                                                                    type="checkbox"
                                                                                    {{ $site->elec_phase == 'L2-N' ? 'checked' : '' }}
                                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            </div>
                                                                            <div class="ml-3 text-sm">

                                                                                <p id="L2-N"
                                                                                    class="text-gray-500">
                                                                                    L2-N
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex h-5 items-center">
                                                                                <input id="L3-N"
                                                                                    aria-describedby="voltage-description"
                                                                                    name="elec_phase" value="L3-N"
                                                                                    type="checkbox"
                                                                                    {{ $site->elec_phase == 'L3-N' ? 'checked' : '' }}
                                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            </div>
                                                                            <div class="ml-3 text-sm">

                                                                                <p id="L3-N"
                                                                                    class="text-gray-500">
                                                                                    L3-N
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="space-y-8">
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex h-5 items-center">
                                                                                <input id="L1-L2"
                                                                                    aria-describedby="voltage-description"
                                                                                    name="elec_phase" value="L1-L2"
                                                                                    {{ $site->elec_phase == 'L1-L2' ? 'checked' : '' }}
                                                                                    type="checkbox"
                                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            </div>
                                                                            <div class="ml-3 text-sm">

                                                                                <p id="L1-L2"
                                                                                    class="text-gray-500">
                                                                                    L1-L2
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex h-5 items-center">
                                                                                <input id="L2-L3"
                                                                                    aria-describedby="voltage-description"
                                                                                    name="elec_phase" value="L2-L3"
                                                                                    {{ $site->elec_phase == 'L2-L3' ? 'checked' : '' }}
                                                                                    type="checkbox"
                                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            </div>
                                                                            <div class="ml-3 text-sm">

                                                                                <p id="L2-L3"
                                                                                    class="text-gray-500">
                                                                                    L2-L3
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex h-5 items-center">
                                                                                <input id="L3-L1"
                                                                                    aria-describedby="voltage-description"
                                                                                    name="elec_phase" value="L3-L1"
                                                                                    type="checkbox"
                                                                                    {{ $site->elec_phase == 'L3-L1' ? 'checked' : '' }}
                                                                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            </div>
                                                                            <div class="ml-3 text-sm">

                                                                                <p id="L3-L1"
                                                                                    class="text-gray-500">
                                                                                    L3-L1
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div>
                                                                        <div>
                                                                            <label for="neutral_volt"
                                                                                class="block text-sm font-medium text-gray-700">Neutral
                                                                                to
                                                                                Earth</label>
                                                                            <div>{{ $site->neutral_volt }}</div>
                                                                        </div>
                                                                        <div>
                                                                            <label for="load_v"
                                                                                class="block text-sm font-medium text-gray-700">Load
                                                                                %</label>
                                                                            <div>{{ $site->load_v }}</div>
                                                                        </div>
                                                                    </div>

                                                                </fieldset>
                                                            </div>

                                                        </div>
                                                        <!--Parameter 5:Load Type -->
                                                        <div class="grid grid-cols-6 gap-2">
                                                            <h4 class="pb-0 sm:col-span-6 font-semibold text-md">Load
                                                                Type
                                                            </h4>
                                                            <div class="mt-0 sm:col-span-3">

                                                                <fieldset class="mt-4">

                                                                    <div
                                                                        class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                        <div class="flex items-center">
                                                                            <input id="IT" name="load_type"
                                                                                value="IT" type="radio"
                                                                                {{ $site->load_type == 'IT' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="IT"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">IT</label>
                                                                        </div>

                                                                        <div class="flex items-center">
                                                                            <input id="industrial" name="load_type"
                                                                                value="industrial" type="radio"
                                                                                {{ $site->load_type == 'industrial' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="industrial"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">Industrial</label>
                                                                        </div>

                                                                        <div class="flex items-center">
                                                                            <input id="data-center" name="load_type"
                                                                                value="data_center" type="radio"
                                                                                {{ $site->load_type == 'data_center' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="data-center"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                                        </div>
                                                                        <div class="flex items-center">
                                                                            <input id="health-care" name="load_type"
                                                                                value="health_care" type="radio"
                                                                                {{ $site->load_type == 'health_care' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="health-care"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">Health
                                                                                Care</label>
                                                                        </div>
                                                                        <div class="flex items-center">
                                                                            <input id="other" name="load_type"
                                                                                value="load_others" type="radio"
                                                                                {{ $site->load_type == 'load_others' ? 'checked' : '' }}
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
                                                            <h4 class="pb-0 sm:col-span-6 font-semibold text-md">UPS
                                                                Status
                                                            </h4>
                                                            <div class="mt-0 sm:col-span-3">

                                                                <fieldset class="mt-4">

                                                                    <div
                                                                        class="space-y-4  sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                        <div class="flex items-center">
                                                                            <input id="ups-working" name="ups"
                                                                                value="ups_working" type="radio"
                                                                                {{ $site->ups == 'ups_working' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="ups-working"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">UPS
                                                                                Working</label>
                                                                        </div>

                                                                        <div class="flex items-center">
                                                                            <input id="ups-not-working" name="ups"
                                                                                value="ups_not_working" type="radio"
                                                                                {{ $site->ups == 'ups_not_working' ? 'checked' : '' }}
                                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                            <label for="ups-not-working"
                                                                                class="ml-3 block text-sm font-medium text-gray-700">UPS
                                                                                Not
                                                                                Working</label>
                                                                        </div>

                                                                        <div class="flex items-center">
                                                                            <input id="ups-under-consideration"
                                                                                name="ups" value="ups_considering"
                                                                                type="radio"
                                                                                {{ $site->ups == 'ups_considering' ? 'checked' : '' }}
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
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>



                                    </div> --}}

                    <!--Installation Details -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                                        <div class="md:grid md:grid-cols-3 md:gap-6">
                                            <div class="md:col-span-1">
                                                <h3 class="text-lg font-medium leading-6 text-gray-900">Installation
                                                    Details
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Please enter installation details
                                                    here
                                                </p>
                                            </div>
                                            <div class="mt-5 md:col-span-2 md:mt-0">
                                                <div class="">
                                                    @foreach ($installations as $installation)
                                                        <!--Parameter 1:AC Details -->
                                                        <div class="grid grid-cols-6 gap-2 mb-8">
                                                            <h4 class="sm:col-span-6 font-semibold text-md">Battery
                                                                Details
                                                            </h4>
                                                            <p class=" text-xs font-semibold sm:col-span-6">(For
                                                                External
                                                                Batteries
                                                                FR
                                                                BDR
                                                                to
                                                                be
                                                                Filled and
                                                                enclosed)
                                                            </p>
                                                            <div class="sm:col-span-6">
                                                                <label for="volt"
                                                                    class=" text-sm font-medium text-gray-700">Volt/AH</label>
                                                                <div>{{ $installation->volt_install }}</div>
                                                            </div>
                                                            <div class="sm:col-span-6">
                                                                <label for="make"
                                                                    class=" text-sm font-medium text-gray-700">Make</label>
                                                                <div>{{ $installation->make_install }}</div>
                                                            </div>


                                                            <div class="sm:col-span-6">
                                                                <label for="quantity"
                                                                    class=" text-sm font-medium text-gray-700">Quantity</label>
                                                                <div>{{ $installation->quantity_install }}</div>
                                                            </div>

                                                            <div class="sm:col-span-6">
                                                                <label for="strings"
                                                                    class=" text-sm font-medium text-gray-700">Strings</label>
                                                                <div>{{ $installation->strings_install }}</div>

                                                            </div>
                                                            <div class="sm:col-span-6">
                                                                <label for="batch-code"
                                                                    class=" text-sm font-medium text-gray-700">Batch
                                                                    Code</label>
                                                                <div>{{ $installation->batch_code }}</div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}


                    <!--Call Details Table -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">

                                        <div>
                                            <div class="sm:flex sm:items-center">
                                                <div class="sm:flex-auto">
                                                    <h1 class="text-xl font-semibold text-gray-900">Call Details</h1>

                                                </div>

                                            </div>

                                            <div
                                                class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                                                <table class="min-w-full divide-y divide-gray-300">
                                                    <thead class="bg-gray-50">
                                                        <tr>
                                                            <th scope="col"
                                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                                Call Number</th>
                                                            <th scope="col"
                                                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                                Job Start Date</th>

                                                            <th scope="col"
                                                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                                Job End Date</th>

                                                            <th scope="col"
                                                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                                                Travel Time (in Hrs)</th>
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
                                                            @foreach ($calls as $call)
                                                                <td
                                                                    class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                    <div class="mt-1">
                                                                        {{ $call->call_number }}
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                                    <div class="mt-1">
                                                                        {{ $call->job_start }}
                                                                    </div>
                                                                </td>

                                                                <td class="px-3 py-4 text-sm text-gray-500">
                                                                    <div class="mt-1">
                                                                        {{ $call->job_end }}
                                                                    </div>
                                                                </td>

                                                                <td class="px-3 py-4 text-sm text-gray-500">
                                                                    <div class="mt-1">
                                                                        {{ $call->travel_time }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-3 py-4 text-sm text-gray-500">
                                                                    <div>
                                                                        {{ $call->call_status }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-3 py-4 text-sm text-gray-500">
                                                                    <div class="mt-1">
                                                                        {{ $call->engineer_name }}
                                                                    </div>
                                                                </td>
                                                                <td class="px-3 py-4 text-sm text-gray-500">
                                                                    <div class="mt-1">
                                                                        {{ $call->complaint_details }}
                                                                    </div>
                                                                </td>
                                                            @endforeach
                                                        </tr>

                                                        <!-- More people... -->
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div> --}}

                    <!--Customer Feedback -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                                    @foreach ($feedbacks as $feedback)
                                        <div class="sm:flex sm:items-center">
                                            <div class="sm:flex-auto">
                                                <h1 class="text-xl font-semibold text-gray-900">Customer Feedback
                                                </h1>

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
                                                        <td
                                                            class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                            <fieldset class="mt-4">

                                                                <div
                                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                    <div class="flex items-center">
                                                                        <input id="IT" name="product_perf"
                                                                            value="below_avg" type="radio"
                                                                            {{ $feedback->product_perf == 'below_avg' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="IT"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                                                            Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="industrial" name="product_perf"
                                                                            value="average" type="radio"
                                                                            {{ $feedback->product_perf == 'average' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="industrial"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="data-center" name="product_perf"
                                                                            value="good" type="radio"
                                                                            {{ $feedback->product_perf == 'good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="data-center"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Good
                                                                        </label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="health-care" name="product_perf"
                                                                            value="very_good" type="radio"
                                                                            {{ $feedback->product_perf == 'very_good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="health-care"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                                                            Good
                                                                        </label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="other" name="product_perf"
                                                                            value="excellent" type="radio"
                                                                            {{ $feedback->product_perf == 'excellent' ? 'checked' : '' }}
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
                                                        <td
                                                            class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                            <fieldset class="mt-4">

                                                                <div
                                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                    <div class="flex items-center">
                                                                        <input id="IT" name="service_quality"
                                                                            value="below_avg" type="radio"
                                                                            {{ $feedback->service_quality == 'below_avg' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="IT"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                                                            Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="industrial" name="service_quality"
                                                                            value="average" type="radio"
                                                                            {{ $feedback->service_quality == 'average' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="industrial"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="data-center" name="service_quality"
                                                                            value="good" type="radio"
                                                                            {{ $feedback->service_quality == 'good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="data-center"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Good
                                                                        </label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="health-care" name="service_quality"
                                                                            value="very_good" type="radio"
                                                                            {{ $feedback->service_quality == 'very_good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="health-care"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                                                            Good
                                                                        </label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="other" name="service_quality"
                                                                            value="excellent" type="radio"
                                                                            {{ $feedback->service_quality == 'very_good' ? 'excellent' : '' }}
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
                                                        <td
                                                            class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                            <fieldset class="mt-4">

                                                                <div
                                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                    <div class="flex items-center">
                                                                        <input id="IT" name="call_logging"
                                                                            type="radio" value="below_avg"
                                                                            {{ $feedback->call_logging == 'below_avg' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="IT"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                                                            Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="industrial" name="call_logging"
                                                                            value="average" type="radio"
                                                                            {{ $feedback->call_logging == 'average' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="industrial"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="data-center" name="call_logging"
                                                                            value="good" type="radio"
                                                                            {{ $feedback->call_logging == 'good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="data-center"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="health-care" name="call_logging"
                                                                            value="very_good" type="radio"
                                                                            {{ $feedback->call_logging == 'very_good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="health-care"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                                                            Good</label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="other" name="call_logging"
                                                                            value="excellent" type="radio"
                                                                            {{ $feedback->call_logging == 'excellent' ? 'checked' : '' }}
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
                                                        <td
                                                            class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                            <fieldset class="mt-4">

                                                                <div
                                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                    <div class="flex items-center">
                                                                        <input id="IT" name="engineer_quality"
                                                                            value="below_avg" type="radio"
                                                                            {{ $feedback->engineer_quality == 'below_avg' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="IT"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                                                            Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="industrial" name="engineer_quality"
                                                                            value="average" type="radio"
                                                                            {{ $feedback->engineer_quality == 'average' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="industrial"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="data-center"
                                                                            name="engineer_quality"
                                                                            value="good"type="radio"
                                                                            {{ $feedback->engineer_quality == 'good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="data-center"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="health-care"
                                                                            name="engineer_quality" value="very_good"
                                                                            type="radio"
                                                                            {{ $feedback->engineer_quality == 'very_good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="health-care"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                                                            Good</label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="other" name="engineer_quality"
                                                                            value="excellent" type="radio"
                                                                            {{ $feedback->engineer_quality == 'excellent' ? 'checked' : '' }}
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
                                                        <td
                                                            class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                            <fieldset class="mt-4">

                                                                <div
                                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                                    <div class="flex items-center">
                                                                        <input id="IT"
                                                                            name="overall_satisfaction"
                                                                            value="below_avg" type="radio"
                                                                            {{ $feedback->overall_satisfaction == 'below_avg' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="IT"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Below
                                                                            Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="industrial" name="overall_quality"
                                                                            value="average" type="radio"
                                                                            {{ $feedback->overall_quality == 'average' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="industrial"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Average</label>
                                                                    </div>

                                                                    <div class="flex items-center">
                                                                        <input id="data-center" name="overall_quality"
                                                                            value="good" type="radio"
                                                                            {{ $feedback->overall_quality == 'good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="data-center"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Good</label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="health-care" name="overall_quality"
                                                                            value="very_good" type="radio"
                                                                            {{ $feedback->overall_quality == 'very_good' ? 'checked' : '' }}
                                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                                        <label for="health-care"
                                                                            class="ml-3 block text-sm font-medium text-gray-700">Very
                                                                            Good</label>
                                                                    </div>
                                                                    <div class="flex items-center">
                                                                        <input id="other" name="overall_quality"
                                                                            value="excellent" type="radio"
                                                                            {{ $feedback->overall_quality == 'excellent' ? 'checked' : '' }}
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
                                                <div>{{ $feedback->problem_desc }}</div>
                                            </div>
                                            <div class="grid grid-cols-2 items-center">
                                                <div>Action Taken</div>
                                                <div>{{ $feedback->action_taken }}</div>
                                            </div>
                                            <div class="grid grid-cols-2 items-center">
                                                <div>General Feedback</div>
                                                <div>{{ $feedback->general_feedback }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div> --}}


                    <!--Part Replacement Feedback -->
                    {{-- <div x-data class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                                        <div class="sm:flex sm:items-center">
                                            <div class="sm:flex-auto">
                                                <h1 class="text-xl font-semibold text-gray-900">Part Replacement
                                                    Details
                                                </h1>
                                                <p class="mt-2 text-sm text-gray-700">Please enter details of parts
                                                    replaced
                                                </p>
                                            </div>

                                        </div>
                                        <div
                                            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                                            <table id="partTable" class="min-w-full divide-y divide-gray-300">
                                                <thead>
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
                                                </thead>
                                                <tbody>
                                                    @foreach ($partsReplacement as $partReplacement)
                                                        <tr>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $partReplacement->part_code }}
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $partReplacement->part_description }}
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $partReplacement->part_srno }}
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $partReplacement->part_batchcode }}
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $partReplacement->part_quantity }}
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div> --}}

                    <!--Part Failed Feedback -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                                        <div class="sm:flex sm:items-center">
                                            <div class="sm:flex-auto">
                                                <h1 class="text-xl font-semibold text-gray-900">Parts Failed Details
                                                </h1>
                                                <p class="mt-2 text-sm text-gray-700">Please enter details of failed
                                                    parts
                                                </p>
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
                                                            Part Sr.No.</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                            Batch Code</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                                            Qty</th>

                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @foreach ($partsFailed as $partFailed)
                                                        <tr>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $partFailed->failed_part_code }}
                                                                </div>
                                                                @error('failed_part_code')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td
                                                                class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                                <div class="mt-1">
                                                                    {{ $partFailed->failed_part_desc }}
                                                                </div>
                                                                @error('failed_part_desc')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td
                                                                class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                                                <div class="mt-1">
                                                                    {{ $partFailed->failed_part_srno }}
                                                                </div>
                                                                @error('failed_part_srno')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td class="px-3 py-4 text-sm text-gray-500">
                                                                <div class="mt-1">
                                                                    {{ $partFailed->failed_part_batch }}
                                                                </div>
                                                                @error('failed_part_batch')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td class="px-3 py-4 text-sm text-gray-500">
                                                                <div class="mt-1">
                                                                    {{ $partFailed->failed_part_qty }}
                                                                </div>
                                                                @error('failed_part_qty')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                                        </div>

                                    </div> --}}

                    <!--Call SignOff  -->
                    {{-- <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">


                                        <div class="sm:flex sm:items-center">
                                            <div class="sm:flex-auto">
                                                <h1 class="text-xl font-semibold text-gray-900">Call SignOff Details
                                                </h1>
                                                <div class="mt-2 text-lg font-semibold text-gray-700">Customer Details
                                                </div>
                                            </div>

                                        </div>
                                        <div
                                            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                            Customer Name</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                            Mobile No.</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                                            Customer Designation</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                            Customer Signature</th>


                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @foreach ($signOffs as $signOff)
                                                        <tr>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $signOff->customer_name }}
                                                                </div>
                                                                @error('failed_part_code')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td
                                                                class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                                <div class="mt-1">
                                                                    {{ $signOff->mobile_no }}
                                                                </div>
                                                                @error('failed_part_desc')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td
                                                                class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                                                <div class="mt-1">
                                                                    {{ $signOff->customer_designation }}
                                                                </div>
                                                                @error('failed_part_srno')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td class="px-3 py-4 text-sm text-gray-500">
                                                                <div class="mt-1">
                                                                    {{ $signOff->customer_signature }}
                                                                </div>
                                                                @error('failed_part_batch')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-2 text-lg font-semibold text-gray-700">Engineer Details</div>
                                        <div
                                            class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-300">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                            Engineer Name</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                                            Engineer Signature</th>
                                                        <th scope="col"
                                                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                                            Signoff Date</th>



                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    @foreach ($engineers as $engineer)
                                                        <tr>
                                                            <td
                                                                class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
                                                                <div class="mt-1">
                                                                    {{ $engineer->engineer_name }}
                                                                </div>
                                                                @error('failed_part_code')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td
                                                                class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                                                <div class="mt-1">
                                                                    {{ $engineer->engineer_signature }}
                                                                </div>
                                                                @error('failed_part_desc')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>
                                                            <td
                                                                class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                                                <div class="mt-1">
                                                                    {{ $engineer->signoff_date }}
                                                                </div>
                                                                @error('failed_part_srno')
                                                                    <div class="text-red-500 text-xs">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </td>



                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>


                                    </div> --}}


                    </main>

                </div>


            </div>
        </div>
    </div>
    </div>
</x-app-layout>
