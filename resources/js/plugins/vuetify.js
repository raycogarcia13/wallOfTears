import Vue from 'vue'
import Vuetify from 'vuetify/lib'


Vue.use(Vuetify)

const opts = {
    theme: {
        themes: {
            light: {}
        }
    },
    icons: {
        iconfont: 'mdi',
    },
}


/**
colores 

    #f8f7f5  gris casi blanco
    #00a2ad  azul base
    #014656  azul oscuro
    #fdd65d  amarillo clarito
    #f6a800  amarrillo mas oscuro
 */

export default new Vuetify(opts);