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
        // this function is passed to the calcultor component to be called
        // on click handler - it will call the api and then set catpic in App state as response
        // which is then passed to catpic component as props to load photo
        req() {
            axios
                .get("/api/cats/create")
                .then(res => {
                    this.catpic = res.data[0].url;
                })
                .catch(err => {
                    console.log("ERROR: ", err);
                });
        },
        clearCat() {
            //passed to calculator as custom event to clear photo
            this.catpic = null;
        }
    }
};
</script>
<style></style>
