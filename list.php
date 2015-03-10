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
    .title{
      font-weight: bold;
      font-size: 200%;
    }
    .item{
      background-color: grey;
      /*height: 20px;
      margin: 10px;
      padding: 20px;*/
      color: #fff;
      padding: 1em;
      margin-bottom: 0.25em;
    }
    .dinner{
      background-color: red;
    }
    .breakfast{
      background-color: pink;
    }
    .lunch{
      background-color: orange;
    }
    .dessert{
      background-color: lightblue;
    }
    .appetizer{
      background-color: GreenYellow ;
    }
    .snack{
      background-color: MediumOrchid ;
    }
    .soup{
      background-color: gold;
    }
    .salad{
      background-color: green;
    }
    body{
      /*width:80%;*/
      margin-left: auto;
      margin-right: auto;
      padding: 1em;
    }
    input{
      width:100%;
      margin-bottom: 10px;
      font-size: 200%;

    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function(){
      var url="get_all_json.php";
      $.getJSON( url, function( data ) {
          for(var i=0;i<data.length;i++){
            $("#results").append($("<div>")
                .addClass('item')
                .addClass(data[i].category)
                .attr("ingredients", data[i].ingredients)
                .attr("id", data[i].pid)
                .attr("pid", data[i].pid)
            );

            //title
            $("#" + data[i].pid).append($("<div>")
                .text(data[i].title.toUpperCase())
                .addClass('title')
            )
  
            //ingredients
            $("#" + data[i].pid).append($("<div>")
              .attr("ingredients", data[i].ingredients)
              .text(data[i].ingredients.toUpperCase()) 
            )

            //tags
            $("#" + data[i].pid).append($("<div>")
              .text(data[i].tags.toUpperCase()) 
            )
          }
      });

      $("#search").keyup(function(){
        var v=$(this).val().toUpperCase();
        $(".item").hide();
        $( ".item:contains('"+v+"')" ).show();
      });
  
      $("#results").on('click','.item',function(){
        var pid = $(this).attr("pid");
        window.location.href = "edit.php?pid=" + pid;
      });

      $("#new").click(function(){
        window.location.href = "edit.php";
      });

    });
  </script>
</head>
<body>

      <?php include("nav.php");?>
  <br><br><br>
  <div id="main" class="container">
    <div id="header">
    </div>
    <input id="search" type="text" placeholder="Enter Search"/>
    <div id="results"></div>
  </div>
</body>
</html>
