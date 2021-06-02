<template>
  <div id="app" class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <RwvHeader />
    <main class="mdl-layout__content mdl-color--grey-100">
      <router-view></router-view>
    </main>
    <RwvFooter />
  </div>
</template>

<script>
import RwvHeader from "./components/AppHeader";
import RwvFooter from "./components/AppFooter";
export default {
  name: "App",
  components: {
    RwvHeader,
    RwvFooter
  }
};
</script>

<style></style>