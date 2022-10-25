<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs bg-white text-blue uppercase tracking-widest hover:bg-gradient-to-tr  hover:from-mblue hover:to-dblue hover:border-white hover:text-white active:bg-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
