<template>
    <div class="col-xl-12 col-md-12  col-12">
        <div class="row">
            <!-- <div class="col-1"></div> -->
            <div class="row workshop_tabs">
                                    
                <ul class="tabs">
                    <li v-for="(item,index) in tabs"
                     @click="passComponent(item.component,index,item.isSelected)" 
                     :class="{ selected : item.isSelected, notselected : !item.isSelected }"
                     ref="el" :key="index">
                        {{item.name}}
                    </li>
                </ul>

                <div class="tab__content ">
                    <component :is="component" :data="Hello"/>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ProductInquiry from "./ProductInquiry.vue"
import MoreProducts from "./MoreProducts.vue"
import ProductReview from "./ProductReview.vue"
import ProductShipping from "./ProductShipping.vue"

const tabs =[
    {
        name:"shipping",
        component:"ProductShipping",
        isSelected:false
    },
    {
        name:"Reviews",
        component:"ProductReview",
        isSelected:false
    },
    {
        name:"More products",
        component:"MoreProducts",
        isSelected:false

    },
    {
        name:"Product Inquiry",
        component:"ProductInquiry",
        isSelected:false
    }
]
export default{
    name:"ExtraOptions",
    components:{
        ProductInquiry,MoreProducts,ProductReview,ProductShipping 
    },
    methods:{
        passComponent(renderComponent,key){
            console.log(key)
            this.component = renderComponent
            this.tabs.forEach(element => {
                element.isSelected = false                
            });
            this.toggleSelection(key)
            if(renderComponent === "MoreProducts"){
                this.Hello = tabs
            }
        },
         toggleSelection(key) {
            const stepsItem = this.tabs[key]
            console.log(stepsItem.index)
            if (stepsItem) {
                stepsItem.isSelected = !stepsItem.isSelected
            }
        }
    },
    data(){
        return{
            component:"ProductInquiry",
            tabs,
        }
    }
}
</script>

<style scoped>
.notselected{
    border: none;
    color: #575757
}
.selected{
    border-bottom: 2px solid #C49346;
    color:#C49346; 
}


</style>