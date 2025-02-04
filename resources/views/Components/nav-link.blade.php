@props(['active' => false])
<a 
class="{{ $active ? 'bg-gray-900 text-white' : 'text-grey-300 hover:bg-grey-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium text-white"
aria-current="{{ $active ? 'page' : false }}"
{{ $attributes }}>
    {{ $slot }}
</a>