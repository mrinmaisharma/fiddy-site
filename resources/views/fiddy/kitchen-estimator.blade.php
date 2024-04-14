<x-guest-layout>
    @section('title', 'Kitchen Estimator')

    
    <div class="flex flex-col items-center gap-1">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-800 text-center">
            Kitchen Price Estimator
        </h1>
        <div class="h-1 bg-primary w-16"></div>
    </div>

    <div class="mt-10 xl:px-72 sm:px-5 pb-32 flex items-center justify-center" id="formContainer">
        @livewire('forms.kitchen-estimator-form')
    </div>

    @push('scripts')
        <script>

            function openModal(modalId) {
                setTimeout(()=>{document.getElementById(modalId).showModal();},100);
            }
            function closeModal(modalId) {
                setTimeout(()=>{document.getElementById(modalId).close();},100);
            }

            window.closeModal=closeModal;

            window.addEventListener("openModal", event=> {
                const modalId = event.detail.modalId;
                openModal(modalId);
            });

            window.addEventListener("closeModal", event=> {
                const modalId = event.detail.modalId;
                closeModal(modalId);
            });

            function resizeIframe () {
                const height = document.getElementById('formContainer').offsetHeight;

                console.log(height);

                //  Send a message to the parent window to resize the iframe
                window.parent.postMessage({ resizeIframe: true, height: height+200 }, '*');
            }
            // window.onload = resizeIframe;

            window.addEventListener("triggerResize", resizeIframe);
        </script>
    @endpush

</x-guest-layout>