<div class="overflow-x-auto mt-12 px-4">
    <table class="du-table du-table-zebra">
        <!-- head -->
        <thead>
            <tr class="">
                <th></th>
                <th class="px-10">Name</th>
                <th class="px-10">Email</th>
                <th class="px-8">Phone</th>
                <th class="px-4">Wardrobe Type</th>
                <th class="px-4">Finish Type</th>
            </tr>
        </thead>
        <tbody class="">
            @foreach ($data as $row)
                <tr wire:click="show({{ $row->id }})" class="cursor-pointer">
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone_number }}</td>
                    <td>{{ $row->wardrobe_type }}</td>
                    <td>{{ $row->finish_type }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <div x-data="{ showModal: @entangle('showModal') }">
        <div x-show="showModal" id="detailsModal" class="fixed inset-0 overflow-y-auto">
            <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Modal Background -->
                <div x-show="showModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- Modal Panel -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div x-show="showModal"
                    class="mt-24 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full z-50"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <!-- Modal Content -->
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <!-- Modal Body -->
                        @if ($item)
                            <div>
                                <h1 class="text-lg font-medium mb-2">Details</h1>
                                <div class="flex flex-col gap-1 items-center">
                                    <div class="flex gap-1 items-start">
                                        <span class="font-semibold">Wardrobe:</span>
                                        <span>{{ ucwords($item->wardrobe_type) }}</span>
                                    </div>
                                    <div class="flex gap-1 items-start">
                                        <span class="font-semibold">Finish:</span>
                                        <span>{{ ucwords($item->finish_type) }}</span>
                                    </div>
                                    <div class="px-5 sm:px-0">
                                        @php
                                            $src = "images/fiddy/wardrobe/$item->wardrobe_type.png";
                                        @endphp
                                        <img src="{{ asset($src) }}"
                                            class="sm:h-44 cursor-pointer min-h-10 min-w-10 w-full resize object-cover group-hover:border-gray-700 border-2 border-transparent" />
                                    </div>
                                    <div class="flex gap-5 text-sm flex-wrap">
                                        <div class="flex flex-col gap-1">
                                            <span class="underline underline-offset-2">Width:</span>
                                            <span>{{ $item->width }} ft</span>
                                        </div>

                                        <div class="flex flex-col gap-1">
                                            <span class="underline underline-offset-2">Height:</span>
                                            <span>{{ $item->height }} ft</span>
                                        </div>

                                    </div>
                                    <div class="flex gap-3 text-sm flex-wrap sm:flex-row flex-col mt-4">
                                        <div class="flex flex-col gap-1 sm:items-start items-center">
                                            <span class="font-bold text-center">Name:</span>
                                            <span class="">{{ $item->name }}</span>
                                        </div>
                                        <div class="flex flex-col gap-1 sm:items-start items-center">
                                            <span class="font-bold text-center">Email:</span>
                                            <span class="">{{ $item->email }}</span>
                                        </div>
                                        <div class="flex flex-col gap-1 sm:items-start items-center">
                                            <span class="font-bold items-center text-center">Phone:</span>
                                            <span class="">{{ $item->phone_number }}</span>
                                        </div>
                                    </div>
                                    <div class="flex gap-3 text-sm flex-wrap sm:flex-row flex-col sm:mt-8 mt-2">
                                        <div class="flex flex-col gap-1 sm:items-start items-center">
                                            <span class="font-bold text-center">Total Estimate:</span>
                                            <span class="text-center">{{ $item->total_estimate }}</span>
                                        </div>
                                        <div class="flex flex-col gap-1 sm:items-start items-center">
                                            <span class="font-bold text-center">Shared
                                                Estimate:</span>
                                            <span class="">{{ $item->shared_estimate }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Modal Footer -->
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button wire:click="closeModal" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @livewireScripts

        <script>
            //document.addEventListener('livewire:load', function() {
            //Livewire.on('toggleModal', () => {
            //const modal = document.querySelector('[x-data]');
            //modal.__x.$data.showModal = !modal.__x.$data.showModal;
            //});
            //});

            function closeModal() {
                const modal = document.getElementById('detailsModal');
                modal.style.display = 'none';
            }
        </script>
    </div>
</div>
