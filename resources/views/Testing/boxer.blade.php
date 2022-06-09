<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
       
        *{
            box-sizing:border-box;
            margin: 0;
            padding: 0;
        }
        .container{
            width:100%;
            height:100vh;
            background:#3c5077;
            display: flex;
            align-items: center;
            justify-content: center; 
        }
        .btn{
            padding: 10px 60px;
            background:#fff;
            border:0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius:30px;
        }
        .popup{
            width:400px;
            background:#fff;
            position: absolute;
            top:0;
            border-radius:6px ;
            left:50%;
            /* transform: translate(-50%,-50%); */
            transform: translate(-50%,-50%) scale(0.1);
            text-align:center;
            padding:0 30px 30px;
            color:#333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }
        .popup img{
            width: 100px;
            margin-top:-50px;
            border-radius:50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);


        }
        .open-popup{
            visibility:visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1)


        }
        .popup h2{
            font-size:38px;
            font-weight:500;
            margin:  30px 0 10px;
        }
        .popup button{
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background:#6fd649;
            color:white;
            border:0;
            border-radius:4px;
            font-size: 18px;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);

        }


    </style>
    <div class="container">
        <button type="submit" class="btn" onclick="openPopup()">Submit</button>
        <div class="popup" id="popup">
            <img src="{{asset('carparts/battery.jpg')}}" alt="">
            <h2>Thank You </h2>
            <p>Lorem iveniet doloremque nemo, quaerat nostrum molestiae maxime totam est?</p>
            <button class="" onclick="closePopup()" type="button">OK</button>
        </div>
    </div>
<script src="{{asset('script/jquery-3.6.0.min.js')}}"></script>
<script>
// $('.btn').click(function(){
//     console.log(1)
// })
let popup = document.getElementById('popup');
function openPopup(){
    
    popup.classList.add("open-popup");
}
function closePopup(){
    
    popup.classList.remove("open-popup");
}

</script>
</body>
</html>