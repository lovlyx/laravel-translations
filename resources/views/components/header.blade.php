<div class="pb-48 bg-blue-700">
    <nav x-data="{ open: false }" class="bg-blue-700 border-b border-blue-300 border-opacity-25 lg:border-none">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16 lg:border-b lg:border-blue-400 lg:border-opacity-25">
                <div class="flex items-center px-2 lg:px-0">
                    <a href="{{ route('translations_ui.index') }}" class="flex items-center flex-shrink-0 gap-3">
                        <img src="https://cdn.gameboost.com/static/brand/icon-text.svg" class="h-8" />
                        <span class="font-medium text-white sr-only">Translations</span>
                    </a>
                </div>

                @livewire('translations-ui::export-translations')
            </div>
        </div>
    </nav>
</div>
