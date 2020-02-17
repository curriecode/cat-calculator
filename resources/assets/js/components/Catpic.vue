<template>
    <div id="cat-pic" class="image">
        <img class="cat" v-bind:src="catpic" />
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    props: ["catpic"]
};
</script>
<style scoped></style>
