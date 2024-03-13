@props(['id'=>'','src'=>'', 'class'=>""])
<span class="relative group image-radio-container">
    <input type="radio" id="{{$id}}" class="hidden" {{ $attributes }} />
    <label for="{{$id}}">
        <img src="{{$src}}" class="cursor-pointer min-h-10 min-w-10 w-full resize object-cover group-hover:border-gray-700 border-2 border-transparent" />
    </label>
</span>