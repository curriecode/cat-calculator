<template>
    <div>
        <Calculator @equalClicked="req" />
        <Catpic />
    </div>
</template>
<script>
import Calculator from "./Calculator";
import CatPic from "./Catpic";
export default {
    components: {
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
        }
    }
};
</script>
<style></style>
