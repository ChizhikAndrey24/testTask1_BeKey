<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
        /*if (window.jQuery) {
            alert($.fn.jquery);
        }*/
        $(document).ready(function() {
            $.ajax({ // ajax-query for getting data
                type: "GET",
                url: "data/test.ashx",
                dataType: "json",
                contentType: "application/json; charset=utf-8",
                success: function (response) {
                    for (var i=0; i<response.length; i++)
                    {
                        var manBlock = document.getElementById('manager'+(i+1));
                        var img = manBlock.children[0],
                            title = manBlock.children[1],
                            desc = manBlock.children[2];
                        img.setAttribute("src", response[i].thumbnail);
                        title.innerHTML = response[i].title;
                        desc.innerHTML = response[i].desc;
                    }
                }
            });
        });

        window.onload = function () {
            var ask = document.getElementById('ask'), // menu item for show feedback form
                feedback_form = document.getElementById('feedback_form'), //feedback form
                helpblock = document.getElementById('helpblock');
            ask.onclick = function () {
                if(feedback_form.style.display == 'none' || feedback_form.style.display == '') {
                    feedback_form.style.display = 'block';
                    helpblock.style.backgroundColor = '#212854';
                } else {
                    feedback_form.style.display = 'none';
                    helpblock.style.backgroundColor = '#003854';
                }
            };

        };
    </script>
    <title>TestBeKey</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div id="menublock" class="col-xl-3 col-lg-3 col-md-5 col-sm-12 center">
            <img src="images/logos.png" alt="logo" class="logo">
            <ul>
                <li><a class="menu_item" href="#">О компании</a></li>
                <li><a class="menu_item" href="#">Контакты</a></li>
                <div id="helpblock">
                    <li class="menu_item" id="ask">Задайте нам вопрос</li>
                </div>
            </ul>
            <div class="feedback">
                <form id="feedback_form" action="">
                    <input placeholder="Ваше имя" type="text">
                    <input placeholder="Контактный телефон" type="text">
                    <input placeholder="E-mail" type="email">
                    <textarea placeholder="Ваш вопрос" name="" id="" rows="5"></textarea><br>
                    <button class="btn_ask">Спросить</button>
                </form>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 center">
            <h1 class="center text_header">МЫ БУДЕМ ПОЛЕЗНЫ</h1>
            <div class="row">
                <div id="manager1" class="col-xl-4 col-lg-6 col-md-12 col-sm-12 center">
                    <img src="" alt="manager1">
                    <h3 class="center man_name"></h3>
                    <h5 class="center desc"></h5>
                </div>
                <div id="manager2" class="col-xl-4 col-lg-6 col-md-12 col-sm-12 center">
                    <img src="" alt="manager2">
                    <h3 class="center man_name"></h3>
                    <h5 class="center desc"></h5>
                </div>
                <div id="manager3" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 center">
                    <img src="" alt="manager3">
                    <h3 class="center man_name"></h3>
                    <h5 class="center desc"></h5>
                </div>
            </div>
    </div>
</div>

</body>
</html>