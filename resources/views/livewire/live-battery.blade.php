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
                            <label class="block text-sm font-medium text-gray-700" for="l_input"> L</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="l_input" name="l_input" wire:model="l_input">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="n_input"> N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="n_input" name="n_input" wire:model="n_input">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="e_input"> E</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="e_input" name="e_input" wire:model="e_input">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Output Current </h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="l_output"> L</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="l_output" name="l_output" wire:model="l_output">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="e-output"> E</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="e_output" name="e_output" wire:model="e_output">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Battery Current </h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="c_current"> Charging
                                Current</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="c_current" name="c_current" wire:model="c_current">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="d_current"> Discharge
                                Current</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="d_current" name="d_current" wire:model="d_current">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Input Voltage </h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="input_l_n"> L-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="input_l_n" name="input_l_n" wire:model="input_l_n">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="input_e_n"> E-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="input_e_n" name="input_e_n" wire:model="input_e_n">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Output Voltage</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="output_l_n"> L-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="output_l_n" name="output_l_n" wire:model="output_l_n">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="output_e_n"> E-N</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="output_e_n" name="output_e_n" wire:model="output_e_n">
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-2">Battery Voltage</h4>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="charge_voltage"> Charging
                                Voltage</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="charge_voltage" name="charge_voltage"
                                wire:model="charge_voltage">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="discharge_5"> Discharge
                                Voltage
                                after 3-5 Min</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="discharge_5" name="discharge_5" wire:model="discharge_5">
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
                                type="text" id="i_freq" name="i_freq" wire:model="i_freq">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="o_freq"> Output Freq</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="o_freq" name="o_freq" wire:model="o_freq">
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
                                type="text" id="error_code" name="error_code" wire:model="error_code">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="load_percent"> Load %</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="load_percent" name="load_percent" wire:model="load_percent">
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
                            type="text" id="fault" name="fault" wire:model="fault">
                    </div>
                </div>
                <div>
                    <h4 class="mb-2">Batttery Test Report</h4>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="battery_make"> Battery
                                Make</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="battery_make" name="battery_make" wire:model="battery_make">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="battery_model"> Battery
                                Model</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="battery_model" name="battery_model" wire:model="battery_model">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="battery_ah"> Battery
                                AH</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="battery_ah" name="battery_ah" wire:model="battery_ah">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="battery_bank_no"> Nos. of
                                Bank</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="battery_bank_no" name="battery_bank_no"
                                wire:model="battery_bank_no">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="ambient_temp"> Ambient
                                Temperature</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                type="text" id="ambient_temp" name="ambient_temp" wire:model="ambient_temp">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-2 auto-cols-min items-center">
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" class="text-xs "
                            for="battery_pos">Battery Position from +(VE)</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="battery_pos" name="battery_pos"
                            wire:model="battery_pos">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="battery_batch_code"
                            class="text-xs">Batch
                            Code</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="battery_batch_code" name="battery_batch_code"
                            wire:model="battery_batch_code">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="battery_serial"
                            class="text-xs">Serial
                            No</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="battery_serial" name="battery_serial"
                            wire:model="battery_serial">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" class="text-xs"
                            for="battery_charge_volt">Charging Voltage</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="battery_charge_volt" name="battery_charge_volt"
                            wire:model="battery_charge_volt">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="battery_volt"
                            class="text-xs">Battery
                            Voltage</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="battery_volt" name="battery_volt"
                            wire:model="battery_volt">
                    </div>
                </div>
                <div>
                    <h4 class="mb-4">Battery Voltage during Discharging
                        Battery</h4>
                    <div class="grid grid-cols-5 gap-2 auto-cols-min items-center">
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" class="text-xs "
                                for="voltage_after2">After 2 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="voltage_after2" name="voltage_after2"
                                wire:model="voltage_after2">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="voltage_after5"
                                class="text-xs">After 5 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="voltage_after5" name="voltage_after5"
                                wire:model="voltage_after5">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="voltage_after10"
                                class="text-xs">After 10 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="voltage_after10" name="voltage_after10"
                                wire:model="voltage_after10">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" class="text-xs"
                                for="voltage_after20">After 20 Mins</label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="voltage_after20" name="voltage_after20"
                                wire:model="voltage_after20">
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm font-medium text-gray-700" for="battery_cutoff"
                                class="text-xs">Battery before cutoff
                            </label>
                            <input
                                class="mt-1
                            block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                                class="w-24" type="text" id="battery_cutoff" name="battery_cutoff"
                                wire:model="battery_cutoff">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-2">
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="battery_status">Battery
                            Status</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="battery_status" name="battery_status"
                            wire:model="battery_status">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="total_voltage">Total
                            Voltage</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="total_voltage" name="total_voltage"
                            wire:model="total_voltage">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="current">Current </label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-24" type="text" id="current" name="current" wire:model="current">
                    </div>
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-700" for="connected_load">Connected Load
                            Details</label>
                        <input
                            class="mt-1
                        block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                        focus:ring-indigo-500 sm:text-sm"
                            class="w-36" type="text" id="connected_load" name="connected_load"
                            wire:model="connected_load">
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
