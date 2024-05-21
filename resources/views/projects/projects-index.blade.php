<style>
  .carousel-inner img {
    width: 100%;
    height: 500px; /* Adjust this to your preferred height */
    object-fit: cover; /* Ensure the image covers the area without stretching */
  }
</style>

<div class="container py-5 mt-5">
  <div class="content px-5 pb-5">
    <h2 class="border-bottom border-5">Projects</h2>
    <div class="content px-5 pb-5">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          @foreach ($projects as $index => $project)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
          @endforeach
        </div>
        <div class="carousel-inner items-center shadow mt-5 rounded">
          @foreach ($projects as $index => $project)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="/projects-images/{{$project->img_path}}" class="d-block w-100" alt="{{$project->name}}">
            <div class="carousel-caption d-none d-md-block text-black bg-white shadow rounded">
              <h5>Name: {{$project->name}} | Category: {{$project->category}}</h5>
              <p>{{$project->description}}</p>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>
