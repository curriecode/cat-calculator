<template>
    <div class="calculator">
        <div class="display">{{ current || 0 }}</div>
        <div @click="clear" class="btn">C</div>
        <div @click="sign" class="btn">+/-</div>
        <div @click="percent" class="btn">%</div>
        <div class="btn operator">÷</div>
        <div class="btn">7</div>
        <div class="btn">8</div>
        <div class="btn">9</div>
        <div class="btn operator">x</div>
        <div class="btn">4</div>
        <div class="btn">5</div>
        <div class="btn">6</div>
        <div class="btn operator">-</div>
        <div class="btn">1</div>
        <div class="btn">2</div>
        <div class="btn">3</div>
        <div class="btn operator">+</div>
        <div class="zero btn">0</div>
        <div class="btn">.</div>
        <div class="btn operator">=</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            current: "1234"
        };
    },
    methods: {
        clear() {
            this.current = "";
        },
        sign() {
            this.current =
                this.current.charAt(0) === "-"
                    ? this.current.slice(1)
                    : `-${this.current}`;
        },
        percent() {
            this.current = `${parseFloat(this.current) / 100}`;
        }
    }
};
</script>
<style scoped>
/* all child elements of calculator will be put into 4 by infinty grid */
.calculator {
    margin: 0 auto;
    width: 400px;
    text-align: center;
    font-size: 40px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(50px, auto);
}
.display {
    grid-column: 1 / 5;
    background-color: #333;
    color: white;
}
.zero {
    grid-column: 1 / 3;
}
.btn {
    cursor: pointer;
    background-color: #eee;
    border: 1px solid #999;
}
.operator {
    background-color: orange;
    color: white;
}
</style>
