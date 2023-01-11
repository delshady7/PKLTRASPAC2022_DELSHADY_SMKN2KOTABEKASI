<template>
  <div class="home" style="height: 100vh">
    <div class="title" style="margin-top: 80px">
      <center>Dad Jokes</center>
    </div>
    <div class="search" style="margin-top: 70px">
      <v-container>
        <center>
          <v-card
            color="lighten-4"
            flat
            height="140px"
            style="background-color: #d9d9d9"
          >
            <v-toolbar>
              <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
              </v-btn>
              <v-text-field
                v-model="sb"
                placeholder="Search a Dad Jokes"
                style="border-radius: 56px"
              ></v-text-field>
            </v-toolbar>
          </v-card>
        </center>
      </v-container>
    </div>
    <div v-if="sb === null || sb === ''">
      <center>
        <p>Data not Available</p>
      </center>
    </div>
    <div v-else>
      <div>
        <h2>Result: {{ itemResult.length }}</h2>
      </div>
      <div v-for="item in itemResult" :key="item">
        <v-container>
          <v-card
            height="120px"
            style="background-color: #ffff; border-radius: 16px"
          >
            <v-card-text>
              {{ item }}
            </v-card-text>
          </v-card>
          <br />
        </v-container>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "IndexPage",
  data: () => ({
    sb: null,
    itemResult: [
      "Did you hear the one about the guy with the broken hearing aid? Neither did he.",
      "Did you hear the one about the guy with the broken hearing aid? Neither did he.",
      "Did you hear the one about the guy with the broken hearing aid? Neither did he.",
      "Did you hear the one about the guy with the broken hearing aid? Neither did he.",
    ],
  }),
};
</script>

<style>
.home {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  background-color: #d9d9d9;
}
.home h2 {
  font-size: 16px;
  margin-left: 100px;
}
.title {
  font-size: 35px;
}
.search {
  background-color: #d9d9d9;
}
</style>
