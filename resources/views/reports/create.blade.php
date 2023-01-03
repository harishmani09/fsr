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
                <livewire:live-installation />
            </div>


            <!--Call Details Table -->
            <x-calldetails />

            <!--Customer Feedback -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <livewire:live-customer-feedback />
            </div>


            <!--Part Replacement Feedback -->
            <x-part-replacement />

            <!--Part Failed Feedback -->
            <x-part-failed />

            <!--Call SignOff  -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <livewire:live-sign-off />
            </div>

            <!--engineer SignOff  -->
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6 sm:px-6 lg:px-8">
                <livewire:live-engineer />
            </div>

            <!--Ad Hoc Expenses -->
            <x-expenses />

            <!--Expense Upload -->
            <x-expense-upload />

        </main>
    </div>


</x-app-layout>
