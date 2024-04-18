<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-primary-hover duration-500']) }}>
    {{ $slot }}
</button>
