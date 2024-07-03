@extends("layout.default")

@section("content")
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4">
            <form action="{{ url("login") }}" method="POST">
                @csrf
                <h1 class="mb-4 text-center">Login</h1>
                <p class="text-center">Sign in to your account.</p>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" required />
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    @include("components.errors")
    @include("components.status")
@endsection

