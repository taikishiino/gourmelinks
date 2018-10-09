<template>
    <form @submit.prevent="register" autocomplete="off">
        <div class="field">
            <label class="label">Emailアドレス</label>
            <div class="control">
                <input type="email" v-model="email" placeholder="Email" class="input" required>
            </div>
        </div>
        <div class="field">
            <label class="label">パスワード</label>
            <div class="control">
                <input type="password" v-model="password" placeholder="Password" class="input" required>
            </div>
        </div>
        <div class="field">
            <label class="label">ユーザーID</label>
            <p class="help">半角英数字6桁以上（ユーザーページのURLに使用します）</p>
            <div class="control has-icons-left">
                <input type="user_id" v-model="user_id" placeholder="userid" class="input" required>
                <span class="icon is-small is-left">@</span>
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
    import { firebase } from '../../js/firebase'
    const db = firebase.firestore();
    // dbのtimestampを設定
    db.settings({
        timestampsInSnapshots: true
    });

    export default {
        name: 'Regist',
        data() {
            return {
                email: '',
                password: '',
                uid: '',
                user_id: ''
            }
        },
        methods: {
            register () {
                firebase.auth().createUserWithEmailAndPassword(this.email, this.password)
                    .then( () => {
                        firebase.auth().onAuthStateChanged( user => {
                            db.collection('reporters').add({
                                uid: user.uid,
                                userid: this.user_id,
                                name: '',
                                twitter: '',
                                instagram: '',
                                facebook: '',
                                comment: '',
                                img_url: '',
                                created: firebase.firestore.FieldValue.serverTimestamp()
                            })
                                .then( doc => {
                                    alert(`${doc.id}で新しいreporterを保存しました！`);
                                    location.href = 'reporters/' + this.user_id;
                                    this.uid = '';
                                    this.user_id = '';
                                    this.email = '';
                                    this.password = '';
                                })
                                .catch( error => {
                                    alert(error.message);
                                    this.user_id = '';
                                    this.password = '';
                                });
                        });
                    })
                    .catch(error => {
                        alert(error.message + 'm(_ _)m');
                        this.user_id = '';
                        this.password = '';
                    });
            }
        }
    }
</script>
