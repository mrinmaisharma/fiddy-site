<div class="mt-4 flex flex-col gap-4">
    <form wire:submit.prevent="submit">
        <div>
            <input type="text" id="name" wire:model="name" placeholder="Enter your Name" style="font-size: 14px;"
                class="w-full bg-[#FAFAFA] border-[#EAEAEA]">
        </div>
        <div class="mt-2">
            <input type="email" id="email" wire:model="email" placeholder="Enter your Email"
                style="font-size: 14px;" class="w-full bg-[#FAFAFA] border-[#EAEAEA]">
        </div>
        <div class="mt-2">
            <input type="tel" id="phone" wire:model="phone" placeholder="Enter your Phone Number"
                style="font-size: 14px;" class="w-full bg-[#FAFAFA] border-[#EAEAEA]">
        </div>
        <div class="flex flex-col gap-4 mt-2">
            <div>
                I need help with
            </div>
            <div class="flex flex-wrap gap-4">
                <div class="flex gap-4">
                    <div>
                        <input type="checkbox" wire:model="kitchen">
                        <label>Kitchen</label>
                    </div>
                    <div>
                        <input type="checkbox" wire:model="bathroom">
                        <label>Bathroom</label>

                    </div>
                </div>
                <div class="flex gap-4">
                    <div>
                        <input type="checkbox" wire:model="wardrobe">
                        <label>Wardrobe</label>

                    </div>
                    <div>
                        <input type="checkbox" wire:model="furniture">
                        <label>Furnitures</label>

                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <textarea id="how_can_help" wire:model="howCanHelp" placeholder="How can we help?"
                class="w-full bg-[#FAFAFA] border-[#EAEAEA]"></textarea>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-[#EBC31F] text-xs font-bold px-6 py-4">GET
                A QUICK CALL
                BACK</button>
        </div>
    </form>
</div>
