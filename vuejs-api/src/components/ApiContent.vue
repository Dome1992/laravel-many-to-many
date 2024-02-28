<template>
    <h1> Hello World API CONTENT</h1>
</template>

<script>
import axios from 'axios'; // IMPORTIAMO AXIOS


export default {
    name: 'ApiContent' ,
    mounted() {

        axios.get('http://127.0.0.1:8000/api/v1/test')
            .then(response => {

                const data = res.data;
                console.log(response.data);
            })
            .catch(err => {

                console.log(err);
            })
    }
}


</script>