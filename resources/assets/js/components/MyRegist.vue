<template>
    <form @submit.prevent="register" autocomplete="off">
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
                <button type="submit" class="button is-link">新規登録する</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: 'Regist',
        methods: {
            register () {
                firebase.auth().createUserWithEmailAndPassword(this.email, this.password)
                this.email = '',
                this.password = '',
                location.href = "/login"
            },
            signOut () {
                firebase.auth().signOut()
            },
            signIn () {
                firebase.auth().signInWithEmailAndPassword(this.email, this.password)
            }
        }
    }
</script>
