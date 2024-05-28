<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
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
                                <tr class="text-center">
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Content</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class=""> 
                                @if ($blogs->isEmpty())
                                    <tr class="border-b">
                                        <td colspan="6">No Record Found</td>
                                    </tr>
                                @else
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->author}}</td>
                                    <td>content</td>
                                    <td>{{$blog->catergory}}</td>
                                    <td>{{$blog->status}}</td>
                                    <td>{{$blog->created_at}}</td>
                                    <td class="d-flex justify-center">
                                        <a href="{{url('admin/edit-blog/'. $blog->id)}}" class="btn btn-success">Update</a>
                                        <form method="POST" action="{{ route('blog.destroy', $blog->id) }}" class="ms-2">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" data-delete-url="{{ route('blog.destroy', $blog->id) }}" title="Delete Transmittal Record">Remove</button>
                                        </form>
                                    </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/add-blog" method="POST" enctype="multipart/form-data">
                    @csrf
                   <div class="d-flex">
                        <div class="input-group mb-3 mr-2">
                            <input type="text" name="title" class="form-control" id="" placeholder="Title">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="author" class="form-control" id="" placeholder="Author">
                        </div>
                   </div>
                   <div class="input-group mb-3">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Conent"></textarea>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name="category">
                        <option value="Internship">Internship</option>
                        <option value="Project">Project</option>
                        <option value="Cybersec">Cybersec</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="status" class="form-control" id="" placeholder="Status">
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" id="" placeholder="Status">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
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
