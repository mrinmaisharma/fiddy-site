<div >
    @if ($step==1)
    <form wire:submit.prevent="openForm">
        @csrf
        <x-validation-errors />
        <p class="mb-5 font-bold">Please select kitchen type:</p>
        <div class="grid grid-cols-2 sm:grid-cols-4  w-full gap-5">
            <x-shared.image-radio id="kitchen_type_straight" name="kitchen_type" src="{{asset('images/fiddy/kitchen/straight.png')}}" wire:model.live="kitchen_type" value="straight"/>
            <x-shared.image-radio id="kitchen_type_parallel" name="kitchen_type" src="{{asset('images/fiddy/kitchen/parallel.png')}}" wire:model.live="kitchen_type" value="parallel"/>
            <x-shared.image-radio id="kitchen_type_lshaped" name="kitchen_type" src="{{asset('images/fiddy/kitchen/l-shaped.png')}}" wire:model.live="kitchen_type" value="l-shaped"/>
            <x-shared.image-radio id="kitchen_type_ushaped" name="kitchen_type" src="{{asset('images/fiddy/kitchen/u-shaped.png')}}" wire:model.live="kitchen_type" value="u-shaped"/>
        </div>
        <div>
            <x-input-error for="kitchen_type" class="mt-2" />
        </div>
        <p class="mb-5 font-bold">Please select finish type:</p>
        <div class="grid grid-cols-2 sm:grid-cols-4  w-full gap-5">
            <x-shared.image-radio id="finish_type_acrylic" name="finish_type" src="{{asset('images/fiddy/kitchen/acrylic.png')}}" wire:model.live="finish_type" value="acrylic"/>
            <x-shared.image-radio id="finish_type_laminate" name="finish_type" src="{{asset('images/fiddy/kitchen/laminate.png')}}" wire:model.live="finish_type" value="laminate"/>
            <x-shared.image-radio id="finish_type_pu" name="finish_type" src="{{asset('images/fiddy/kitchen/pu.png')}}" wire:model.live="finish_type" value="PU"/>
        </div>
        <div>
            <x-input-error for="finish_type" class="mt-2" />
        </div>
        @if ($kitchen_type!='0')
        <p class="mt-5 mb-2 font-bold">Enter kitchen dimensions:</p>
        @endif
        @php
            $typeSides=[
                '0'=>[],
                'straight'=>['A'],
                'parallel'=>['A','B'],
                'l-shaped'=>['A','B'],
                'u-shaped'=>['A','B','C']
            ];
        @endphp
        @foreach ($typeSides[$kitchen_type] as $s)
        <p class="text-sm  mt-5 mb-2 underline underline-offset-2">Side {{$s}}:</p>
        <div class="grid grid-cols-3 gap-3 sm:gap-5">
            <div class="flex flex-col gap-1">
                <label for="length{{$s}}" class="text-sm">Length (ft)</label>
                <x-shared.text-input class="text-sm" id="length{{$s}}" type="number" required step="0.1" min="1" name="length{{$s}}" wire:model="length_{{strtolower($s)}}" placeholder="Length" />
                <x-input-error for="length_{{strtolower($s)}}" class="mt-2" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="breadth{{$s}}" class="text-sm">Slab Depth (ft)</label>
                <x-shared.text-input class="text-sm" id="breadth{{$s}}" type="number" disabled required step="0.1" min="1" name="breadth{{$s}}" wire:model="breadth_{{strtolower($s)}}" placeholder="Breadth" />
                <x-input-error for="breadth_{{strtolower($s)}}" class="mt-2" />
            </div>
            {{-- <div class="flex flex-col gap-1">
                <label for="height{{$s}}" class="text-sm">Height (ft)</label>
                <x-shared.text-input class="text-sm" id="length{{$s}}" type="number" disabled required step="0.1" min="1" name="height{{$s}}" wire:model="height_{{strtolower($s)}}" placeholder="Height" />
                <x-input-error for="height_{{strtolower($s)}}" class="mt-2" />
            </div> --}}
        </div>
        @endforeach
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
        <h3 class="font-bold text-2xl text-center mb-5">Kitchen Estimate</h3>
        <div class="flex flex-col gap-1 items-center">
            <div class="flex gap-1 items-start">
                <span class="font-semibold">Shape:</span>
                <span>{{ucwords($kitchen_type)}} ({{ucwords($finish_type)}})</span>
            </div>
            <div class="px-5 sm:px-0">
                @php
                    $src="images/fiddy/kitchen/$kitchen_type.png";
                @endphp
                <img src="{{asset($src)}}" class="sm:h-44 cursor-pointer min-h-10 min-w-10 w-full resize object-cover group-hover:border-gray-700 border-2 border-transparent" />
            </div>
            <div class="flex gap-3 text-sm flex-wrap">
                <div class="flex flex-col gap-1">
                    <span class="underline underline-offset-2">Side A</span>
                    <span>({{$length_a}}x{{$breadth_a}})</span>
                </div>
                @if ($this->kitchen_type!='straight')
                    <div class="flex flex-col gap-1">
                        <span class="underline underline-offset-2">Side B</span> 
                        <span>({{$length_b}}x{{$breadth_b}})</span>
                    </div>
                @endif
                @if ($kitchen_type=='u-shaped')
                    <div class="flex flex-col gap-1">
                        <span class="underline underline-offset-2">Side C</span>
                        <span>({{$length_c}}x{{$breadth_c}})</span>
                    </div>
                @endif
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
