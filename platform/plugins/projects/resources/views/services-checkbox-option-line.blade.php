@php
/**
 * @var string $value
 */
$value = isset($value) ? (array)$value : [];
@endphp
@if($services)
    <ul>
        @foreach($services as $service)
            @if($service->id != $currentId)
                <li value="{{ $service->id ?? '' }}"
                        {{ $service->id == $value ? 'selected' : '' }}>
                    {!! Form::customCheckbox([
                        [
                            $name, $service->id, $service->name, in_array($service->id, $value),
                        ]
                    ]) !!}

                </li>
            @endif
        @endforeach
    </ul>
@endif
