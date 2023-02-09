<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.deposit-banner />
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Line chart (Gcash) -->
            <x-dashboard.deposit-card-01 :dataFeed="$dataFeed" />

            <!-- Line chart (BPI) -->
            <x-dashboard.deposit-card-02 :dataFeed="$dataFeed" />  

        </div>

    </div>
</x-app-layout>
