<template id="appWrapper">
     <div class="search-box">
            <input
                class="search-input"
                type="text"
                name="q"
                placeholder="Buscar..."
                v-model="query"
                @input="search"
            />
            <ul class="result-list" :class="resultsVisibility">
                <li v-for="cliente in clientes" class="result-item">
                    <a href="#" class="result-link">
                        <div class="result-title">{{ cliente.nombre }}</div>

                        <div class="result-content">
                            {{ cliente.direccion }}
                        </div>
                    </a>
                </li>
            </ul>
        </div>
</template>

<script>
export default {
    data() {
        return {
            query: "",
            clientes: [],
        };
    },
    computed: {
        resultsVisibility() {
            return this.query.length > 0 ? "show" : "hide";
        },
    },
    methods: {
        search() {
            axios.post("clientes/search", {
                q: this.query
            }).then(res => {
                this.clientes = res.data.clientes;
            }).catch(error => {
                console.log(error.response);
            });
        },
    },
};
</script>

<style>
body {
    font-family: sans-serif;
}
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #888;
}
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
.container {
    padding: 30px;
}
.search-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.search-input {
    padding: 9px 10px 9px 32px;
    outline: none;
    font-size: 18px;
    border-radius: 25px;
    color: #444;
    border: 3px solid #a50559;
    background-image: #fff url("/img/search-icon.jpg") no-repeat 9px center;
    width: 60px;
    transition: all .5s;
}
.search-input:hover {
    width: 180px;
    background-color: #fff;
    border-color: #8c10b3;
    box-shadow: 0 0 5px #6dcff680;
}
.result-list.show {
    position: absolute;
    width: 640px;
    max-height: 250px;
    overflow: auto;
    list-style: none;
    background: tan;
    padding: 0px;
    top: 40px;
    border-radius: 10px;
    box-shadow: 1px 2px 8px 0px #555;
}
.result-list.hide {
    display: none;
}
.result-item {
    border-bottom: 1px solid chocolate;
}
.result-link {
    text-decoration: none;
    color: black;
    display: block;
    padding: 10px 15px;
}
.result-link {
    background: #888;
}
.result-title {
    font-size: 20px;
    font-weight: 600;
}
.result-content {
    font-size: 18px;
}
</style>
