<template>
  <div style="width: 100%; overflow: auto;">
    <RwvEmployeeList />
  </div>
</template>

<script>
import RwvEmployeeList from "../components/EmployeeList";

export default {
  name: "employees",
  components: {
    RwvEmployeeList
  }
};
</script>