<button {{ $attributes->merge(['type' => 'submit', 'class' => 
    'inline-flex items-center px-4 py-2 bg-yellow border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-yellow-dark active:bg-yellow-dark focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
