<div class="container py-5 mt-5">
  <div class="content px-5 pb-5">
    <h2 class="border-bottom border-5">Projects</h2>
    <div class="flex flex-wrap mt-10 gap-3 justify-center">
      @foreach ($projects as $project)
      <div class="bg-gray-300 w-full sm:w-full md:w-full lg:w-5/12 rounded-xl p-5 shadow-lg">
        <img src="" alt="">
        <h5>Project Title: <span class="fw-bold">{{$project->name}}</span> || {{$project->category}}</h5><span>{{$project->created_at}}</span>
        <div>
          <img src="projects-images/{{$project->img_path}}" class="rounded-xl" alt="">
        </div>
        <div class="mt-10">
          <p>Description:</p>
          <p>
            {{$project->description}}
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
