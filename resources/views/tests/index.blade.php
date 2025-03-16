<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tests.css') }}">
</head>
<body>
    <div class="container mt-4">
        <div class="table-responsive" role="region" tabindex="0">
            <table class="table table-striped table-bordered">
                <caption>Table 1</caption>
                <thead class="table-dark">
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
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
