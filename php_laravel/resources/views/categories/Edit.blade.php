<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhập danh mục: {{$category->name}}</title>
</head>

<body>
    <h1>Cập nhập danh mục: {{$category->name}}</h1>

    {{-- hiển thị thông báo --}}
    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif

    {{-- lấy ra tên của đường dẫn vói method là post --}}
    <form action="{{ route('categories.update', $category ) }}" method="post">
        {{-- @csrf chống lỗi dedot  --}}
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$category->name}}">
        <button type="submit">save</button>
    </form>
</body>

</html>
