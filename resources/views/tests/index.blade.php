<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tests.css') }}">
</head>
<body>
    <div class="table_component" role="region" tabindex="0">
        <table>
            <caption>Table 1</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tests as $test)
                    <tr>
                        <td>{{ $test->id }}</td>
                        <td>{{ $test->name }}</td>
                        <td>{{ $test->created_at }}</td>
                        <td>{{ $test->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
    </div>
</body>
</html>