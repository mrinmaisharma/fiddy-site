<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads; // Import the WithFileUploads trait


class ManageProducts extends Component
{
    use WithPagination;
    protected $paginationTheme='tailwind';

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        session()->flash('success', 'Product deleted successfully.');
    }

    public function editProduct($productId)
    {
        $this->dispatch('editProduct', ['productId' => $productId]);
    }


    public function render()
    {
        $products=Product::paginate(20);
        return view('livewire.admin.manage-products', compact('products'));
    }
}
