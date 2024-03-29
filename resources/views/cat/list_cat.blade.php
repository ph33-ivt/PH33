<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    List Cat
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Age</td>
                            <td>Breed ID</td>
                            <td>Created At</td>
                            <td>Updated At</td>
                            <td>Deleted At</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listCats as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->age }}</td>
                                <td>{{ $cat->breed_id }}</td>
                                <td>{{ $cat->created_at }}</td>
                                <td>{{ $cat->updated_at }}</td>
                                <td>{{ $cat->deleted_at }}</td>
                                <td><a href="{{route('delete-cat', $cat->id) }}">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </body>
</html>
