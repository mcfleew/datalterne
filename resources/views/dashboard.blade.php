<x-app-layout>
    @livewire('navigation-menu')
    <!-- Header -->
    <div class="relative bg-lopcolor md:pb-32">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div class="w-full lg:w-6/12 pt-4 pb-4 ml-auto mr-auto text-center">
                <div class="pr-12">
                    <h1 class="text-white font-semibold text-3xl">
                        Données de L'OPCOMMERCE
                    </h1>
                </div>
            </div>
            <div>
                <!-- Card stats -->
                <div class="flex flex-wrap sm:pb-24 md:pb-4">
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            ETP GLOBAL
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            350,897
                                        </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                                    <span class="text-emerald-500 mr-2">
                                        <i class="fas fa-arrow-up"></i> 3.48%
                                    </span>
                                    <span class="whitespace-nowrap">
                                        Since last month
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            ETP ATLERNANTS
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            2,356
                                        </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                            <i class="fas fa-business-time"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                                    <span class="text-red-500 mr-2">
                                        <i class="fas fa-arrow-down"></i> 3.48%
                                    </span>
                                    <span class="whitespace-nowrap"> Since last week </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            ETP CONTRAT D’APPRENTISSAGE
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            924
                                        </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                            <i class="fas fa-book-reader"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                                    <span class="text-orange-500 mr-2">
                                        <i class="fas fa-arrow-down"></i> 1.10%
                                    </span>
                                    <span class="whitespace-nowrap"> Since yesterday </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap">
                                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                            ETP CONTRAT DE PROFESSIONALISATION
                                        </h5>
                                        <span class="font-semibold text-xl text-blueGray-700">
                                            49,65%
                                        </span>
                                    </div>
                                    <div class="relative w-auto pl-4 flex-initial">
                                        <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                            <i class="fas fa-user-graduate"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm text-blueGray-400 mt-4">
                                    <span class="text-emerald-500 mr-2">
                                        <i class="fas fa-arrow-up"></i> 12%
                                    </span>
                                    <span class="whitespace-nowrap">
                                        Since last month
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700">
                    <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full max-w-full flex-grow flex-1">
                                <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">
                                    Overview
                                </h6>
                                <h2 class="text-white text-xl font-semibold">
                                    Effort de recrutement
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 flex-auto">
                        <!-- Chart -->
                        <div class="relative h-350-px">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full xl:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full max-w-full flex-grow flex-1">
                                <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">
                                    Performance
                                </h6>
                                <h2 class="text-blueGray-700 text-xl font-semibold">
                                    Temps moyen passé en alternance
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 flex-auto">
                        <!-- Chart -->
                        <div class="relative h-350-px">
                            <canvas id="bar-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mt-4">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">
                                    Nombre de contrat par région
                                </h3>
                            </div>
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                    See all
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto">
                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Région
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Année de référence
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Année de comparaison
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Taux
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        Auvergne-Rhône-Alpes
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        4,569
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        340
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                        46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        Île-de-France
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        3,985
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        319
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                        46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        Occitanie
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        3,513
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        294
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                        36,49%
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        Provence-Alpes-Côte d'Azur
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        2,050
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        147
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                        50,87%
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        Bretagne
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        1,795
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        190
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                        46,53%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full xl:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">
                                    Diplôme visé
                                </h3>
                            </div>
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                    See all
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto">
                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead class="thead-light">
                                <tr>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Niveau
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        A.R.
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                        Evolution
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        CAP / BEP
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        5
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">60%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                    <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        BAC
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        23
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">70%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                    <div style="width: 70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        BAC +2
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        12
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">80%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                                                    <div style="width: 80%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        BAC +3 / +4
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        40
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">75%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                                                    <div style="width: 75%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        BAC +5
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        7
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <div class="flex items-center">
                                            <span class="mr-2">30%</span>
                                            <div class="relative w-full">
                                                <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                                                    <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="block py-4">
            <div class="container mx-auto px-4">
                <hr class="mb-4 border-b-1 border-blueGray-200" />
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4">
                        <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
                            Copyright © <span id="get-current-year"></span>
                            <a href="https://www.creative-tim.com?ref=njs-dashboard" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                                Datalterne
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-8/12 px-4">
                        <p>Donnée fourni par l’Opcommerce selon les contrats engagées, enregistrés et en cours.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-app-layout>