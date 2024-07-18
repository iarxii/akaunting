<x-layouts.error>
<x-slot name="title">
    {{ trans('errors.title.php_version') }}
</x-slot>

<x-slot name="content">
    <div class="h-full flex flex-col items-center justify-center">
        <div class="flex flex-col items-start gap-y-4">
            <h1 class="font-medium text-5xl lg:text-8xl">
                {{ trans('errors.header.php_version') }}
            </h1>

            <span class="text-lg">
                {{ trans('errors.message.php_version', ['php_version' => $php_version]) }}
            </span>

            @php $documentation_link = route('documentation'); @endphp
            <x-link
                href="{{ $documentation_link }}"
                class="relative flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white px-6 py-1.5 text-base rounded-lg mt-3"
                override="class"
            >
                {{ trans('general.read_the_docs') }}
            </x-link>
        </div>
    </div>
</x-slot>
</x-layouts.error>
