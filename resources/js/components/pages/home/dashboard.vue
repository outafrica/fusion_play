<template>
    <div class="grid grid-cols-1 divide-y">
        <div>
            <button @click="showAddForm" type="button"
                class="text-green-700 bg-white hover:bg-green-100 border border-green-200 focus:ring-4 focus:outline-none focus:ring-green-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-green-600 dark:bg-green-700 dark:border-green-600 dark:text-white dark:hover:bg-green-500 mr-2 mb-2">
                <img aria-hidden="true" class="w-6 h-5 mr-2 -ml-1" src="../../../../../public/images/more.png">
                Add Playlist
            </button>
            <button @click="showShareForm" type="button"
                class="text-green-700 bg-white hover:bg-green-100 border border-green-200 focus:ring-4 focus:outline-none focus:ring-green-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-green-600 dark:bg-green-700 dark:border-green-600 dark:text-white dark:hover:bg-green-500 mr-2 mb-2">
                <img aria-hidden="true" class="w-6 h-5 mr-2 -ml-1" src="../../../../../public/images/share.png">
                Share Playlist
            </button>
        </div>
        <div v-if="isAddForm" class="pt-10">
            <form>
                <div class="flex">
                    <input type="text" id="playlist-link"
                        class="rounded-none rounded-l-lg bg-gray-50 border text-gray-900 focus:ring-cyan-500 focus:border-cyan-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-cyan-400 dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                        placeholder="Playlist Link">
                    <span
                        class="inline-flex items-center px-4 text-sm text-white bg-purple-200 border border-r-0 border-purple-300 rounded-r-md dark:bg-purple-600 dark:text-white dark:border-purple-600">
                        <button @click="submit">
                            Add
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div v-if="isShareForm" class="pt-20">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between pb-4">
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                            class="inline-flex items-center text-cyan-500 bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 focus:ring-4 focus:ring-neutral-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-neutral-800 dark:text-cyan dark:border-neutral-600 dark:hover:bg-neutral-700 dark:hover:border-neutral-600 dark:focus:ring-neutral-700"
                            type="button">
                            <svg class="w-4 h-4 mr-2 text-cyan-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Last 30 days
                            <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio"
                            class="z-10 hidden w-48 bg-white divide-y divide-neutral-100 rounded-lg shadow dark:bg-neutral-700 dark:divide-neutral-600"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-cyan-700 dark:text-cyan-200"
                                aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-1"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            day</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input checked="" id="filter-radio-example-2" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-2"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-3"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-4"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            month</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-5" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-5"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-cyan-500 dark:text-cyan-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 pl-10 text-sm dark:text-cyan-400 border border-neutral-300 rounded-lg w-80 bg-neutral-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-neutral-600 dark:placeholder-neutral-400 dark:text-cyan-400 dark:focus:ring-neutral-500 dark:focus:border-neutral-500"
                            placeholder="Search for playlist(s)">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-cyan-500 dark:text-cyan-400">
                    <thead class="text-xs text-cyan-700 uppercase bg-neutral-50 dark:bg-neutral-700 dark:text-cyan-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 rounded focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Playlist Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Count
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Spotify Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apple Music Link
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hover:bg-neutral-50 dark:hover:bg-neutral-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 rounded focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 text-green-500 dak:text-green">
                                5
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-cyan-600 dark:text-cyan-500 hover:underline hover:text-emerald-900">Get
                                    Playlist</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-cyan-600 dark:text-cyan-500 hover:underline hover:text-red-900">Get
                                    Playlist</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pt-20">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between pb-4">
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                            class="inline-flex items-center text-cyan-500 bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 focus:ring-4 focus:ring-neutral-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-neutral-800 dark:text-cyan dark:border-neutral-600 dark:hover:bg-neutral-700 dark:hover:border-neutral-600 dark:focus:ring-neutral-700"
                            type="button">
                            <svg class="w-4 h-4 mr-2 text-cyan-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Last 30 days
                            <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio"
                            class="z-10 hidden w-48 bg-white divide-y divide-neutral-100 rounded-lg shadow dark:bg-neutral-700 dark:divide-neutral-600"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-cyan-700 dark:text-cyan-200"
                                aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-1"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            day</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input checked="" id="filter-radio-example-2" type="radio" value=""
                                            name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-2"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-3"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-4"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            month</label>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                        <input id="filter-radio-example-5" type="radio" value="" name="filter-radio"
                                            class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                        <label for="filter-radio-example-5"
                                            class="w-full ml-2 text-sm font-medium text-cyan-900 rounded dark:text-cyan-300">Last
                                            year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-cyan-500 dark:text-cyan-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 pl-10 text-sm dark:text-cyan-400 border border-neutral-300 rounded-lg w-80 bg-neutral-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-neutral-600 dark:placeholder-neutral-400 dark:text-cyan-400 dark:focus:ring-neutral-500 dark:focus:border-neutral-500"
                            placeholder="Search for playlist(s)">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-cyan-500 dark:text-cyan-400">
                    <thead class="text-xs text-cyan-700 uppercase bg-neutral-50 dark:bg-neutral-700 dark:text-cyan-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 rounded focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Playlist Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Count
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Spotify Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apple Music Link
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hover:bg-neutral-50 dark:hover:bg-neutral-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-cyan-600 bg-neutral-100 border-neutral-300 rounded focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4 text-green-500 dak:text-green">
                                5
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-cyan-600 dark:text-cyan-500 hover:underline hover:text-emerald-900">Get
                                    Playlist</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-cyan-600 dark:text-cyan-500 hover:underline hover:text-red-900">Get
                                    Playlist</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            isShareForm: false,
            isAddForm: false,
            playlistLink: '',
            spotifyPlaylist: {},
            applePlaylist: {},
        };
    },
    methods: {
        async showShareForm() {
            this.isAddForm = false;

            // implement async function to get active user's spotify playlist
            const res = await this.callApi('get', '/spotify/get_playlists');

            if (res.status == 200) {

                // this.s('Playlist successfully loaded');
                return this.isShareForm = true;

            } else {

                // this.d('Unable to load playlist. Try again later!');

            }

        },
        showAddForm() {
            this.isShareForm = false;
            return this.isAddForm = true;
        },
        submit() {

            //to do - handle type of request appropriately

            this.isAddForm = false;
            this.isShareForm = false;

        }
    },
}
</script>