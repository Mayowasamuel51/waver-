<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> 
</head>
<body>
@foreach($content as $users)
    
<div class="columns">
    <table class="table  column is-offset-3 is-5">
        <tr>
            <th>Author</th>
            <th>Reviews</th>
            <th>Year</th>
            <th>content</th>
        </tr>
        <tr>
            <td>{{$users->author}}</td>
            <td>{{$users->reviews}}</td>
            <td>{{$users->year}}</td>
            <td>{{$users->content}}</td>

        </tr>
    </table>
</div>
    

@endforeach
</body>
</html>