<template>
    <div>
    <div> Yang ini Child Component </div>
    <div> {{ text }} </div>
    </div>
</template>

<script>
export default{
    props: {
        text: {
            type: String,
            default: 'ini props'
        },
    },
};
</script>