<template>
    <div>
      <h2>Login</h2>
      <form @submit.prevent="loginUser">
        <input v-model="email" type="email" placeholder="Email" required><br>
        <input v-model="password" type="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        email: '',
        password: '',
      };
    },
    methods: {
      async loginUser() {
        try {
          const response = await fetch('http://your-api-domain/api/login', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              email: this.email,
              password: this.password,
            }),
          });
  
          if (response.ok) {
            // Handle successful login
            const userData = await response.json();
            console.log('Logged in:', userData);
          } else {
            // Handle login failure
            console.error('Login failed');
          }
        } catch (error) {
          console.error('Error:', error);
        }
      },
    },
  };
  </script>
  
  <style>
  /* Add your CSS styles here if needed */
  </style>
  