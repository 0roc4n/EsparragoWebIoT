<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="mssg position-fixed top-6 start-50 translate-middle-x h-5 w-1/4 z-50">
            <div class="mssg">
                @if(session('flash_mssg'))
                    <div id="flashMessage" class="alert alert-primary" role="alert">
                        <p>{{ session('flash_mssg') }}</p>
                    </div>
                @endif
            </div>
        </div> --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div><h5 class="fw-bold">Project List</h5></div>
                    <div class="text-center">
                        <form action="{{ url('admin/update-project/'. $project->id)}}" method="POST" enctype="multipart/form-data" class="text-start">
                            @csrf
                            @method("PATCH")
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name of Project</label>
                                <input type="text" value="{{$project->name}}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="........">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                                <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3">{{$project->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Category</label>
                                <input type="text" value="{{$project->category}}" name="category" class="form-control" id="exampleFormControlInput1" placeholder="........">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <div class="row">
                                   <div class="col-5">
                                    <p>Current Image</p>
                                    <input class="form-control" type="file" name="img_path" id="formFile">
                                   </div>
                                   <div class="col">
                                    <img src="/projects-images/{{$project->img_path}}" alt="" class="shadow rounded" style="width: 25rem">
                                   </div>
                                </div>
                                

                              </div>
                        
                            </div>
                            <div class="text-end justify-content-between">
                               
                                <button type="submit" class="btn btn-success">Add Project</button>
                            </form>
                            <a href="/admin/projects" class="btn btn-danger">Cancel</a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
