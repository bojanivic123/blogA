<div class="col">
    <div class="card shadow-sm">
      <div class="card-body">
        <p class="card-text">{{ $post->body }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/posts/{{ $post->id }}">View post</a></button> 
          </div>
        </div>
      </div>
    </div>
</div>
