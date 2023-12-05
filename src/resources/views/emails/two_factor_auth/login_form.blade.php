@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
@endsection

@section('content')
    <div id="app" class="p-5">
        <div class="flash_message" v-if="message" v-text="message"></div>

        <!-- １段階目のログインフォーム -->
        <div v-if="step==1" class="login__content">
            <div class="login__group-title">
                <h2>Login: two-factor authentication</h2>
            </div>
            <div class="login__form-content">
                <div class="form__email-text">
                    <input type="text" v-model="email" placeholder="Email">
                </div>
                <div class="form__pwd-text">
                    <input type="password" v-model="password" placeholder="Password">
                </div>
                <button type="button" class="form__button-login" @click="firstAuth">二段階認証を用いてログイン</button>
            </div>
        </div>

        <!-- ２段階目 -->
        <div v-if="step==2" class="login__content">
            <div class="login__group-title">
                <h2>Login: two-factor authentication</h2>
            </div>
            <div class="login__form-content">
                ２段階認証のパスワードをメールアドレスに送信しました。（有効時間：10分間）
                <hr>
                <div class="form__pwd-text">
                    <label>２段階パスワード</label>
                    <input type="text" v-model="token">
                </div>
                <button type="button" class="form__button-login" @click="secondAuth">送信する</button>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                step: 1,
                email: '',
                password: '',
                token: '',
                userId: -1,
                message: ''
            },
            methods: {
                firstAuth() {
                    this.message = '';
                    const url = '/ajax/two_factor_auth/first_auth';
                    const params = {
                        email: this.email,
                        password: this.password
                    };
                    axios.post(url, params)
                        .then(response => {
                            const result = response.data.result;
                            if(result) {
                                this.userId = response.data.user_id;
                                this.step = 2;
                            } else {
                                this.message = 'ログイン情報が間違っています。';
                            }
                        });
                },
                secondAuth() {
                    const url = '/ajax/two_factor_auth/second_auth';
                    const params = {
                        user_id: this.userId,
                        tfa_token: this.token
                    };
                    axios.post(url, params)
                        .then(response => {
                            const result = response.data.result;
                            if(result) {
                                // ２段階認証成功
                                location.href = '/';
                            } else {
                                this.message = '２段階パスワードが正しくありません。';
                                this.token = '';
                            }
                        });
                }
            }
        });
    </script>
</body>
@endsection