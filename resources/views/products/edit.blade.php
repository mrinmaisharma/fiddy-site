<x-guest-layout>
    @section('title', 'Our Products')
    <style>
        body{
            background-color: rgba(0, 0, 0, 0.236)
        }
    </style>
    <div class="max-w-screen-lg mx-auto flex justify-center items-center h-screen">
        <div class="modal-box flex flex-col justify-center items-center gap-4 p-8 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold">Update Gallery Element</h1>
            <form id="updateProductForm" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <div class="flex justify-center items-center gap-2">
                    <label for="image" class="text-gray-700">Image:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                    <img id="previewImage" src="{{ asset($product->image_path) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                </div>
                <div class="flex justify-center items-center gap-2">
                    <label for="category" class="text-gray-700">Category:</label>
                    <select name="category" id="category" class="border border-gray-300 rounded-md p-2 px-10" required>
                        <option value="Kitchen">Kitchen</option>
                        <option value="Wardrobes">Wardrobes</option>
                        <option value="Bedrooms">Bedrooms</option>
                        <option value="Furnitures">Furnitures</option>
                    </select>
                </div>
                <div class="flex justify-center items-center gap-2">
                    <label for="description" class="text-gray-700">Description:</label>
                    <textarea id="description" name="description" rows="4" class="border border-gray-300 rounded-md p-2" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>

    <script>
        // Set the default image preview
        window.addEventListener('DOMContentLoaded', function() {
            var imageInput = document.getElementById('image');
            var previewImage = document.getElementById('previewImage');

            imageInput.addEventListener('change', function() {
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                }

                reader.readAsDataURL(file);
            });
        });
    </script>
</x-guest-layout>
