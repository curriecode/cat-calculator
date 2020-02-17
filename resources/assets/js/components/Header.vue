<template>
    <div id="header" class="header">
        <img class="cat-header" v-bind:src="pic" />
        <div class="text">CAT CALCULATOR</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pic: null
        };
    },

    created() {
        // calls the api to render a unique cat photo in the header on page load
        axios
            .get("/api/cats/create")
            .then(res => {
                this.pic = res.data[0].url;
            })
            .catch(err => {
                console.log("ERROR: ", err);
            });
    }
};
</script>
<style scoped></style>
