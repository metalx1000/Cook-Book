<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script>
    function generateKey() {
        var length = 8,
            charset = "abcdefghijklnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
            retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }
        return retVal;
    }

    function getUrlParameter(sParam)
    {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) 
        {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) 
            {
                return sParameterName[1];
            }
        }
    }   

    $(document).ready(function(){
        if(getUrlParameter('pid')){
            $("#pid").val(getUrlParameter('pid'));
            get_json(getUrlParameter('pid'));
        }else{
            $("#pid").val(generateKey());
        }
        $("#form1").submit(function(event){
            event.preventDefault();
            //$("#alert").slideDown( "slow" ).delay( 3000 ).slideUp("slow");
            $.get( "update.php", $( "#form1" ).serialize() );
        });
        /*$("#alert").click(function(){
            $(this).slideUp("slow");
        });*/
        
    });
  </script>

</head>
<body>
  <div class="container">
    <div id="recipe_create">
      <h2>Recipe Form</h2>
      <form role="form" id="form1">
        <div class="form-group">
          <input type="hidden" id="pid" value="098" name="pid">
        </div>
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="prep_time">Prep Time:</label>
          <input type="text" class="form-control" id="prep_time" name="prep_time" placeholder="Enter Prep Time">
        </div>
        <div class="form-group">
          <label for="cook_time">Cook Time:</label>
          <input type="text" class="form-control" id="cook_time" name="cook_time"  placeholder="Enter Cook Time">
        </div>
        <div class="form-group">
          <label for="total_time">Total Time:</label>
          <input type="text" class="form-control" id="total_time" name="total_time" placeholder="Enter Total Time">
        </div>
        <div class="form-group">
          <label for="yield">Yield:</label>
          <input type="text" class="form-control" id="yield" name="yield" placeholder="Enter Yield Amount">
        </div>

        <div class="form-group">
          <label for="description">Description:</label>
          <textarea cols="40" class="form-control" id="description" name="description" rows="10">
          </textarea>
        </div>
        <div class="form-group">
          <label for="ingredients">Ingredients:</label>
          <textarea cols="40" class="form-control" id="ingredients" name="ingredients" rows="10">
          </textarea>
        </div>
        <div class="form-group">
          <label for="instructions">Instructions:</label>
          <textarea cols="40" class="form-control" id="instructions" name="instructions" rows="10">
          </textarea>
        </div>

        <div class="form-group">
          <label for="comments">Comments:</label>
          <textarea cols="40" class="form-control" id="comments" name="comments" rows="10">
          </textarea>
        </div>

        <div class="form-group">
          <label for="category">Category:</label>
          <select class="form-control" id="category" name="category">
            <option value=""></option>
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="dinner">Dinner</option>
            <option value="dessert">Dessert</option>
            <option value="appetizer">Appetizer</option>
            <option value="snack">Snack</option>
            <option value="other">Other</option>
          </select>          
        </div>

        <div class="form-group">
          <label for="source">Source:</label>
          <input type="text" class="form-control" id="source" name="source" placeholder="Enter who or where you got this recipe from">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>
  </div>
</body>
