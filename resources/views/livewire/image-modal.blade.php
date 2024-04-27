<!-- resources/views/livewire/image-modal.blade.php -->
<div>
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="max-w-3xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
            <img src="{{ $imageUrl }}" alt="Large Image" class="w-full">
            <button wire:click="$emit('closeModal')" class="absolute top-0 right-0 mt-3 mr-3 text-gray-800 hover:text-gray-600 focus:outline-none">&times;</button>
        </div>
    </div>
</div>
