<div class="base-login">
    <div class="container123">
        <link rel="stylesheet" href="{{asset('css/frontend.css')}}">
        <div class="register-logo" style="flex-direction:column">
            <img style="max-width:25vh;max-height:20vh" src="images/logo_head_zakat.png" alt="" />
        </div>
        <div class="form-register">
            <h3 style="font-weight:bold">Register</h3>
            <br />
            <form action="{{ route('registrasi.store') }}" method="post">
                            @csrf
            <div class="form-group">
                <label for="name"></label>
                <input type="text"  placeholder="Nama Lengkap" class="form-control" id="name" name="name">
            </div>
            <br />
            <div class="form-group">
                <label for="email"></label>
                <input type="text"  placeholder="Email" class="form-control" id="email" name="email">
            </div>
            <br />
            <div class="form-group">
                <label for="no_hp"></label>
                <input type="text"  placeholder="Nomor Handphone" class="form-control" id="no_hp" name="no_hp">
            </div>
            <br />
            <div class="form-group">
                <label for="alamat"></label>
                <input type="text"  placeholder="Alamat Rumah" class="form-control" id="alamat" name="alamat">
            </div>
            <br />
            <div class="form-group">
                <label for="username"></label>
                <input type="text"  placeholder="Username" class="form-control" id="username" name="username">
            </div>
            <br />
            <div class="form-group">
                <label for="password"></label>
                <input type="text"  placeholder="Password" class="form-control" id="password" name="password">
            </div>
            <br />
            <div style="display:flex;color:blue;justify-content:space-between;width:100%;margin-bottom:20px">
                <a class="btn btn-link" href="">
                    <label style="color:#65FFDC;cursor:pointer;">Lupa Password</label>
                </a>
                <a class="btn btn-link" href="login">
                    <label style="color:#65FFDC;cursor:pointer;">Login</label>
                </a>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>