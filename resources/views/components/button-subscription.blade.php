@props(['name', 'price'])
<div class="w-full">
    @if (auth()->user()->hasPaymentMethod())
        @if (auth()->user()->subscribed($name))
            @if (auth()->user()->subscribed($name, $price))

                @if (auth()->user()->subscription($name)->onGracePeriod())
                    <button wire:click="resumeSubscription('{{ $name }}')" wire:loading.remove
                        wire:target="resumeSubscription('{{ $name }}')"
                        class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                        Resume Plan
                    </button>

                    <button wire:loading.flex wire:target="resumeSubscription('{{ $name }}')"
                        class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                        <x-spinner size="6" class="mr-2" />
                        Resume Plan
                    </button>
                @else
                    <button wire:click="cancelSubscription('{{ $name }}')" wire:loading.remove
                        wire:target="cancelSubscription('{{ $name }}')"
                        class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                        Cancel
                    </button>

                    <button wire:loading.flex wire:target="cancelSubscription('{{ $name }}')"
                        class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                        <x-spinner size="6" class="mr-2" />
                        Cancel
                    </button>
                @endif
            @else
                <button wire:click="changePlan('{{ $name }}', '{{ $price }}')" wire:loading.remove
                    wire:target="changePlan('{{ $name }}', '{{ $price }}')"
                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                    Change plan
                </button>

                <button wire:loading.flex wire:target="changePlan('{{ $name }}', '{{ $price }}')"
                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                    <x-spinner size="6" class="mr-2" />
                    Change plan
                </button>
            @endif
        @else
            <button wire:click="newSubscription('{{ $name }}', '{{ $price }}')" wire:loading.remove
                wire:target="newSubscription('{{ $name }}', '{{ $price }}')"
                class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                Subscribe
            </button>

            <button wire:loading.flex wire:target="newSubscription('{{ $name }}', '{{ $price }}')"
                class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                <x-spinner size="6" class="mr-2" />
                Subscribe
            </button>
        @endif
    @else
        <button
            class="font-bold bg-gray-600 hover:bg-gray-700 text-white text-sm rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
            Add Payment Method
        </button>
    @endif
</div>
