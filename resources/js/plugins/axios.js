import axios from 'axios'

// let tkn = "";
// if (localStorage.getItem('world_tkn')) {
//     tkn = JSON.parse(localStorage.getItem('world_tkn'))
//     axios.defaults.headers.common = {
//         "Authorization": "Bearer " + tkn
//     }
// }

// axios.interceptors.response.use(resp => {
//     return resp;
// }, (error) => {
//     console.log(error);
//     if (error.response.status == 401) {
//         // router.replace('/logout')
//     }
//     return Promise.reject(error.response);
// })

export default axios;