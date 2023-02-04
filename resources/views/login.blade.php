@include('link.bootstrap')

@if (session('status'))
                <h6 class="alert alert-danger">{!! session('status') !!}</h6>
            @endif

<div class="row mt-5">
    <div class="col-3"></div>
    <div class="col-6">
        <form name="login-form" id="login-form" method="post" action="dashboard">
        @csrf
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Login Details</h3>
                </div>
                <div class="card-body mb-5 mt-5">
                    <div class="row mb-3">
                        <div class="col-3 ps-5">
                            Email
                        </div>
                        <div class="col-9">
                            <input size="50" type="text" id="email" name="email" placeholder="Enter your email"/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 ps-5">
                            Username
                        </div>
                        <div class="col-9">
                            <input size="50" type="text" id="username" name="username" placeholder="Enter your username"/>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-3 ps-5">
                            Password
                        </div>
                        <div class="col-9">
                            <input size="50" type="password" id="password" name="password" placeholder="Enter your password"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <a class="btn btn-warning" href="/signup">Dont have account? Sign up here</a>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary border-60" type="submit">Login</button>                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>