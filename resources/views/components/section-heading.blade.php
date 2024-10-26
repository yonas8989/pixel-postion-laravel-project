<div class="inline-flex  items-center space-x-3 mb-6">
    <!-- Star Bullet -->
    <span class="relative inline-block w-4 h-4 bg-transparent flex-shrink-0" style="margin-top: 2px;">
        <span class="absolute inset-0 w-3 h-3 bg-white transform rotate-45"></span>
        <span class="absolute inset-0 w-3 h-3 bg-white transform -rotate-45"></span>
    </span>

    <!-- Heading Text -->
    <h3 {{ $attributes->merge(['class' => 'text-2xl font-bold text-slate-100']) }}>
        {{ $slot }}
    </h3>
</div>
