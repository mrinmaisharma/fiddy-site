<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Livewire\WithFileUploads; // Import the WithFileUploads trait
use App\Models\Product;

class ProductForm extends Component
{
    use WithFileUploads; // Include the WithFileUploads trait

    public $product;
    public $productId;
    public $action; // Indicates whether we are creating or editing
    public $image;
    public $category;
    public $description;


    protected $listeners = ['editProduct'];

    public function mount()
    {
        $this->product = new Product();
        $this->action = 'create';
    }

    public function render()
    {
        return view('livewire.forms.product-form');
    }

    public function editProduct($productId)
    {
        $products = Product::find($productId);

        if ($products) {
            $this->action = 'edit';
            $this->productId = $productId;
            $this->product = $products[0];
            
            $this->image=$this->product->image_path;
            $this->category=$this->product->category;
            $this->description=$this->product->description;
        }
    }



    public function submit()
    {
        if ($this->action === 'create') {
            $this->createProduct();
        } else {
            $this->updateProduct();
        }

        $this->reset(['product', 'action']);

        $this->dispatch('refreshProductList');
    }

    private function createProduct()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
            'description' => 'required',
        ]);

        try {
            $imageName = time() . '_' . $this->category . '.' . $this->image->getClientOriginalExtension();  
            $imagePath = $this->image->storeAs('public/images/fiddy/products', $imageName);

            $imagePath = str_replace('public/', '', $imagePath);

            Product::create([
                'image_path' => $imagePath,
                'category' => $this->category,
                'description' => $this->description,
            ]);

            session()->flash('success', 'Product created successfully.');
            return redirect()->to('/manage-products');
        } catch (\Exception $e) {
            logger()->error('Error storing image: ' . $e->getMessage());
            
            session()->flash('error', 'An error occurred while storing the image.');
            return redirect()->to('/manage-products');
        }
    }




    private function updateProduct()
    {

        try {
            $product = Product::findOrFail($this->productId);

            if (!is_string($this->image)) {
                // dd($this->image);
                $imageName = time() . '_' . $this->category . '.' . $this->image->getClientOriginalExtension();  
                $imagePath = $this->image->storeAs('public/images/fiddy/products', $imageName);

                $imagePath = str_replace('public/', '', $imagePath);

                $product[0]->update([
                    'image_path' => $imagePath,
                    'category' => $this->category,
                    'description' => $this->description,
                ]);

            } else {
                $product[0]->update([
                    'category' => $this->category,
                    'description' => $this->description,
                ]);
            }

            session()->flash('success', 'Product updated successfully.');
            return redirect()->to('/manage-products');
            
        } catch (\Exception $e) {
            logger()->error('Error updating product: ' . $e->getMessage());
            
            session()->flash('error', 'An error occurred while updating the product.');
            return redirect()->to('/manage-products');
        }
    }

}
