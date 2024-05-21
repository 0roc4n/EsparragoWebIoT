<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mssg position-fixed top-6 start-50 translate-middle-x h-5 w-1/4 z-50">
            <div class="mssg">
                @if(session('flash_mssg'))
                    <div id="flashMessage" class="alert alert-primary" role="alert">
                        <p>{{ session('flash_mssg') }}</p>
                    </div>
                @endif
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div><h5 class="fw-bold">Blog List</h5></div>
                    <div class="text-end"><a href="blog-add" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</a></div>
                    <div class="text-center">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class=""> 
                                @if ($projects->isEmpty())
                                    <tr class="border-b">
                                        <td colspan="6">No Record Found</td>
                                        <td colspan="6">No Record Found</td>
                                        <td colspan="6">No Record Found</td>
                                        <td colspan="6">No Record Found</td>
                                        <td colspan="6">No Record Found</td>
                                    </tr>
                                @else
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>{{$project->catergory}}</td>
                                    <td>{{$project->img_path}}</td>
                                    <td class="btn btn-primary">View</td>
                                </tr>
                                @endforeach
                               @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/add-project" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name of Project</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="........">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="........">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" name="img_path" id="formFile">
                      </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Project</button>
                    </div>
                 </form>
          </div>
        </div>
      </div>
    <script>
     $(document).ready(function() {
        $('#example').dataTable();

    } );
    </script>
</x-app-layout>
