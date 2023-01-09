<template>
<div class="home">
<div class="judul-content">
    <h2>Home</h2>
<div class="isi-content">
    <div>
        <h4>Genre Novel</h4>
        <ul>
            <li v-for="jns of jenis" :key="jns">{{ jns }}</li>
        </ul>
    </div>
    <div class="button">
        <button @click="$emit('novel')">Click Me</button>
        <br><br>
    </div>
</div>
</div>
</div>
</template>
<style>
.judul-content{
    margin-top: 20px;
    margin-left: 20px;
    font-family: 'Poppins', sans serif;
    font-weight: 900;;
    font-size: 20px;
}
</style>

<script>
export default{
    name: 'Content',
    data() {
        return{
            jenis: ['Romance', 'Slice of life', 'Angst']
        }
    },
};

</script>