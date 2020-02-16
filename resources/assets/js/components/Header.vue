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
<style scoped>
.header {
    text-align: center;

    display: flex;
    width: 100%;
    height: 20%;
}
.cat-header {
    width: 100%;
    height: 350px;
    margin-bottom: 3%;
}
.text {
    width: 100%;
    position: absolute;
    color: rgb(133, 215, 240);
    font-size: 5em;
    font-weight: bold;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-shadow: 3px 3px #333;

    /* z-index: 3; */
}
</style>
