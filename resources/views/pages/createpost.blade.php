@extends("layout.default")

@section("content")
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4">
            <form action="{{ url("createpost") }}" method="POST">
                @csrf
                <h1 class="text-center mb-4">Create new post</h1>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input class="form-control" type="text" name="title" required />
                </div>
                <div class="mb-3">
                    <label class="form-label">Body</label>
                    <textarea class="form-control" type="text" name="body" required></textarea>
                </div> 
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>

    @include("components.errors")
    @include("components.status")
@endsection

