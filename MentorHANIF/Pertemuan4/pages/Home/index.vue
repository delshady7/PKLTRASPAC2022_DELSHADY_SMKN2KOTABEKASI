<template>
  <div class="home">
    <Header />
    <Content v-on:novel="sayHalow" />
    <div>Ceritanya ini parent component</div>
    <childComponent text="Ini buat isi text props" />
  </div>
  <!-- <div class="content">
    
  </div> -->
</template>
<script>
export default{
  methods: {
   sayHalow: function() {
     alert('Halowwwww')
   }
 },
}
// 
</script>


