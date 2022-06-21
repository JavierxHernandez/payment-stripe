<x-app-layout>
    <div class="py-12">
        {{-- @livewire('subscriptions') --}}
        <div class="w-full mx-auto px-5 py-2 text-gray-600 mb-10">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold mb-5">Pricing</h1>
                <h3 class="text-xl font-medium mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit repellat
                    dignissimos laboriosam odit accusamus porro</h3>
            </div>
            <div class="max-w-4xl mx-auto md:flex">
                {{-- Mensual --}}
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4">Monthly Plan</h2>
                        <h3 class="text-center font-bold text-4xl mb-5">$9.99</h3>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                        </ul>
                    </div>
                    @livewire('subscriptions', ['price' => 'price_1L8Ty8Go6wXL1zpo37L2daYv'], key('price_1L8Ty8Go6wXL1zpo37L2daYv'))
                    {{-- <x-button-subscription name="Course Stripe" price="price_1L8Ty8Go6wXL1zpo37L2daYv" /> --}}
                </div>
                {{-- Trimestral --}}
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-50 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4">Quarterly Plan</h2>
                        <h3 class="text-center font-bold text-4xl md:text-5xl mb-5">$19.99</h3>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Consectetur</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Adipisicing</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Elit repellat</li>
                        </ul>
                    </div>
                    @livewire('subscriptions', ['price' => 'price_1L8Ty8Go6wXL1zpoDh6Smzz7'], key('price_1L8Ty8Go6wXL1zpoDh6Smzz7'))
                    {{-- <x-button-subscription name="Course Stripe" price="price_1L8Ty8Go6wXL1zpoDh6Smzz7" /> --}}

                </div>
                {{-- Anual --}}
                <div
                    class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                    <div class="w-full flex-grow">
                        <h2 class="text-center font-bold uppercase mb-4">Annual Plan</h2>
                        <h3 class="text-center font-bold text-4xl mb-5">$99.99</h3>
                        <ul class="text-sm px-5 mb-8">
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Consectetur</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Adipisicing</li>
                            <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Much more...</li>
                        </ul>
                    </div>
                    @livewire('subscriptions', ['price' => 'price_1L8Ty8Go6wXL1zpoxwmWJxQa'], key('price_1L8Ty8Go6wXL1zpoxwmWJxQa'))
                    {{-- <x-button-subscription name="Course Stripe" price="price_1L8Ty8Go6wXL1zpoxwmWJxQa" /> --}}

                </div>
            </div>
        </div>

        <div class="max-w-5xl mx-auto px-4">
            @livewire('payment-method-create')
            <div class="py-8">
                @livewire('payment-method-list')
            </div>

            @livewire('invoice')
        </div>
    </div>
</x-app-layout>
