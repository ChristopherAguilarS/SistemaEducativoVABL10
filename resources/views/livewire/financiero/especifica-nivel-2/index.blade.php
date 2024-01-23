<x-app-layout>
    @section('breadcrumb')
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Financiero</h3>
            </div> 
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Financiero
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Especificas Nivel 2
                </li>
            </ol>           
        </div>
    @endsection

    @livewire('financiero.especifica-nivel-2.filtro')
    @livewire('financiero.especifica-nivel-2.table')


</x-app-layout>
