<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
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
                    <div><h5 class="fw-bold">Blog Edit</h5></div>
                    <div class="mssg position-fixed top-6 start-50 translate-middle-x h-5 w-1/4 z-50">
                        <div class="mssg">
                            @if(session('flash_mssg'))
                                <div id="flashMessage" class="alert alert-primary" role="alert">
                                    <p>{{ session('flash_mssg') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <form action="{{ url('admin/update-blog/'. $blogs->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="d-flex">
                                    <div class="input-group mb-3 mr-2">
                                        <input type="text" name="title" class="form-control" id="" placeholder="Title" value="{{$blogs->title}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="author" class="form-control" id="" placeholder="Author" value="{{$blogs->author}}">
                                    </div>
                            </div>
                            <div class="input-group mb-3">
                                <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Conent">{{$blogs->content}}</textarea>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect01" name="category">
                                    <option selected>{{$blogs->catergory}}</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Project">Project</option>
                                    <option value="Cybersec">Cybersec</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="status" class="form-control" id="" placeholder="Status" value="{{$blogs->status}}">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" name="image" class="form-control" id="" placeholder="Status">
                            </div>
                            
                        </div>
                        <div class="text-end justify-content-between">
                                
                            <button type="submit" class="btn btn-success">Update Blog</button>
                        </form>
                        <a href="/admin/blogs" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
