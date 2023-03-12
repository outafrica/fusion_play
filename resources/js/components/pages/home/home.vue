<template>
    <!--Left Col-->
    <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1
            class="my-4 text-3xl md:text-3xl text-purple-800 font-bold leading-tight text-center md:text-center slide-in-bottom-h1">
            Share your favorite music playlist(s)</h1>
        <p
            class="leading-normal not-italic hover:italic text-base md:text-l mb-8 text-left md:text-left slide-in-bottom-subtitle">
            Do you have that playlist(s) that your friends always ask for but can't share cause you use different
            music streaming platforms?<br>Do you wish to have that awesome playlist(s) that your friend has but
            can't have cause you use different music streaming platforms? </p>

        <h3
            class="my-4 text-3xl md:text-2xl text-purple-800 font-bold leading-tight text-center md:text-center slide-in-bottom-h1">
            Try FusionPlay</h3>
        <p
            class="leading-normal not-italic hover:italic text-base md:text-l mb-8 text-left md:text-left slide-in-bottom-subtitle">
            Fusion Play lets you enjoy playlists across different music streaming platforms. Share that playlist and
            let your friends enjoy your music taste genius</p>

        <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Start with your Music
            Platform:</p>
        <div class="grid grid-cols-2 gap-4 place-content-start h-48">

            <div>
                <a @click="loadSpotifyAuth" class="flex flex-col items-center  rounded-lg">
                    <img src="../../../../../public/images/spotify_logo.svg" class="h-12 pr-4 bounce-top-icons">
                </a>
            </div>

            <div>
                <a @click="loadAppleMusicAuth" class="flex flex-col items-center rounded-lg">
                    <img src="../../../../../public/images/apple_music_logo.svg" class="h-12 pr-4 bounce-top-icons">
                </a>
            </div>
        </div>

    </div>
    <!--Right Col-->
    <div class="flex flex-col w-full xl:w-3/5 justify-center lg:items-start overflow-y-hidden">
        <playlists></playlists>
    </div>

</template>

<script>
import playlists from '../playlists/playlists.vue';

export default {
    components: {
        playlists,
    },
    data() {
        return {
            // save spotify authorization paramas
            spotifyParams: {
                client_id: '7e160fb750654cd78020b421e62d5399',
                response_type: 'code',
                redirect_uri: 'https://fusionplay.co.ke/spotify-callback',
                scope: 'd78020b421e62d53997e160fb750654c'
            },
            // spotify url
            spotifyAuthUrl: 'https://accounts.spotify.com/authorize?',
            // applemusic url
            appleAuthUrl: '',
        }
    },

    methods: {
        // apple music authorization function
        loadAppleMusicAuth() {
            // to do -implement apple music authorization
        },
        // spotify authorization function
        loadSpotifyAuth() {
            // get spotify authorization url
            var url = this.spotifyAuthUrl +
                'client_id=' + this.spotifyParams.client_id +
                '&response_type=' + this.spotifyParams.response_type +
                '&redirect_uri=' + this.spotifyParams.redirect_uri +
                '&scope' + this.spotifyParams.scope;
            // load spotify authorization page
            window.location = url;
        }
    },
}
</script>