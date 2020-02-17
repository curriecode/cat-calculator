<template>
    <div id="cat-pic" class="image">
        <div>
            <div v-if="catpic === null" class="cat-text">
                MAKE SOME CALCULATIONS TO FIND THE PURRFECT CAT!
            </div>
            <img class="cat" v-bind:src="catpic" />
        </div>
    </div>
</template>

<script>
export default {
    props: ["catpic"],
    data() {
        return {};
    }
};
</script>
<style scoped></style>
