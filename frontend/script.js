const app = new vue({
    el: "#app",
    created(){
        axios.get("http://localhost:8888/php-ajax-dischi/api.php").then(response => console.log(response.data))
    }
})