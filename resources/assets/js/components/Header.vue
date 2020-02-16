<template>
    <div id="header" class="header">
        <!-- <h1>This is the HEADER</h1> -->
        <img class="cat" v-bind:src="pic" />
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
<style scoped>
.header {
    display: flex;
    width: 100%;
    height: 20%;
}
.cat {
    width: 100%;
    height: 300px;
    margin-bottom: 5%;
}
</style>
