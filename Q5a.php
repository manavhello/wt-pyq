<html>
<head>
    <title>Hide/Unhide Text</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#hide-btn").click(function(){
                $("#text").toggle();
            });
        });
    </script>
</head>
<body>
    <?php
        echo '<button id="hide-btn">Hide/Unhide me</button>';
        echo '<p id="text">I like web programming. <br><br> I like Database Management systems</p>';
    ?>
</body>
</html>
