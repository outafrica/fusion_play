<template>
    <div class="pt-20">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center justify-between pb-4">
                <div>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                        class="inline-flex items-center text-green-500 bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 focus:ring-4 focus:ring-neutral-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-neutral-800 dark:text-green dark:border-neutral-600 dark:hover:bg-neutral-700 dark:hover:border-neutral-600 dark:focus:ring-neutral-700"
                        type="button">
                        <svg class="w-4 h-4 mr-2 text-green-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Last 30 days
                        <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRadio"
                        class="z-10 hidden w-48 bg-white divide-y divide-neutral-100 rounded-lg shadow dark:bg-neutral-700 dark:divide-neutral-600"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                        <ul class="p-3 space-y-1 text-sm text-green-700 dark:text-green-200"
                            aria-labelledby="dropdownRadioButton">
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                    <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                        class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="filter-radio-example-1"
                                        class="w-full ml-2 text-sm font-medium text-green-900 rounded dark:text-green-300">Last
                                        day</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                    <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio"
                                        class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="filter-radio-example-2"
                                        class="w-full ml-2 text-sm font-medium text-green-900 rounded dark:text-green-300">Last
                                        7 days</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                    <input id="filter-radio-example-3" type="radio" value="" name="filter-radio"
                                        class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="filter-radio-example-3"
                                        class="w-full ml-2 text-sm font-medium text-green-900 rounded dark:text-green-300">Last
                                        30 days</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                    <input id="filter-radio-example-4" type="radio" value="" name="filter-radio"
                                        class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="filter-radio-example-4"
                                        class="w-full ml-2 text-sm font-medium text-green-900 rounded dark:text-green-300">Last
                                        month</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded hover:bg-neutral-100 dark:hover:bg-neutral-600">
                                    <input id="filter-radio-example-5" type="radio" value="" name="filter-radio"
                                        class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                    <label for="filter-radio-example-5"
                                        class="w-full ml-2 text-sm font-medium text-green-900 rounded dark:text-green-300">Last
                                        year</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-green-500 dark:text-green-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block p-2 pl-10 text-sm dark:text-green-400 border border-neutral-300 rounded-lg w-80 bg-neutral-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-neutral-600 dark:placeholder-neutral-400 dark:text-green-400 dark:focus:ring-neutral-500 dark:focus:border-neutral-500"
                        placeholder="Search for playlist(s)">
                </div>
            </div>
            <table class="w-full text-sm text-left text-green-500 dark:text-green-400">
                <thead class="text-xs text-green-700 uppercase bg-neutral-50 dark:bg-neutral-700 dark:text-green-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 rounded focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Playlist Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tacks
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hover:bg-neutral-50 dark:hover:bg-neutral-600"
                        v-for="playlist in spotifyPlaylist" :key="playlist.id">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-green-600 bg-neutral-100 border-neutral-300 rounded focus:ring-neutral-500 dark:focus:ring-neutral-600 dark:ring-offset-neutral-800 dark:focus:ring-offset-neutral-800 focus:ring-2 dark:bg-neutral-700 dark:border-neutral-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-green-500 dak:text-green">
                            {{ playlist.name }}
                        </td>
                        <td class="px-6 py-4 text-green-500 dak:text-green">
                            {{ playlist.tracks.total }}
                        </td>
                        <td class="px-6 py-4">
                            <button @click="sharePlaylist(playlist)" type="button"
                                class="text-green-700 bg-white hover:bg-green-100 border border-green-200 focus:ring-4 focus:outline-none focus:ring-green-100 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-green-600 dark:bg-green-700 dark:border-green-600 dark:text-white dark:hover:bg-green-500 mr-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                    stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round"
                                        d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>
                                Share
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <paginate></paginate>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        spotifyPlaylist: {
            required: true,
            type: Object,
        }
    },
    data() {
        return {
            playlistID: ''
        }
    },

    methods: {
        async sharePlaylist(playlist) {

            this.playlistID = playlist.id;
            console.log(this.playlistID);
            // implement async function to get active user's spotify playlist
            const res = await this.callApi('post', '/spotify/create-fusion-playlist', this.playlistID);

            if (res.status == 200) {

                // this.s('Playlist successfully loaded');

            } else {

                // this.d('Unable to load playlist. Try again later!');

            }
        }
    },
}
</script>