@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-customWhite bg-customWhite text-customFont focus:border-customBlue focus:ring-customBlue rounded-md shadow-sm']) }}>
