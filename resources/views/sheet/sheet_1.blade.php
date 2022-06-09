<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> 
    
</head>
<body>
    

<section class="columns">
    <form action="{{route('blog_com') }}" method="post" class="column  is-offset-4 is-5">
		@csrf
        
            <label for="">Author</label>
            <input type="text" class="input"name="author">

            <label for="">Reviews</label>
            <textarea name="reviews" id="" cols="30" rows="10" class="textarea"></textarea>

            <!-- <label for="">Comment from Users </label> -->
            <!-- <textarea name="c" id="" cols="30" rows="10" class="textarea"></textarea> -->

            <label for="">content </label>
            <textarea name="content" id="" cols="30" rows="10" class="textarea"></textarea>

            <label for="">Year </label>
            <input type="text" class="input"name="year">
            <button class="button is-primary mt-4"> Submit Content</button>
    </form>
</section>








</body>
</html>