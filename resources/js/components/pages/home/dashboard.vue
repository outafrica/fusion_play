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

        <spotify v-if="isShareForm" :spotifyPlaylist="spotifyPlaylist"></spotify>
        <!-- <applemusic></applemusic> -->

    </div>
</template>

<script>
import spotify from '../playlists/spotify_playlists.vue';
import applemusic from '../playlists/apple_music_playlists.vue';


export default {
    components: {
        applemusic,
        spotify,
    },
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
                this.spotifyPlaylist = res.data;
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

        },

    },
}
</script>