<div class="modal-box flex flex-col justify-center items-center gap-4 p-8 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold">@if($action === 'edit')
        Update
    @else
        Create
    @endif Product</h1>
    <form wire:submit.prevent="submit" class="flex flex-col gap-4 justify-center items-center">
        <div class="flex justify-center items-center gap-2">
            <label for="image" class="text-gray-700">Image:</label>
            <input wire:model="image" type="file" id="image" name="image" accept="image/*" @if($action != 'edit') required @endif>
        </div>
        <div class="flex justify-center items-center gap-2">
            <label for="category" class="text-gray-700">Category:</label>
            <select wire:model="category" name="category" id="category" class="border border-gray-300 rounded-md p-2 px-10" required>
                <option value="Kitchen" @if($category === 'Kitchen') selected @endif>Kitchen</option>
                <option value="Wardrobes" @if($category === 'Wardrobes') selected @endif>Wardrobes</option>
                <option value="Bedrooms" @if($category === 'Bedrooms') selected @endif>Bedrooms</option>
                <option value="Furnitures" @if($category === 'Furnitures') selected @endif>Furnitures</option>
            </select>
        </div>
        
        <div class="flex justify-center items-center gap-2">
            <label for="description" class="text-gray-700">Description:</label>
            <textarea wire:model="description" id="description" name="description" rows="4" class="border border-gray-300 rounded-md p-2" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
            @if($action === 'edit')
                Update
            @else
                Create
            @endif
        </button>
    </form>
</div>
