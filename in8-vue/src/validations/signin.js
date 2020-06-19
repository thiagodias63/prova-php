// minLength,email
import { required, email, maxLength  } from 'vuelidate/lib/validators'
export default {
    user: {
        name: {
            required
        },
        phone: {
            required,
            maxLength: 14
        },
        birth: {
            required
        },
        email: {
            required,
            email,
            maxLength: 120
        }
    }
}