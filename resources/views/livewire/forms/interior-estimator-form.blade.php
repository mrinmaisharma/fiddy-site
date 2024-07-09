<div>
    @if ($step == 1)
        <form wire:submit.prevent="next">
            @csrf
            <x-validation-errors />
            <p class="mb-3 font-bold">Please select appartment/house type:</p>
            <div class="flex gap-5 text-sm">
                <div class="flex gap-1 items-center">
                    <input type="radio" id="house_type_2bhk" name="house_type" wire:model="type" value="2 BHK" />
                    <label for="house_type_2bhk">2 BHK</label>
                </div>
                <div class="flex gap-1 items-center">
                    <input type="radio" id="house_type_3bhk" name="house_type" wire:model="type" value="3 BHK" />
                    <label for="house_type_3bhk">3 BHK</label>
                </div>
                <div class="flex gap-1 items-center">
                    <input type="radio" id="house_type_4bhk" name="house_type" wire:model="type" value="4 BHK" />
                    <label for="house_type_4bhk">4 BHK</label>
                </div>
                <div class="flex gap-1 items-center">
                    <input type="radio" id="house_type_5bhk" name="house_type" wire:model="type" value="5 BHK" />
                    <label for="house_type_5bhk">5 BHK</label>
                </div>
            </div>
            <div>
                <x-input-error for="house_type" class="mt-2" />
            </div>
            <p class="mt-5 mb-3 font-bold">Enter number of rooms you want us to design</p>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-5">
                <div class="flex flex-col gap-1">
                    <label for="bedrooms" class="text-sm">No. of Bedrooms:</label>
                    <x-shared.text-input class="text-sm !bg-white shadow-sm" id="bedrooms" type="number" required
                        step="1" min="0" max="5" name="bedrooms" wire:model="bedrooms"
                        placeholder="Bedrooms" />
                    <x-input-error for="bedrooms" class="mt-2" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="livings" class="text-sm">No. of Living: rooms</label>
                    <x-shared.text-input class="text-sm !bg-white shadow-sm" id="livings" type="number" required
                        step="1" min="0" max="5" name="livings" wire:model="livings"
                        placeholder="Livings" />
                    <x-input-error for="livings" class="mt-2" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="kitchens" class="text-sm">No. of Kitchens:</label>
                    <x-shared.text-input class="text-sm !bg-white shadow-sm" id="kitchens" type="number" required
                        step="1" min="0" max="5" name="kitchens" wire:model="kitchens"
                        placeholder="Kitchens" />
                    <x-input-error for="kitchens" class="mt-2" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="dinings" class="text-sm">No. of Dinings:</label>
                    <x-shared.text-input class="text-sm !bg-white shadow-sm" id="dinings" type="number" required
                        step="1" min="0" max="5" name="dinings" wire:model="dinings"
                        placeholder="Dinings" />
                    <x-input-error for="dinings" class="mt-2" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="bathrooms" class="text-sm">No. of Bathrooms:</label>
                    <x-shared.text-input class="text-sm !bg-white shadow-sm" id="bathrooms" type="number" required
                        step="1" min="0" max="5" name="bathrooms" wire:model="bathrooms"
                        placeholder="Bathrooms" />
                    <x-input-error for="bathrooms" class="mt-2" />
                </div>
            </div>
            <div class="text-center my-5">
                <button type="submit" class="du-btn rounded-none bg-[#ECC31F] hover:bg-[#FAD337]">Next</button>
            </div>
        </form>
    @elseif($step == 2)
        @if (!$saved)
            <h3 class="font-bold text-2xl text-center mb-5">Get Your Price Estimate</h3>
            <form wire:submit.prevent="save">
                @csrf
                <x-validation-errors />
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-5 mt-5">
                    <div class="flex flex-col gap-1">
                        <label for="name" class="text-sm">Name</label>
                        <x-shared.text-input class="text-sm !bg-white shadow-sm" id="name" type="text"
                            name="name" wire:model.live="name" placeholder="Enter your name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-sm">Email</label>
                        <x-shared.text-input class="text-sm !bg-white shadow-sm" id="email" type="email"
                            name="email" wire:model.live="email" placeholder="Enter your email" />
                        <x-input-error for="email" class="mt-2" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="phone" class="text-sm">Phone</label>
                        <x-shared.text-input class="text-sm !bg-white shadow-sm" id="phone"
                            title="Please enter a valid phone number" pattern="^\d{10}$" maxlength="10"
                            type="tel" name="phone" wire:model.live="phone_number"
                            placeholder="Enter your phone number" />
                        <x-input-error for="phone_number" class="mt-2" />
                    </div>
                </div>
                @if (!empty($name) && !empty($email) && !empty($phone_number))
                    <div class="text-center mt-5">
                        <button type="submit" class="du-btn rounded-none bg-[#ECC31F] hover:bg-[#FAD337]">Get
                            Estimate</button>
                    </div>
                @endif
            </form>
        @else
            <h3 class="font-bold text-2xl text-center mb-5">Your Estimate</h3>
            <div class="w-full grid grid-cols-1 sm:grid-cols-3 gap-5">
                @if ($bedrooms)
                    <div class="bg-white shadow-lg shadow-gray-700/10 px-4 py-4 flex flex-col gap-1 items-center">
                        <p class="underline underline-offset-2">Bedroom</p>
                        <table class="text-xs">
                            <tr>
                                <td class="font-semibold">Doors</td>
                                <td class="px-1">:</td>
                                <td>₹20,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">6x8</td>
                                <td class="px-1">:</td>
                                <td>₹75,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Bed + Side Table</td>
                                <td class="px-1">:</td>
                                <td>₹55,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Ceiling + Lights</td>
                                <td class="px-1">:</td>
                                <td>₹30,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Paint</td>
                                <td class="px-1">:</td>
                                <td>₹10,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Mattress + Curtains</td>
                                <td class="px-1">:</td>
                                <td>₹10,000/-</td>
                            </tr>
                        </table>
                        <div class="flex gap-1 text-sm">
                            <span class="">Total cost per bedroom:</span>
                            <span>₹2,00,000</span>
                        </div>
                        <div class="flex gap-1 text-sm">
                            <span class="">No. of bedrooms:</span>
                            <span>{{ $bedrooms }}</span>
                        </div>
                        <div class="flex gap-1">
                            <span class="font-semibold">Total Estimate</span>
                            <span>{{ $fmt->formatCurrency($bedrooms * $bedroom_rate, 'INR') }}</span>
                        </div>
                    </div>
                @endif
                @if ($kitchens)
                    <div class="bg-white shadow-lg shadow-gray-700/10 px-4 py-4 flex flex-col gap-1 items-center">
                        <p class="underline underline-offset-2">Kitchen</p>
                        <table class="text-xs">
                            <tr>
                                <td class="font-semibold">Standard setup:</td>
                                <td class="px-1">:</td>
                                <td>₹2,25,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Doors</td>
                                <td class="px-1">:</td>
                                <td>₹10,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Ceiling + Lights</td>
                                <td class="px-1">:</td>
                                <td>₹20,000/-</td>
                            </tr>
                        </table>
                        <div class="flex gap-1 text-sm">
                            <span class="">Total cost per kitchen:</span>
                            <span>₹2,55,000</span>
                        </div>
                        <div class="flex gap-1 text-sm">
                            <span class="">No. of kitchens:</span>
                            <span>{{ $kitchens }}</span>
                        </div>
                        <div class="flex gap-1">
                            <span class="font-semibold">Total Estimate</span>
                            <span>{{ $fmt->formatCurrency($kitchens * $kitchen_rate, 'INR') }}</span>
                        </div>
                    </div>
                @endif
                @if ($livings)
                    <div class="bg-white shadow-lg shadow-gray-700/10 px-4 py-4 flex flex-col gap-1 items-center">
                        <p class="underline underline-offset-2">Living Room</p>
                        <table class="text-xs">
                            <tr>
                                <td class="font-semibold">Ceiling + lights</td>
                                <td class="px-1">:</td>
                                <td>₹50,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Sofa</td>
                                <td class="px-1">:</td>
                                <td>₹75,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Curtains</td>
                                <td class="px-1">:</td>
                                <td>₹15,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">2 Doors</td>
                                <td class="px-1">:</td>
                                <td>₹20,000/-</td>
                            </tr>
                        </table>
                        <div class="flex gap-1 text-sm">
                            <span class="">Total cost per living room:</span>
                            <span>₹2,10,000</span>
                        </div>
                        <div class="flex gap-1 text-sm">
                            <span class="">No. of living: rooms</span>
                            <span>{{ $livings }}</span>
                        </div>
                        <div class="flex gap-1">
                            <span class="font-semibold">Total Estimate</span>
                            <span>{{ $fmt->formatCurrency($livings * $living_rate, 'INR') }}</span>
                        </div>
                    </div>
                @endif
                @if ($dinings)
                    <div class="bg-white shadow-lg shadow-gray-700/10 px-4 py-4 flex flex-col gap-1 items-center">
                        <p class="underline underline-offset-2 mb-3">Dining Room</p>
                        <table class="text-xs">
                            <tr>
                                <td class="font-semibold">Ceiling + lights</td>
                                <td class="px-1">:</td>
                                <td>₹30,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Dining Table:</td>
                                <td class="px-1">:</td>
                                <td>₹55,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">1 Door</td>
                                <td class="px-1">:</td>
                                <td>₹10,000/-</td>
                            </tr>
                        </table>
                        <div class="flex gap-1 text-sm">
                            <span class="">Total cost per dining room:</span>
                            <span>₹95,000</span>
                        </div>
                        <div class="flex gap-1 text-sm">
                            <span class="">No. of dining: rooms</span>
                            <span>{{ $dinings }}</span>
                        </div>
                        <div class="flex gap-1">
                            <span class="font-semibold">Total Estimate</span>
                            <span>{{ $fmt->formatCurrency($dinings * $dining_rate, 'INR') }}</span>
                        </div>
                    </div>
                @endif
                @if ($bathrooms)
                    <div class="bg-white shadow-lg shadow-gray-700/10 px-4 py-4 flex flex-col gap-1 items-center">
                        <p class="underline underline-offset-2">Bathroom</p>
                        <table class="text-xs">
                            <tr>
                                <td class="font-semibold">Plumbing</td>
                                <td class="px-1">:</td>
                                <td>₹50,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Tiling</td>
                                <td class="px-1">:</td>
                                <td>₹30,000/-</td>
                            </tr>
                            <tr>
                                <td class="font-semibold">Vanity + Mirror:</td>
                                <td class="px-1">:</td>
                                <td>₹25,000/-</td>
                            </tr>
                        </table>
                        <div class="flex gap-1 text-sm">
                            <span class="">Total cost per bathrom:</span>
                            <span>₹1,05,000</span>
                        </div>
                        <div class="flex gap-1 text-sm">
                            <span class="">No. of bathrooms:</span>
                            <span>{{ $bathrooms }}</span>
                        </div>
                        <div class="flex gap-1">
                            <span class="font-semibold">Total Estimate</span>
                            <span>{{ $fmt->formatCurrency($bathrooms * $bathroom_rate, 'INR') }}</span>
                        </div>
                    </div>
                @endif
            </div>
            <p class="text-center mt-5">
                Your total estimate for {{ $type }} is: <strong>{{ $estimate }} (incl. GST)</strong>
                <br />
                <span class="italic">* Terms and Conditions Apply</span>
            </p>
        @endif
    @endif
</div>
