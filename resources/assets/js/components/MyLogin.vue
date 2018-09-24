<template>
    <div>
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input type="email" v-model="email" placeholder="Email" class="input" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input type="password" v-model="password" placeholder="Password" class="input" required>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button @click="signIn" class="button">ログイン</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Login',
        data() {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            signIn () {
                firebase.auth().signInWithEmailAndPassword(this.email, this.password)
                    .then( () => {
                        firebase.auth().onAuthStateChanged( user => {
                            alert('logined!! UserId: ' + user.uid + 'Email: ' + user.email);
                            location.href = "/";
                        });
                    })
                    .catch(error => {
                        alert(error.message + 'm(_ _)m')
                    });
            }
        }
    }
</script>