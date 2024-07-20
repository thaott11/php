<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách danh mục</title>
</head>

<body>
    <h1>Danh sách danh mục</h1>
    <a href="{{ route('categories.create') }}">Thêm mới</a>

    {{--  hiển thị thông báo index --}}
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif

    {{-- tạo bảng --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <!-- action -->
                        <a href="{{ route('categories.show', $item) }}">Show</a>
                        <a href="{{ route('categories.edit', $item) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $item) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm ('bạn có muốn xóa không')">delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- phân trang -->
    <div>
        {{ $data->links() }}
    </div>
</body>

</html>
