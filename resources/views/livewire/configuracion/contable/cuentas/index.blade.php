<x-app-layout>
    @section('breadcrumb')
        <div class="justify-between block page-header md:flex">
            <div>
                <h3 class="text-2xl font-medium text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white"> Contable</h3>
            </div> 
            <ol class="flex items-center min-w-0 whitespace-nowrap">
                <li class="text-sm">
                <a class="flex items-center font-semibold truncate text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                    Contable
                    <i class="flex-shrink-0 mx-3 overflow-visible text-gray-300 ti ti-chevrons-right dark:text-gray-300 rtl:rotate-180"></i>
                </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Cuentas
                </li>
            </ol>           
        </div>
    @endsection

    @livewire('configuracion.contable.cuentas.filtro')
    @livewire('configuracion.contable.cuentas.table')


</x-app-layout>
