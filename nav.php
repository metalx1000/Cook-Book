    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">My Cook Book</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="https://github.com/metalx1000/Cook-Book" target="_blank">Project Page</a></li>
            <li><a href="http://filmsbykris.com" target="_blank">Contact</a></li>
            <li><a href="edit.php">New Recipe</a></li>
            <li><a href="print.php?pid=<?php print $_GET['pid'];?>" target="_blank" id="print">Print</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

