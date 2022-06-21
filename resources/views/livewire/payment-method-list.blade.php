<div>
    <section class="card relative">
        <div wire:loading.flex class="absolute w-full h-full bg-gray-100 bg-opacity-25 z-30 items-center justify-center">
            <x-spinner size="20" />
        </div>
        <div class="px-6 py-4 bg-gray-50">
            <h1 class="text-gray-700 text-lg font-bold">Payment method added</h1>
        </div>
        <div class="card-body divide-y divide-gray-200">
                @forelse ($paymentMethods as $paymentMethod)
                    <article class="text-sm text-gray-700 py-2 flex justify-between items-center">
                        <div>
                            <h1><span class="font-bold">{{ $paymentMethod->billing_details->name }}</span>
                                xxxx-{{ $paymentMethod->card->last4 }}</h1>
                            <p>Expire: {{ $paymentMethod->card->exp_month }} / {{ $paymentMethod->card->exp_year }}
                            </p>
                        </div>
                        <div>
                            <i class="fas fa-star cursor-pointer"
                                wire:click="defaultPaymentMethod('{{ $paymentMethod->id }}')"></i>
                            <i class="fas fa-trash cursor-pointer"
                                wire:click="deletePaymentMethod('{{ $paymentMethod->id }}')"></i>
                        </div>
                    </article>
                @empty
                <div>
                    <span class="px-4 py-3 text-gray-700">You do not have any payment method.</span>
                </div>
                @endforelse
        </div>
    </section>
</div>
