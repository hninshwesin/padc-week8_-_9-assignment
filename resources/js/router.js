import Login from './components/LoginForm.vue';
import PostList from './components/PostList.vue';


export default [
    {
        path: '/vue/login',
        name: 'login',
        component: Login
    },
    {
        path: '/vue/posts',
        name: 'posts',
        component: PostList,
    },

]