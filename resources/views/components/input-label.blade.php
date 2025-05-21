@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-customWhite']) }}>
    {{ $value ?? $slot }}
</label>
