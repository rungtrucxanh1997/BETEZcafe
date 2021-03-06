<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Liên Hệ </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="info.css">
</head>

<body>

    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=536643483177466";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php
        require_once('../modules/header.php');
    ?>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-6">
                <div class="left-side">
                    <p class="info" id="header"> Vài nét về BETEZ Café... </p>
                    <p class="paragraph">
                        Là một quán cafe tại ngõ 2 phố Phạm Văn Đồng, BETEZ Café là nơi mà bạn có thể thưởng thức tách cà phê hoặc thứ đồ uống mà
                        bạn yêu thích để thư giãn sau những giờ học tập và làm việc căng thẳng. Ngoài ra, bạn sẽ được giao
                        hàng tận nơi món đồ uống mà mình yêu thích, được hưởng nhiều ưu đãi đặc biệt khác nhau khi bạn đặt
                        hàng online qua trang web của chúng tôi.
                    </p>

                    <p class="fanpage"> Like fanpage để ủng hộ BETEZ Café !!! </p>

                </div>

                <div class="fanpage-plugin">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBETEZCafe%2F&tabs=timeline&width=400&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=536643483177466"
                        width="400" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

            </div>

            <p class="more-info"> Để biết thêm thông tin chi tiết, vui lòng:
                <ul class="list">
                    <li>Gửi email về địa chỉ: betezcafe@gmail.com</li>
                    <li>Hoặc liên hệ với số điện thoại: 0969969696 </li>
                </ul>
            </p>

        </div>
        <div class="col-md-6">
            <div>
                <p class="text"> BETEZ Café - Ngõ 2 Phạm Văn Đồng </p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/d/embed?mid=1LGjjObQpm1oiuEQRfxBogyPq1CY" width="670" height="550"></iframe>
            </div>
        </div>
    </div>

    </div>

</body>

</html>