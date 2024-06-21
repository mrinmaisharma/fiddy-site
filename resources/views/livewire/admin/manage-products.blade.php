<div class="">
    @push('styles')
        <style>
            /* Style for the modal background overlay */
            .modal-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.793); /* Translucent black */
                z-index: 999; /* Ensure the overlay is on top of other content */
                display: none; /* Initially hidden */
            }
            
            /* Style for the modal content */
            .modal-content {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: white;
                padding: 20px;
                z-index: 1000; /* Ensure the modal content is on top of the overlay */
                display: none; /* Initially hidden */
            }
        </style>
    @endpush

    <div class="max-w-screen-lg mx-auto">
        <div class="flex flex-col items-center gap-1">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Our Products
            </h1>
            <div class="h-1 bg-primary w-20"></div>
        </div>
        <div class="flex justify-center items-center">
            <div class="my-20">
                <!-- Background overlay -->
                <div class="modal-overlay" id="modalOverlay"></div>
            
                <!-- Modal content -->
                <dialog id="myModal" class="modal bg-transparent">
                    <button class="text-center text-gray-500 hover:text-gray-700 focus:outline-none" onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" fill="#FFFFFF"/>
                        </svg>
                    </button>

                    @livewire('forms.product-form')
                </dialog>

                <div class="flex flex-wrap gap-2 sm:gap-5 mb-5 mt-10 justify-center">
                    <button id="createProductBtn" class="py-2 px-4 bg-black text-white focus:outline-none" onclick="openCreateForm()">Create New</button>
                </div>

                <div class="flex flex-wrap gap-2 sm:gap-5 mb-5 mt-10 justify-center">
                    <button id="all" class="py-2 px-4 bg-black text-white focus:outline-none">ALL</button>
                    <button id="furniture" class="py-2 px-4 focus:outline-none">KITCHENS</button>
                    <button id="wardrobe" class="py-2 px-4 focus:outline-none">WARDROBES</button>
                    <button id="kitchen" class="py-2 px-4 focus:outline-none">BEDROOMS</button>
                    <button id="kitchen" class="py-2 px-4 focus:outline-none">FURNITURES</button>
                </div>
            
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 px-5 md:px-20 lg:px-52" style="width: 100vw;">
                    @foreach ($products as $index => $product)
                        <div class="relative cursor-pointer">
                            <div>
                                <div class="bg-center bg-cover bg-no-repeat h-64 md:h-72 lg:h-80" style="background-image: url('{{ asset('storage/' . $product->image_path) }}')">
                                    <div class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity p-5">
                                        <div class="flex gap-10">
                                            <h1 class="text-white text-xl" wire:click="destroy({{ $product->id }})">DELETE</h1>
                                            <h1 class="text-white text-xl" wire:click="editProduct({{ $product->id }})" onclick="setTimeout(() => { openCreateForm(); }, 300);">EDIT</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    @endforeach
                </div>
                
            </div>
        </div>

        <div class="">
            {{$products->links()}}
        </div>
        @push('scripts')
            <script>
                const myModal = document.getElementById('myModal');
                const myModal1 = document.getElementById('myModal1');
                const modalOverlay = document.getElementById('modalOverlay');
                const createProductForm = document.getElementById('createProductForm');

                function openUpdateForm() {
                    myModal1.showModal();
                    modalOverlay.style.display = 'block'; // Show the background overlay
                }

                function openCreateForm() {
                    myModal.showModal();
                    modalOverlay.style.display = 'block'; // Show the background overlay
                }


                function closeUpdateModal() {
                    myModal1.close();
                    modalOverlay.style.display = 'none'; // Hide the background overlay when modal is closed
                }

                function closeModal() {
                    myModal.close();
                    modalOverlay.style.display = 'none'; // Hide the background overlay when modal is closed
                }

                window.addEventListener('editProduct', event => {
                    Livewire.emit('editProduct', event.detail.productId);
                });
            </script>
        @endpush
    </div>

</div>
