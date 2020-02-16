module.exports = {
    parser: "vue-eslint-parser",
    parserOptions: {
        parser: "babel-eslint"
    },
    plugins: ["vue"],
    extends: [
        "eslint:recommend",
        "plugin:vue/recommend",
        "prettier",
        "prettier/vue"
    ]
};
