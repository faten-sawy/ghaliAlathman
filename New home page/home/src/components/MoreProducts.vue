<template>
    <div class="more-products">
        <div v-for="item in data" :key="item" class="card-container">
            <PerfumeCard/>
        </div>
    </div>
</template>

<script>
import PerfumeCard from './PerfumeRatingCard.vue'
export default{
    name:"MoreProducts",
    props:['data'],
    components:{
        PerfumeCard
    }
}
</script>
<style scoped>
.more-products{
    display:flex;
    flex-wrap: wrap;
}
.card-container{
    width:200px
}

</style>