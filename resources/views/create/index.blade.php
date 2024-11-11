<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @forelse($create as $create)
            <li>{{ $create->tilte }}</li>
        @empty
            <p>No data</p>
        @endforelse
    </ul>
    <form action="">
        <input type="text" id="CourseName">
        <input type="text" id="CourseDesc">
        <input type="submit">
    </form>
</body>
</html>
