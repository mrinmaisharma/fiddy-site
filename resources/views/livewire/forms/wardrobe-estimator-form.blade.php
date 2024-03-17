<div >
    @if ($step==1)
    <form wire:submit.prevent="openForm">
        @csrf
        <x-validation-errors />
        <p class="mb-3 font-bold">Please select door type:</p>
        <div class="grid grid-cols-2 sm:grid-cols-4  w-full gap-5">
            <x-shared.image-radio id="wardrobe_type_hinged" name="wardrobe_type" src="{{asset('images/fiddy/wardrobe/hinged.png')}}" wire:model.live="wardrobe_type" value="hinged"/>
            <x-shared.image-radio id="wardrobe_type_sliding" name="wardrobe_type" src="{{asset('images/fiddy/wardrobe/sliding.png')}}" wire:model.live="wardrobe_type" value="sliding"/>
        </div>
        <div>
            <x-input-error for="wardrobe_type" class="mt-2" />
        </div>
        <p class="mt-5 mb-3 font-bold">Please select finish type:</p>
        <div class="grid grid-cols-2 sm:grid-cols-4  w-full gap-5">
            <x-shared.image-radio id="finish_type_acrylic" name="finish_type" src="{{asset('images/fiddy/wardrobe/acrylic.png')}}" wire:model.live="finish_type" value="acrylic"/>
            <x-shared.image-radio id="finish_type_laminate" name="finish_type" src="{{asset('images/fiddy/wardrobe/laminate.png')}}" wire:model.live="finish_type" value="laminate"/>
            <x-shared.image-radio id="finish_type_glass" name="finish_type" src="{{asset('images/fiddy/wardrobe/glass.png')}}" wire:model.live="finish_type" value="glass"/>
        </div>
        <div>
            <x-input-error for="finish_type" class="mt-2" />
        </div>
        <p class="mt-5 mb-3 font-bold">Please select material:</p>
        <div class="grid grid-cols-2 sm:grid-cols-4  w-full gap-5">
            <x-shared.image-radio id="material_mdf" name="material" src="{{asset('images/fiddy/wardrobe/mdf.png')}}" wire:model.live="material" value="MDF"/>
            <x-shared.image-radio id="material_hdhmr" name="material" src="{{asset('images/fiddy/wardrobe/hdhmr.png')}}" wire:model.live="material" value="HDHMR"/>
            <x-shared.image-radio id="material_waterproof_ply" name="material" src="{{asset('images/fiddy/wardrobe/waterproof_ply.png')}}" wire:model.live="material" value="Waterproof Ply"/>
        </div>
        <div>
            <x-input-error for="material" class="mt-2" />
        </div>        
        <p class="mt-5 mb-2 font-bold">Enter dimensions:</p>
        <div class="grid grid-cols-3 gap-3 sm:gap-5">
            <div class="flex flex-col gap-1">
                <label for="width" class="text-sm">Width (ft)</label>
                <x-shared.text-input class="text-sm" id="width" type="number" required step="0.1" min="1" name="width" wire:model="width" placeholder="Width" />
                <x-input-error for="width" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="height" class="text-sm">Height (ft)</label>
                <x-shared.text-input class="text-sm" id="length" type="number" required step="0.1" min="1" name="height" wire:model="height" placeholder="Height" />
                <x-input-error for="height" class="mt-2" />
            </div>
        </div>
        <div class="text-center my-5">
            <button type="submit" class="du-btn rounded-none bg-[#ECC31F] hover:bg-[#FAD337]">Next</button>
        </div>
    </form>
    @elseif($step==2)
        @if (!$saved)
        <h3 class="font-bold text-2xl text-center mb-5">Get Your Price Estimate</h3>
        <form wire:submit.prevent="save">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-5 mt-5">
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm">Name</label>
                    <x-shared.text-input class="text-sm" id="name" type="text" name="name" wire:model.live="name" placeholder="Enter your name" />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email" class="text-sm">Email</label>
                    <x-shared.text-input class="text-sm" id="email" type="email" name="email" wire:model.live="email" placeholder="Enter your email" />
                    <x-input-error for="email" class="mt-2" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="phone" class="text-sm">Phone</label>
                    <x-shared.text-input class="text-sm" id="phone" title="Please enter a valid phone number" pattern="^\d{10}$" maxlength="10" type="tel" name="phone" wire:model.live="phone_number" placeholder="Enter your phone number" />
                    <x-input-error for="phone_number" class="mt-2" />
                </div>
            </div>
            @if (!empty($name) && !empty($email) && !empty($phone_number))
            <div class="text-center mt-5">
                <button type="submit" class="du-btn rounded-none bg-[#ECC31F] hover:bg-[#FAD337]">Get Estimate</button>
            </div>
            @endif
        </form>
        @else
        <h3 class="font-bold text-2xl text-center mb-5">Wardrobe Estimate</h3>
        <div class="flex flex-col gap-1 items-center">
            <div class="flex gap-1 items-start">
                <span class="font-semibold">Shape:</span>
                <span>{{ucwords($wardrobe_type)}} ({{ucwords($finish_type)}}, {{$material}})</span>
            </div>
            <div class="px-5 sm:px-0">
                @php
                    $src="images/fiddy/wardrobe/$wardrobe_type.png";
                @endphp
                <img src="{{asset($src)}}" class="sm:h-44 cursor-pointer min-h-10 min-w-10 w-full resize object-cover group-hover:border-gray-700 border-2 border-transparent" />
            </div>
            <div class="flex gap-3 text-sm flex-wrap">
                <div class="flex flex-col gap-1">
                    <span class="underline underline-offset-2">Size</span>
                    <span>({{$width}}x{{$height}})</span>
                </div>
            </div>
        </div>
        <p class="text-center mt-5">
            Your total estimate is: <strong>{{$estimate}} (incl. GST)</strong>
            <br/>
            <span class="italic">* Terms and Conditions Apply</span>
        </p>
        @endif
    @endif
</div>