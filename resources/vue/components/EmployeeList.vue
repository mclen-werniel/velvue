<template>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" >
        <col>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <tr>
            
            <th colspan="3"></th>
            <th colspan="2" scope="colgroup">First Year</th>
            <th colspan="2" scope="colgroup">Second Year</th>
            <th colspan="2" scope="colgroup">Third Year</th>
            <th colspan="2" scope="colgroup">Total Share</th>
        </tr>
        <tr>
            <th>Employee Name</th>
            <th>Department</th>
            <th>Position</th>
            <th scope="col">Min Share Value</th>
            <th scope="col">Max Share Value</th>
            <th scope="col">Min Share Value</th>
            <th scope="col">Max Share Value</th>
            <th scope="col">Min Share Value</th>
            <th scope="col">Max Share Value</th>
            <th scope="col">Min Share Value</th>
            <th scope="col">Max Share Value</th>
        </tr>
        <tr v-for="(employee, index) in employees">
            <td>{{ employee.fname }} {{ employee.lname }}</td>
            <td>{{ employee.department[0].name }}</td>
            <td>{{ employee.position[0].name }}</td>
            <td>{{ employee.projected_share_values.first_year.min }}</td>
            <td>{{ employee.projected_share_values.first_year.max }}</td>
            <td>{{ employee.projected_share_values.second_year.min }}</td>
            <td>{{ employee.projected_share_values.second_year.max }}</td>
            <td>{{ employee.projected_share_values.third_year.min }}</td>
            <td>{{ employee.projected_share_values.third_year.max }}</td>
            <td>{{ employee.projected_share_values.total_value.min.toLocaleString() }}</td>
            <td>{{ employee.projected_share_values.total_value.max.toLocaleString() }}</td>
            
        </tr>
    </table>
    
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "RwvEmployeeList",
  computed: {
      ...mapGetters(["employees"])
  },
  mounted() {
      this.fetchEmployees();
  },
  methods: {
      fetchEmployees() {
          this.$store.dispatch('fetchEmployees')
      }
  }
};
</script>