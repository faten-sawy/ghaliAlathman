<template>
<section id="wrapper" class="w3l-banner-slider-main">	
    <div class="bannerhny-content">
        <div class="row row_work">
            <!--/banner-slider-->
            <div class="col-lg-8 content-baner-inf baner" style="flex:1">
                <div class="container">
                
                    <div class="single-product-details listview">
                        
                        <div class="row">
                            
                            <div class="col-xl-2 col-md-3 col-12">			 
                                <a href="#" class="rose_perfume"><img :src="src" class="img-fluid" alt="" style="" /></a>
                            </div>
                            
                            <div class="col-xl- col-md-12 col-12 product-content">

                                <h2 class="product-name">
                                    <a href="#">Online workshop</a>
                                </h2>
                                
                                <div class="rating-review">
                                    <star-rating v-bind:read-only=true v-bind:rating="3" v-bind:rtl="true" 
                                        v-bind:show-rating="false" v-bind:star-size="18" active-color="#FDE172" inactive-color="#E4E4E4" class="rate" />
                                    
                                </div>
                                
                                <div>
                                    <h5 style="color:#484848;font-size: 1rem;">Workshop + notes box</h5>
                                </div>
                                <div class="description">
                                    <p class="custom-description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                                <div class="price-box">
                                    <span class="old-price">sold(23)</span>
                                    <span class="new-price">SAR90.00</span>
                                </div>
                                <div class="row work-row">
                                    
                                    <div class="col-xl-4 col-md-5 col-5 pro-actions">
                                        <a class="custom-btn" href="#" style="color:#fff;">Add to Cart</a>
                                    </div>
                                    <div class="counter col-xl-4 col-md-5 col-5">
                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                        <input type="text" value="1">
                                        <span class="up"  onClick='increaseCount(event, this)'>+</span>
                                    </div>
                                    
                                </div>
                                                                                         
                            </div>
                            <!-- Extra options -->
                            <ExtraOptions/>
                            
                        </div>
                                            
                    </div>
                                        
                </div>
            </div>
           
            <!-- Product Image -->
            <div class="col-lg-4 right-banner right first_content">
                <div class="right-1">
                    <div class="perfume_img">
                        <img :src="src_1" class="perfume img-fluid" alt="" style="width:500px;" />
                    </div>
                </div>
            </div>
        </div>
										
	</div>
					

</section>
</template>
<script>
import StarRating from 'vue-star-rating'
import src from  "../assets/images/Group 32.png"
import src_1 from "../assets/images/pexels-valeria-boltneva-1961795.png"
import src_2 from "../assets/images/heart.png"

import ExtraOptions from "../components/ExtraOptions.vue"
export default{
    name:"Workshop-online",
    components:{
        StarRating,ExtraOptions
    },
    data(){
        return{
            src,src_1,src_2
        }
    }
}

</script>