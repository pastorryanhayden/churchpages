<template>
    <section class="preview-section">
        <hero-section :hero="hero" :info="info" v-if="show == 'hero' || show == 'all'"></hero-section>
        <mission-section :mission="message" v-if="show == 'message' || show == 'all'"></mission-section>
        <pastor-section :pastor="pastor" v-if="show == 'pastor' || show == 'all'"></pastor-section>
        <testimonials-section :testimonials="testimonials" v-if="show == 'testimonials' || show == 'all'"></testimonials-section>
        <visit-section :visit="visit" v-if="show == 'visit' || show == 'all'"></visit-section>
    </section>
</template>

<script>
    import heroSection from "./preview/hero-section";
    import missionSection from "./preview/mission-section";
    import pastorSection from "./preview/pastor-section";
    import testimonialsSection from "./preview/testimonials-section";
    import visitSection from "./preview/visit-section"
    export default {
        props: ['hero', 'info','show', 'message'],
        components: {
            heroSection,
            missionSection,
            pastorSection,
            testimonialsSection,
            visitSection
        }
    }

</script>
