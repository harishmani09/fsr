<div>
    <form action="#" method="POST" wire:submit.prevent="batteryForm">
        @csrf
        @if (session()->has('success_message'))
            <div class="bg-green-500 text-white rounded-md py-2 px-1 shadow-md">
                {{ session('success_message') }}
            </div>
        @endif
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Batttery Details</h3>
                <p class="mt-1 text-sm text-gray-500">Please enter battery details here
                </p>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <h4 class="mb-2">input current</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="l"> L</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="l-input" name="l-input">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="n-input"> N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="n-input" name="n-input">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="e-input"> E</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="e-input" name="e-input">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">output current </h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="l-output"> L</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="l-output" name="l-output">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="e-output"> E</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="e-output" name="e-output">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Battery current </h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="c_current"> Charging
                                Current</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="c_current" name="c_current">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="d_current"> Discharge
                                Current</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="d_current" name="d_current">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Input Voltage </h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="input-l-n"> L-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="input-l-n" name="input-l-n">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="input-e-n"> E-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="input-e-n" name="input-e-n">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Output Voltage</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="output-l-n"> L-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="output-l-n" name="output-l-n">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="output-e-n"> E-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="output-e-n" name="output-e-n">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Battery Voltage</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="charge-voltage"> Charging
                                Voltage</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="charge-voltage" name="charge-voltage">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="e-output"> Discharge Voltage
                                after 3-5 Min</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="e-output" name="e-output">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Frequency</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="i_freq"> Input Freq</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="i_freq" name="i_freq">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="o_freq"> Output Freq</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="o_freq" name="o_freq">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Display Information</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="error_code"> Error Code With
                                Description</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="error_code" name="error_code">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="load_percent"> Load %</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="load_percent" name="load_percent">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 ">
                    <h4 class="mb-2">Other Fault observation if any</h4>
                    <div class="mb-2 ">

                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            type="text" id="fault" name="fault">
                    </div>
                </div>
                <div>
                    <h4 class="mb-2">Batttery Test Report</h4>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="error_code"> Battery
                                Make</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="error_code" name="error_code">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="load_percent"> Battery
                                Model</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="load_percent" name="load_percent">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="load_percent"> Battery
                                AH</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="load_percent" name="load_percent">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="load_percent"> Nos. of
                                Bank</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="load_percent" name="load_percent">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="load_percent"> Ambient
                                Temperature</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="load_percent" name="load_percent">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-2 auto-cols-min items-center">
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" class="text-xs "
                            for="error_code">Battery Position from +(VE)</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code" class="text-xs">Batch
                            Code</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code"
                            class="text-xs">Serial No</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" class="text-xs"
                            for="error_code">Charging Voltage</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code"
                            class="text-xs">Battery
                            Voltage</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                </div>
                <div>
                    <h4 class="mb-4">Battery Voltage during Discharging
                        Battery</h4>
                    <div class="grid grid-cols-5 gap-2 auto-cols-min items-center">
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" class="text-xs "
                                for="error_code">After 2 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="error_code" name="error_code">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="error_code"
                                class="text-xs">After 5 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="error_code" name="error_code">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="error_code"
                                class="text-xs">After 10 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="error_code" name="error_code">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" class="text-xs"
                                for="error_code">After 20 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="error_code" name="error_code">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="error_code"
                                class="text-xs">Battery before cutoff
                            </label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="error_code" name="error_code">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-2">
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code">Battery Status</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code">Total Voltage</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code">Current </label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="error_code" name="error_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="error_code">Connected Load
                            Details</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-36" type="text" id="error_code" name="error_code">
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
