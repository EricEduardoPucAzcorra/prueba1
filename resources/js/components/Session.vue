<template>
<main>
    <div class="blog-wrapper section-padding-100 clearfix" style="justify-content: center;
                        align-items: center;">
        <div class="container">
            <div class="row align-items-end ">
                <!-- Single Blog Area -->
                <div class="col-6 col-lg-6 ">
                        <form>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                      
                        
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                </div>
            </div>
        </div>    
    </div>
</main>
</template>

<script>
    export default {
        data(){
            return{
                bienvenido:'Bienvenido a Santa maria'
            }
        },
        methods: {
            
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


