<template>
    <div id="header" class="header">
        <img class="cat" src="{{pic}}" />
    </div>
</template>

<script>
export default {
    data() {
        return {
            pic: null
        };
    },

    created: {
        headerPic() {
            axios
                .get("/api/cats/create")
                .then(res => {
                    this.pic = res.data[0].url;
                })
                .catch(err => {
                    console.log("ERROR: ", err);
                });
        }
    }
};
</script>
<style scoped>
.header {
    display: flex;
    width: 100%;
    height: 20%;
}
</style>
