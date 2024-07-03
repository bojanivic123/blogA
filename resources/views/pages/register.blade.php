@extends("layout.default")


@section("content")
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4">
            <form action="{{ url("register") }}" method="POST">
                @csrf
                <h1 class="text-center mb-4">Register</h1>
                <p class="text-center">Create your account.</p>
                <div class="mb-3">
                    <label class="form-label">First name</label>
                    <input class="form-control" type="text" name="first_name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Last name</label>
                    <input class="form-control" type="text" name="last_name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm password</label>
                    <input class="form-control" type="password" name="password_confirmation" required />
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

    @include("components.errors")
    @include("components.status")
@endsection

