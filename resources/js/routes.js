import NotFound from './components/NotFound';
// import Home from './components/Home';
let Home = () =>
    import(/* webpackChunkName: "hello.bundle" */ './components/Home');
let LoadersAndAnimations = () =>
    import(/* webpackChunkName: "loaders-and-animations.bundle" */ './components/Dynamic');

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/home',
            component: Home,
            name: 'homes'
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        }
    ]
};