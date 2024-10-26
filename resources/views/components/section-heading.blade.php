<div class="inline-flex items-center space-x-3 mb-6">
    <span class="relative inline-flex items-center justify-center w-4 h-4 bg-transparent flex-shrink-0 align-middle">
        <span class="absolute inset-0 w-3 h-3 bg-white transform -rotate-45"></span>
    </span>

    <h3 {{ $attributes->merge(['class' => 'text-2xl font-bold text-slate-100 align-middle']) }}>
        {{ $slot }}
    </h3>
</div>
