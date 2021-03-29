<button {{ 
    $attributes->merge(['type' => 'submit',
                        'class' => 'font-bold bg-yellow p-5 lg:text-lg text-black-700 rounded-md transition hover:bg-yellow-dark hover:shadow-xl border-b-4 border-yellow-darkest'])}}>
    {{ $slot }}
</button>