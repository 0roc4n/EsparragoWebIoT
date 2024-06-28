<div class="container py-5 mt-5">
    <div class="content px-5 pb-5">
        <h2 class="border-bottom border-5">Blogs</h2>
        <div class="row mt-5 ms-5">
            @foreach ($blogs->reverse() as $index => $blog)
                <!-- Start a new row for every three items -->
                @if ($index % 3 == 0 && $index != 0)
                    </div><div class="row mt-5 ms-5">
                @endif
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card shadow" style="width: 100%;">
                        <img src="blog-images/{{$blog->img_path}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text flex-grow-1">{{ \Illuminate\Support\Str::limit($blog->content, 100, '...') }}</p>
                            <a href="/blogs/{{$blog->id}}" class="btn btn-primary mt-auto">Read blog</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  </div>
  