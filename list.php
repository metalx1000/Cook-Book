<html>
<head>
  <title>Cook Book Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <style>
    #alert {
      top: 0px;
      position: fixed;
      width: 100%;
    }
    .item{
      background-color: red;
      /*height: 20px;
      margin: 10px;
      padding: 20px;*/
      font-weight: bold;
      font-size: 200%;
      color: #fff;
      padding: 1em;
      margin-bottom: 0.25em;
    }
    body{
      width:80%;
      margin-left: auto;
      margin-right: auto;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function(){
      var url="get_all_json.php";
      $.getJSON( url, function( data ) {
          for(var i=0;i<data.length;i++){
            $("#main").append($("<a>").append($("<div>")
                .attr("id", data[i].pid)
                .addClass('item')
                .text(data[i].title))
              .attr("href", "edit.php?pid=" + data[i].pid)
            );
                     
          }
        
      });
    });
  </script>
</head>
<body>
  <div id="main">

  </div>
</body>
</html>
