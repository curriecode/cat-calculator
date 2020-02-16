<template>
    <div class="container">
        <Header />
        <Calculator @equalClicked="req" @clearCat="clearCat" />
        <Catpic :catpic="catpic" />
    </div>
</template>
<script>
import Calculator from "./Calculator";
import CatPic from "./Catpic";
import Header from "./Header";
export default {
    data() {
        return {
            catpic: null
        };
    },
    components: {
        Header: Header,
        Calculator: Calculator,
        CatPic: CatPic
    },
    methods: {
        req() {
            axios
                .get("/api/cats/create")
                .then(res => {
                    console.log("YASSSSSSSSS", res.data[0].url);
                    this.catpic = res.data[0].url;
                })
                .catch(err => {
                    console.log("ERROR: ", err);
                });
        },
        clearCat() {
            this.catpic = null;
        }
    }
};
</script>
<style>
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}
</style>
