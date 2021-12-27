<template>
    <nav class="mb-10 list-none">        
        <!--<li v-for="(field, index) in fields" :key="index" >-->
        <!--    <a :href="`/fields/${field.id}`" class="text-sm text-gray-400 hover:text-gray-500 cursor-pointer ">-->
        <!--        {{field.name}}-->
        <!--    </a>-->
        <!--</li>-->
        <li>
            <a href="/policy" class="text-sm text-gray-400 hover:text-gray-500 cursor-pointer ">
                Privacy Policy
            </a>
        </li>
        <li>
            <a href="/terms" class="text-sm text-gray-400 hover:text-gray-500 cursor-pointer ">
                Terms and Conditions
            </a>
        </li>
        <li>
            <a href="/about" class="text-sm text-gray-400 hover:text-gray-500 cursor-pointer ">
                About Fridgii
            </a>
        </li>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                fields:[]
            }
        },
        created() {
            axios
            .get(`/api/fields/random`)
            .then(response => response.data )
            .then(async response => { 
                this.fields=response.fields;
            })
            .catch((err) => {console.log(err);})
        }
    }
</script>
