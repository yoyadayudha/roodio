@props([
    'id',
    'name' => null,
    'icon' => null,
    'label' => null,
    'additionalInfo' => null,
    'isRequired' => true,
    'defaultOption' => null
])

@php
    $name = $name ?? $id;

    $baseStyle = 'w-full px-1.5 py-0.5 h-8 text-small border-b-2 rounded-md text-shadedOfGray-60 italic focus:border-secondary-happy-100 focus:border-b-2 focus:bg-secondary-happy-20/65 hover:bg-shadedOfGray-30/45 ease-in-out duration-125 md:text-body-size md:h-9';

    $normalStyle = 'bg-shadedOfGray-20/50 border-shadedOfGray-50';
    $errorStyle = 'error bg-error-lighten/25 border-error-dark';
    $conditionalStyle = ($errors->has($name)) ? $errorStyle : $normalStyle;
@endphp

<div class='flex flex-col p-1 h-max mb-6 w-full'>
    <label for="{{ $name }}" class='text-small flex flex-row mb-1 md:text-body-size'>
        @isset($icon)
            <img src="{{ asset('assets/icons/'. $icon .'.svg') }}" alt='{{ $icon }}' class='w-5 mr-1.5 md:w-6 lg:w-7'>
        @endisset

        @isset($label)
            <p class='text-primary-85'>
                {{ $label }}@if ($isRequired)<span class='text-error-dark'>*</span>@endif
            </p>
        @endisset
    </label>

    @isset($additionalInfo)
        <p class='text-micro text-shadedOfGray-70 font-bold md:text-small'>{{ $additionalInfo }}</p>
    @endisset

    <div class='relative'>
        <select
            id="{{ $id }}"
            name="{{ $name }}"
            autocomplete="{{ ($attributes->has('autocomplete')) ? 'on' : 'off' }}"
            @isset($placeholder)
                placeholder="{{ $placeholder }}"
            @endisset
            {{ $attributes->merge([
                'class' => $baseStyle . ' ' . $conditionalStyle
            ]) }}
        >
            <option value="" disabled hidden {{ old($name) ? '' : 'selected' }}>
                {{ ($defaultOption == null) ? $name : $defaultOption }}
            </option>
            @isset($options)
                {{ $options }}
            @endisset
        </select>
        @isset($additionalContent)
            {{ $additionalContent }}
        @endisset
    </div>

    <div class="error-message">
        @error($name)
            {{ $message }}
        @enderror
    </div>
</div>