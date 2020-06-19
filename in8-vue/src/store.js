
export const store = {
    state: {
      users: [],
    },
    mutations: {
      setUsersState (state, users) {
        state.users = users
      }
    },
    actions: {
      setUsers: ({commit}, users) => {
        commit('setUsersState', users)
      },
    },
    getters: {
      getUsers: state => {
        return state.users
      },
    }
  }