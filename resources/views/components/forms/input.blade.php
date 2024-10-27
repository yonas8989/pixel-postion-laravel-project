@props(['label', 'name'])

@php
$defaults = [
'type' => $attributes->get('type', 'text'),
'name' => $name,
'class' => 'rounded-xl mb-3 bg-white/10 border border-white/10 px-5 py-4 w-full',
'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
