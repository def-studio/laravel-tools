<div {{$attributes}}>
    @if(!empty($label))
        <label for="{{$id}}" class='block font-medium text-sm text-gray-700'>
            {{$label}}
        </label>
    @endif

    <select id="{{$id}}"
            class='{{$base_class()}} cursor-pointer'
            @if($model)wire:model{{$defer ? '.defer' : ''}}="{{$model}}"@endif
    >
        @if(!empty($unselected))
            <option value="">{{$unselected}}</option>
        @endif
        @foreach($options as $value => $label)
            @if(is_array($label))
                @if(count($label) > 0)
                    <optgroup label="{{$value}}">
                        @foreach($label as $suboption_value => $suboption_label)
                            <option value="{{$suboption_value}}">{{$suboption_label}}</option>
                        @endforeach
                    </optgroup>
                @endif
            @else
                <option value="{{$value}}">{{$label}}</option>
            @endif

        @endforeach
    </select>

    @if($model)
        @error($model)
        <p class='text-sm text-red-600 mt-2'>{{ $message }}</p>
        @enderror
    @endif

</div>
