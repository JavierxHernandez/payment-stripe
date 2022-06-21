<div class="w-full">
    @if (auth()->user()->hasPaymentMethod())
        @if (auth()->user()->subscribed($name))
            @if (auth()->user()->subscribed($name, $price))

                @if (auth()->user()->subscription($name)->onGracePeriod())
                    <div>
                        <button wire:click="resumeSubscription" wire:loading.attr="disabled"
                            wire:target="resumeSubscription"
                            class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                            <x-spinner wire:loading wire:target="resumeSubscription" size="6" class="mr-2" />
                            Resume Plan
                        </button>
                    </div>
                @else
                    <article>
                        <button wire:click="cancelSubscription" wire:loading.attr="disabled"
                            wire:target="cancelSubscription"
                            class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                            <x-spinner wire:loading wire:target="cancelSubscription" size="6" class="mr-2" />
                            Cancel
                        </button>
                    </article>
                @endif
            @else
                <button wire:click="changePlan" wire:loading.attr="disabled" wire:target="changePlan"
                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
                    <x-spinner wire:loading wire:target="changePlan" size="6" class="mr-2" />
                    Change plan
                </button>
            @endif
        @else
        <input wire:model="coupon" class="form-control mb-3" placeholder="Enter a coupon...">
            <a wire:click="newSubscription" wire:loading.attr="disabled" wire:target="newSubscription"
                class="cursor-pointer font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                <x-spinner wire:loading wire:target="newSubscription" size="6" class="mr-2" />
                Subscribe
            </a>
        @endif
    @else
        <button
            class="font-bold bg-gray-600 hover:bg-gray-700 text-white text-sm rounded-md px-10 py-2 transition-colors w-full items-center justify-center">
            Add Payment Method
        </button>
    @endif
</div>
