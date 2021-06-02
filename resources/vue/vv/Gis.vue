<template>
  <h3>Employee Area of Assignment</h3>
  <div id="map" style="min-height: 500px;">
  </div>
</template>

<script>
import { mapGetters, mapState } from "vuex";

var mapboxcss = require('mapbox-gl/dist/mapbox-gl.css');

export default {
  name: "gis",
  computed: {
    ...mapGetters(['geoDepartments'])
  },
  mounted() {
    // get geodata
    this.fetchGeoDepartments()
  },
  methods: {
    fetchGeoDepartments() {
      this.$store.dispatch('fetchGeoDepartments')
    },
    
  }
};


</script>