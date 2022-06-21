<x-app-layout>
    <div class="container py-12 grid grid-cols-12 gap-6">
        <div class="col-span-7">
            <article class="card">
                <div class="card-body">
                    <div class="flex">
                        <img class="w-48 h-28 object-cover" src="{{ Storage::url($service->image) }}" alt="">
                        <div class="ml-4 flex justify-between flex-1 items-center self-start">
                            <h1 class="font-bold text-lg uppercase text-gray-500">{{ $service->title }}</h1>
                            <p class="font-bold text-gray-500">{{ $service->price }} USD</p>
                        </div>
                    </div>
                    <hr class="my-4">
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa exercitationem accusantium fugit eos, in quas, adipisci deleniti eligendi molestiae neque ex, tempora ipsam laudantium repellat est odit iure <a class="text-blue-500 font-bold" href="">Terms and Conditions</a>.</p>
                </div>
            </article>
        </div>
        <div class="col-span-5">
            @livewire('service-pay', ['service' => $service])
        </div>
    </div>
</x-app-layout>
