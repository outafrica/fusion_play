<template>
    <div class="container  mx-auto">
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
