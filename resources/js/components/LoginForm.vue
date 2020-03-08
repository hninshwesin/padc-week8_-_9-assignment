<template>
  <div>
    <text-input type="email" @my_change='email_change' name="email" label="Email Address :"></text-input>
    <text-input type="password" @my_change='password_change' name="password" label="Password:"></text-input>
    <button class="btn btn-primary" @click="login">Login</button>
  </div>
</template>
<script>
export default {
  data() {
    return {
      email: null,
      password: null,
      login_url : "/api/v1/login/"
    };
  },
  methods: {
    login() {
        const payLoad = {
        email: this.email,
        password: this.password
      };

      axios({
        method: "POST",
        url: this.login_url,
        data: payLoad
      }).then(this.login_hander);
    },
    login_hander(response){
      if(response.data.api_token){
        this.$cookie.set('api_token',response.data.api_token);
        this.$router.push('posts')
      }
      else{
        alert("Fail to login");
      }        
    },
    email_change(content){
      this.email = content;
    },
    password_change(content){
      this.password = content
    }
  }
};
</script>