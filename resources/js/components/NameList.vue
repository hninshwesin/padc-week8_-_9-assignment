<template>
  <div>
    <name-display v-for="(name,index) in names" :key="index" :first_name="name.first_name" :last_name="name.last_name"></name-display>
  </div>
</template>
<script>
export default {
  data() {
    return {
        names : [
          {'first_name' : 'Thet', 'last_name' : 'Hlaing'},
          {'first_name' : 'Mg', 'last_name' : 'Myo'},
          {'first_name' : 'Aung', 'last_name' : 'Than'},
        ]
    }
  }
};
</script>