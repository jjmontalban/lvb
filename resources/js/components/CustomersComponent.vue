<template>
    <div class="container">
            <div class="col-md-12">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDOS</th>
                            <th scope="col">RAZON SOCIAL</th>
                            <th scope="col">CIF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in list">
                            <th scope="row" v-text="item.id">1</th>
                            <td v-text="item.name"></td>
                            <td v-text="item.last_name"></td>
                            <td v-text="item.company"></td>
                            <td v-text="item.cif"></td>
                        </tr>
                    </tbody>
                </table>

                <infinite-loading @infinite="infiniteHandler"></infinite-loading>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                list: [],
                page: 0
            };
    },
    methods: {
        infiniteHandler($state) {
            this.page++
            let url = 'http://localhost/lvb/api/customers?page=' + this.page
            
            axios.get(url)
                .then(response => {
                    let customers = response.data.data

                    if(customers.length){
                        this.list = this.list.concat(customers)
                        $state.loaded()
                    }else{
                        $state.complete()
                    }
                });
            }
        }
    }
</script>