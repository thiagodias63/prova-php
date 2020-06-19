import UserService from '@/services/UserService'
import { mapActions, mapGetters } from 'vuex'
export default {
    data() {
        return {
            pages: 1,
            actualPage: 1,
            actualUser: {
                name: '-',
                phone: '-',
                email: '-',
                birth: '-',
            }
        }
    },
    computed: {
        ...mapGetters({users: 'getUsers'})
    },
    methods: {
        ...mapActions([
            'setUsers'
        ]),
        buscarUsuarios() {
            UserService.findAll().then(response => {
                this.pages = response.data.users.length;
                if (response.data.status) {
                    this.setUsers(response.data.users);
                    this.changeActualUser(0)
                }
            })
        },
        changeActualUser(page) {
            this.actualPage = page
            this.actualUser = this.users[page] || this.actualUser
        }
    },
    created() {
        this.buscarUsuarios();
    }
}