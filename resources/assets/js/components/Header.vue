<template>
    <div id="header" class="header">
        <!-- <h1>This is the HEADER</h1> -->
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
