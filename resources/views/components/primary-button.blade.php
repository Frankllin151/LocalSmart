
<style>
    .back-button{
        background: #fd7b1e;
    }
</style>
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 back-button text-white  border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest   active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
