<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Consuming Twitter Webserver</title>
    <script>
        window.onload = function() {
            var xhttp = new XMLHttpRequest();
            var url = require('url');
            var queryData = url.parse(request.url, true).query;
            var search = queryData.q;
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    var tweets = JSON.parse(xhttp.responseText);
                    var tweetstring = "";
                    for (var i =0; i< tweets.length ; i++)
                    {
                        tweetstring += "<h3>" + tweets[i].name + "</h3> </br>";
                        tweetstring += "<p>"  + tweets[i].text + "</p>"
                    }
                    document.getElementById("twitter").innerHTML = tweetstring;
                }
            };
            xhttp.open("GET", "http://3028.azurewebsites.net/?q="+search, true);
            xhttp.send();
        }
    </script>


</head>
<body>
<header>
    <h1>Header Div</h1>
</header>
<main>
    <h2> Main content </h2>
</main>
<aside id="twitter" >

</aside>
</body>
</html>
