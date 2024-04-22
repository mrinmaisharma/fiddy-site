<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="flex flex-col gap-8 px-6">
            <div class="mt-4">
                <h2 class="font-bold text-2xl">Apply for this position</h2>
            </div>
            <div class="flex flex-col gap-2">
                <label for="name">Full Name <span class="text-red-600">*</span></label>
                <input type="text" wire:model="name" id="name"
                    class="border-[#EEEEEE] border focus:border-green-400">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="phone">Email <span class="text-red-600">*</span></label>
                <input type="text" wire:model="phone" id="phone" class="border-[#EEEEEE]">
                @error('phone')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="email">Phone <span class="text-red-600">*</span></label>
                <input type="email" wire:model="email" id="email" class="border-[#EEEEEE]">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="coverLetter">Cover Letter <span class="text-red-600">*</span></label>
                <textarea wire:model="coverLetter" id="coverLetter" class="h-32 border-[#EEEEEE]"></textarea>
                @error('coverLetter')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="class="flex flex-col gap-2"">
                <label for="resume">Upload CV/Resume <span class="text-red-600">*</span></label>
                <input type="file" wire:model="resume" id="resume" class="mt-2">
                @error('resume')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input type="checkbox" wire:model="termsAndConditions" id="termsAndConditions" class="border-[#EEEEEE]">
                <label for="termsAndConditions">By using this form you agree with the storage and handling of your data
                    by
                    this website <span class="text-red-600">*</span> </label>
                @error('termsAndConditions')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button class="mb-4 bg-[#EBC31F] w-24 py-2 px-2 text-sm text-white" type="submit">SUBMIT</button>
        </div>
    </form>
</div>
