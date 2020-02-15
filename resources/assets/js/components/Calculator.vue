<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Acme</h3>
        </div>
        <div class="panel-body">
            <p>Well done! You've set up your dev environment.</p>
            <button @click="onClick" class="btn">Click me</button>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        onClick(event) {
            alert("Thank you for clicking me.")
        }
    }
}
</script>
<style>
</style>
