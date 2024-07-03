<div class="container mt-5">
    <form action="{{ url('createcomment') }}" method="POST">
        @csrf
        <h4>Add your comment</h4>
        <div class="mb-3">
            <textarea class="form-control" type="text" name="content" placeholder="Enter your comment" required></textarea>
            <input type="hidden" value="{{ $post->id }}" name="post_id" required />
        </div>
        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary mb-4">Create Comment</button>
        </div>
    </form>

    @include('components.errors')
    @include('components.status')
</div>


