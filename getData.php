<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script  src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    </head>
    <style>
        #example_j{border:solid 1px #999; margin:5px; padding:10px}
    </style>

<body>
<div id="example_j">
    <button>Загрузить</button>
<p></p>
</div>


    <script>
        $("#example_j button").click(function(){

        $.getJSON("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5",
        function(data){
                console.log(data);
                console.log(data.title);

                $.each(data, function(i,item){
                $("<p>").html("Валюта:"+item.ccy+" Продажа:"+item.buy).appendTo("#example_j");
                if ( i == 5 ) return false;
                });
                });
                    });



/*
        $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?",
        function(data){
                console.log(data);
                console.log(data.title);

                $.each(data.items, function(i,item){
                $("<img/>").attr("src", item.media.m).appendTo("#example_j");
                if ( i == 5 ) return false;
                });
                });
                    });
                    */
    </script>

</body>
</html>