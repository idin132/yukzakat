<form method="POST" action="{{ route('actionloginFE') }}">
    @csrf
    <div class="base-login">
        <div class="kontener">
    <link rel="stylesheet" href="{{asset('css/frontend.css')}}">
            <div class="login-logo" style="flex-direction:column">
                <img style="max-width:25vh;max-height:20vh" src="images/logo_head_zakat.png" alt="" />
            </div>
            <div class="form-login">
                <h3 style="font-weight:bold">Login</h3>
                <br />
                <input id="username" type="text" placeholder="Username"
                    class="form-control @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}"
                    required autocomplete="username" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br />
                <input id="password" type="password" placeholder="Password"form-control
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br />
                <div style="display:flex;color:blue;justify-content:space-between;width:100%;margin-bottom:20px">
                <a class="btn btn-link" href="">
                    <label style="color:#65FFDC;cursor:pointer;">Lupa Password</label>
                </a>
                <a class="btn btn-link" href="register">
                    <label style="color:#65FFDC;cursor:pointer;">Register</label>
                </a>
            </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
