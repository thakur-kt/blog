<template>
  <div>
    <p>Home page</p>
    <button @click="login">Login</button>
    <button @click="profile">Profile</button>
  </div>
</template>
<script>
export default {
  mounted() {},
  data() {
    return {};
  },
  methods: {
    login() {
      axios.get("/sanctum/csrf-cookie").then((response) => {
        axios.get("/api/auth/login").then((response) => {
          console.log(response);
        });
      });
    },
    profile() {
      axios.get("/api/me").then((response) => {
        console.log(response.data.token);
        // localStorage.setItem("access_token", response.data.token);
      });
    },
  },
};
</script>
