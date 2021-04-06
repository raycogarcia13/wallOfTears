import Vue from 'vue'
import toolbar from '../components/toolbar'
import footer from '../components/footer'

const Components = {

    install(Vue, options) {
        Vue.component('Toolbar', toolbar)
        Vue.component('Footer', footer)
    }

}

Vue.use(Components)

export default Components