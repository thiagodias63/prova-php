import axios from 'axios'
const link = 'http://localhost:8000/api/user'
const findAll = () => {
    return axios.get(`${link}`);
}

const signIn = (user) => {
    return axios.post(`${link}`, {user});
}

export default { 
    findAll,
    signIn
}