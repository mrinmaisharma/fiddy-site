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

<div class="my-20">
    <div class="modal-overlay" id="modalOverlay"></div>

    <dialog id="myModal" class="modal bg-transparent">
        <div class="modal-box flex justify-center items-center gap-64" >
            <button class="text-center" onclick="navigateModal('previous')">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                    <path d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM11.289,4.3,12.711,5.7l-4.3,4.344L12.7,14.289,11.3,15.711,5.586,10.063Z" fill="#FFFFFF"/>
                </svg>
            </button>
            <div class="flex flex-col items-end gap-5">
                <button class="text-white text-right" onclick="closeModal()">Close</button>
                <div class="bg-center bg-cover bg-no-repeat w-[60vw] h-[80vh]" id="modalImage" onclick="closeModal()"></div>
            </div>
            <button onclick="navigateModal('next')">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                    <path d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM8.711,4.3l5.7,5.766L8.7,15.711,7.3,14.289l4.289-4.242L7.289,5.7Z" fill="#FFFFFF"/>
                </svg>
            </button>
        </div>
    </dialog>

    <div class="flex flex-wrap gap-2 sm:gap-5 mb-5 mt-10 justify-center">
        <button id="all" class="py-2 px-4 bg-black text-white focus:outline-none">ALL</button>
        <button id="furniture" class="py-2 px-4 focus:outline-none">KITCHENS</button>
        <button id="wardrobe" class="py-2 px-4 focus:outline-none">WARDROBES</button>
        <button id="kitchen" class="py-2 px-4 focus:outline-none">BEDROOMS</button>
        <button id="kitchen" class="py-2 px-4 focus:outline-none">FURNITURES</button>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 px-5 md:px-20 lg:px-52" style="width: 100vw;">
        @foreach ($images as $index => $image)
            <div class="relative cursor-pointer" onclick="openModal('{{ $index }}')">
                <div class="bg-center bg-cover bg-no-repeat h-64 md:h-72 lg:h-80" style="background-image:url('{{ $image }}')">
                    <div class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('scripts')
<script>
    const myModal = document.getElementById('myModal');
    const modalImage = document.getElementById('modalImage');
    const modalOverlay = document.getElementById('modalOverlay');
    const images = {!! json_encode($images) !!};
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        modalImage.style.backgroundImage = `url('${images[currentIndex]}')`;
        myModal.showModal();
        modalOverlay.style.display = 'block';
    }

    function navigateModal(direction) {
    if (direction === 'previous') {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        }
    } else if (direction === 'next') {
        currentIndex++;
        if (currentIndex >= images.length) {
            currentIndex = 0;
        }
    }
    modalImage.style.backgroundImage = `url('${images[currentIndex]}')`;
}


    function closeModal() {
        myModal.close();
        modalOverlay.style.display = 'none';
    }
</script>
@endpush
