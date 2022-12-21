<template>
    <div class="section contact-us-info">
        <div class="container">
            <div class="row">
                <div
                    v-if="settings"
                    class="col-md-7 align-self-center"
                >
                    <iframe
                        :src="settings.google_map"
                        width="100%"
                        :height="mobile ? '350px' : '450px'"
                        class="framete"
                        frameborder="0"
                        style="border: 0"
                        allowfullscreen
                        aria-hidden="false"
                        tabindex="0"
                    ></iframe>
                </div>
                <div class="col-md-5 align-self-center">
                    <ul v-if="settings.site" class="list-unstyled">
                        <li>
                            <div>Email</div>
                            <div>
                                <a
                                    :href="
                                        `mailto:${settings.site}`
                                    "
                                    v-text="
                                        settings.site || ''
                                    "
                                ></a>
                            </div>
                        </li>
                        <li>
                            <div>Phone</div>
                            <div>
                                <a
                                    :href="
                                        `tel:${settings.phone}`
                                    "
                                    v-text="
                                        settings.phone ||
                                            ''
                                    "
                                    ></a
                                >
                            </div>
                        </li>
                        <li>
                            <div>Address</div>
                            <div
                                v-text="
                                    settings.address || ''
                                "
                            ></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'ContactUsInfo',
    data() {
        return {
            mobile: null,
            settings : []
        }
    },
    mounted() {
        if (
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                navigator.userAgent
            )
        ) {
            this.mobile = true
        } else {
            // false for not mobile device
            this.mobile = false
        }
    },
    created() {
        this.all_settings();
    },

    methods:{
        async all_settings() {
            try{
                const res = await this.AxiosRequest("get" , "/api/settings");
                if(res.status == 200){

                    this.settings = res.data;
                    console.log( this.settings);


                }
                else{
                    console.log("eror occured");
                }
            }
            catch(error){
                console.log("eror occured");
            }
        }
    },
}
</script>

<style lang="scss" scoped>
.contact-us-info {
    background-color: #3e4a74;
    ul {
        //font-size: 32px;
        a {
            color: #fff;
        }
    }
    .framete {
        @media (max-width: 768px) {
            width: 100%;
            margin-bottom: 50px;
        }
    }
}
</style>
