<template>
<div class="content__wrapper">
    <h3>Product Inquiry</h3>
    <p v-if="errorMsg !== ''" style="color:red;text-align: left;">
        {{errorMsg}}
    </p>

    <form class="work-form col-12">
        <div class="col-12">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <input type="text" v-model="name" class="form-control" id="exampleFormControlInput" placeholder="name">           
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            
            <input type="email" v-model="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            
                <textarea class="form-control" v-model="inquiry" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <button @click="submitInquiry($event)" class="btn custom-btn">Submit</button>
            </div>
        
        </div>
    </form>

</div>
</template>

<script>
export default{
    name:"ProductInquiry",
    methods:{
        submitInquiry(e){
            e.preventDefault()
            if(!this.name){
            this.errorMsg="Please enter your name"
            }
            else if(!this.email){
                this.errorMsg="Please enter your email "
            }
           /*  else if(!this.validate(this.userEmail)){
                this.errorMsg="please, check email format"
            } */
            else if(!this.inquiry){
                this.errorMsg="Please enter your inquiry "
            }
            else{
                let inquiry={
                    name:this.name,
                    email:this.email,
                    inquiryText:this.inquiry
                }
                console.log(inquiry)
            }
        }
    },
    data(){
        return{
            errorMsg:''
        }
    }

}
</script>
