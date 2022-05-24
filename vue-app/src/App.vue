<template>
  <div id="app">
    <header>
      <div class="d-flex">
        <img src="@/assets/img/logo.png" alt="" />
      </div>
    </header>

    <main>
      <div class="container">
        <div class="row">
          <div
            class="col-2-5"
            :album="disco"
            v-for="(disco, index) in dischi"
            :key="index"
          >
            <img :src="disco.poster" />
            <h3 class="title">
              {{ disco.title }}
            </h3>
            <div class="caption mt-3">{{ disco.author }}</div>
            <div class="caption">{{ disco.year }}</div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "App",

  data() {
    return {
      dischi: null,
    };
  },

  mounted() {
    axios
      .get(
        "http://localhost/php/introphp/php-ajax-dischi/php-ajax-dischi/php/db.php"
      )
      .then((response) => {
        console.log(response.data);
        this.dischi = response.data.response;
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  height: 100vh;
}

header {
  background-color: #2e3a46;

  img {
    width: 40px;
    margin: 0.7rem 1rem;
  }
}

main {
  background-color: #1e2d3b;
  height: 800px;
  padding-top: 3rem;

  .container {
    width: 1200px;
    margin: auto;

    .row {
      display: flex;
      flex-wrap: wrap;
    }
  }
  img {
    max-width: 100%;
  }
  .col-2-5 {
    flex: 0 0 auto;
    width: 13%;
    margin: 1%;
    padding: 25px;
    background-color: #2e3a46;

    .caption {
      text-align: center;
      font-size: 14px;
      color: #807f7f;
      font-weight: 500;
    }
    .title {
      text-align: center;
      color: white;
      font-weight: 500;
      margin-top: 10px;
      text-transform: uppercase;
    }
  }
}
</style>
