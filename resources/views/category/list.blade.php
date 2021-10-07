<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Owner</th>
        <th>Controls</th>
        <th>Created_at</th>
    </tr>
    </thead>
    <tbody>

    @forelse(\App\Category::with("user")->get() as $category)
        <tr>
            <td >{{ $category->id }}</td>
            <td >{{ $category->title }}</td>
            <td >{{ $category->user->name }}</td>
            <td >

                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-primary">
                    Edit
                </a>
                <form action="{{ route('category.destroy',$category->id) }}" class="d-inline-block" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger" onclick="return confirm('Are U sure to delete {{ $category->title }} category?')">Delete</button>
                </form>

            </td>
            <td >
                <span class="small">
                    <i class="feather-calendar"></i>
                    {{ $category->created_at->format("d-m-Y") }}
                </span>
                <br>
                <span class="small">
                    <i class="feather-clock"></i>
                    {{ $category->created_at->format("h:i A") }}
                </span>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">There is no Category</td>
        </tr>
    @endforelse

    </tbody>
</table>
