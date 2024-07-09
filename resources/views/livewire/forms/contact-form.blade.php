<div class="mt-4">
    <x-banner />
    <form wire:submit.prevent="submit" class="flex flex-col gap-1">
        <div>
            <x-shared.text-input type="text" id="name" wire:model="name" placeholder="Enter your Name" />
            <x-input-error for="name" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-shared.text-input type="email" id="email" wire:model="email" placeholder="Enter your Email" />
            <x-input-error for="email" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-shared.text-input type="tel" id="phone" wire:model="phone"
                placeholder="Enter your Phone Number" />
            <x-input-error for="phone" class="mt-2" />
        </div>
        <p class="text-sm mt-2">
            I need help with
        </p>
        <div class="flex flex-wrap gap-2 text-xs items-center">
            <div class="inline-flex items-center gap-1">
                <x-shared.checkbox id="need_help_with_kitchen" value="kitchen" wire:model="need_help_with" />
                <label class="cursor-pointer" for="need_help_with_kitchen">Kitchen</label>
            </div>
            <div class="inline-flex items-center gap-1">
                <x-shared.checkbox id="need_help_with_bathroom" value="bathroom" wire:model="need_help_with" />
                <label class="cursor-pointer" for="need_help_with_bathroom">Bathroom</label>
            </div>
            <div class="inline-flex items-center gap-1">
                <x-shared.checkbox id="need_help_with_wardrobe" value="wardrobe" wire:model="need_help_with" />
                <label class="cursor-pointer" for="need_help_with_wardrobe">Wardrobe</label>
            </div>
            <div class="inline-flex items-center gap-1">
                <x-shared.checkbox id="need_help_with_furniture" value="furniture" wire:model="need_help_with" />
                <label class="cursor-pointer" for="need_help_with_furniture">Furnitures</label>
            </div>
        </div>
        <x-input-error for="need_help_with" class="mt-2" />
        <div class="mt-4">
            <x-shared.textarea id="message" wire:model="message" placeholder="How can we help?"></x-shared.textarea>
            <x-input-error for="message" class="mt-2" />
        </div>
        <div class="flex justify-center">
            <x-shared.theme-button type="submit">
                GET A QUICK CALL BACK
            </x-shared.theme-button>
        </div>
    </form>
</div>
