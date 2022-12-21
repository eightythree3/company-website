<template>
    <div class="section contact-us" :class="mobile ? 'mobile' : ''">
        <div class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <h3 v-if="this.$store.state.lang == 'en'" class="title" :class="mobile ? 'mobile' : ''">
                         ContactUs
                        </h3>
                        <h3 v-else="this.$store.state.lang == 'ar'" class="title" :class="mobile ? 'mobile' : ''">
                            تواصل معنا
                        </h3>
                    </div>
                    <div
                        class="col-md-6 align-self-center"
                        :class="
                            $store.state.lang === 'ar'
                                ? 'text-right'
                                : 'text-left'
                        "
                    >
                        <div
                            class="contact-image"
                            :class="mobile ? 'mobile' : ''"
                        >
                            <img
                                src="/img/Mask2.png"
                                alt="Mask2"
                                class="img-fluid right-img"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'About',
    data() {
        return {
            mobile: null
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

    }
}
</script>

<style lang="scss" scoped>
.contact-us {
    width: 100%;
    background-color: #63c47f;
    height: 100% !important;
    @media (max-width: 768px) {
        padding: 100px 0 50px;
    }
    &.mobile {
        padding: 400px 0;
    }
    .title {
        //font-size: 96px;
        &.mobile {
            font-size: 78px;
            text-align: center;
        }
    }
    .contact-image {
        &:after {
            content: '';
            background-image: url('/img/Mask1.png');
            width: 143px;
            height: 91px;
            position: absolute;
            background-repeat: no-repeat;
            left: 285px;
            top: 104px;
            transition: all 1s ease;
            z-index: 9996666;
            transform: rotate(0deg);
            // animation: smallImage 2.5s infinite ease;
        }
        &.mobile {
            &:after {
                left: 50px;
            }
        }
    }
    img.right-img {
        transition: 0.3s ease;
    }
    &:hover {
        .contact-image::after {
            left: 0;
            top: 200px;
            transform: rotate(-60deg);
        }
        .contact-image.mobile::after {
            left: 0;
            top: 100px;
            transform: rotate(-40deg);
        }
    }
}
</style>
