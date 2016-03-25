<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
    </head>

    <body>

	  <!-- <div class="container">
	  <h3>Admin Page</h3>
      <div class="row">
        <div class="col s12">
          <ul class="tabs ">
            <li class="tab col s3"><a class="active" href="#news">News</a></li>
            <li class="tab col s3"><a  href="#users">Users</a></li>
            <li class="tab col s3"><a href="#about">About</a></li>
          </ul>
        </div>
        <div id="news" class="col s12">
        	<br>
        	<div class="row"><a id="add-news" href="../app/addnews.php" class="waves-effect waves-light btn-large"><i class="large material-icons">add</i> Add news</a> </div>
        	<table>
	        <thead>
	          <tr class="row">
	              <th  data-field="id">ID</th>
	              <th  data-field="name">News title</th>
	              <th  data-field="price">Date</th>
	              <th  data-field="price">Delete</th>
	              <th  data-field="price">Edit</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>1</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	            <td><a class="waves-effect waves-light btn">Delete</a></td>
	            <td><a class="waves-effect waves-light btn">Edit</a></td>
	          </tr>
	          <tr>
	            <td>1</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	            <td><a class="waves-effect waves-light btn">Delete</a></td>
	            <td><a class="waves-effect waves-light btn">Edit</a></td>
	          </tr>
	          <tr>
	            <td>1</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	            <td><a class="waves-effect waves-light btn">Delete</a></td>
	            <td><a class="waves-effect waves-light btn">Edit</a></td>
	          </tr>
	          
	        </tbody>
	      </table>
            
        </div>
        <div id="users" class="col s12">Users here</div>
        <div id="about" class="col s12">About here</div>
      </div> 
	  </div> -->
	  <h3>Admin Page</h3>
	  <div class="row">
	    <div class="col s12">
	      <ul class="tabs">
	        <li class="tab col s3"><a class="active" href="#news">News</a></li>
            <li class="tab col s3"><a href="#users">Users</a></li>
            <li class="tab col s3"><a href="#about">About</a></li>
	      </ul>
	    </div>
	   	<div id="news" class="col s12">
	   		<div class="container">
	   			<div class="row">
	   	<br>
	   	<a id="add-news" href="../app/addnews.php" class="waves-effect waves-light btn-large"><i class="large material-icons">add</i> Add news</a> </div>
	   		<table>
		        <thead>
		          <tr class="row">
		              <th  data-field="id">ID</th>
		              <th  data-field="name">News title</th>
		              <th  data-field="price">Date</th>
		              <th  data-field="price">Delete</th>
		              <th  data-field="price">Edit</th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Eclair</td>
		            <td>$0.87</td>
		            <td><a class="waves-effect waves-light btn">Delete</a></td>
		            <td><a class="waves-effect waves-light btn">Edit</a></td>
		          </tr>
		          <tr>
		            <td>1</td>
		            <td>Eclair</td>
		            <td>$0.87</td>
		            <td><a class="waves-effect waves-light btn">Delete</a></td>
		            <td><a class="waves-effect waves-light btn">Edit</a></td>
		          </tr>
		          <tr>
		            <td>1</td>
		            <td>Eclair</td>
		            <td>$0.87</td>
		            <td><a class="waves-effect waves-light btn">Delete</a></td>
		            <td><a class="waves-effect waves-light btn">Edit</a></td>
		          </tr>
		          
		        </tbody>
	      </table>
	   		</div>
	   	</div>
	   	<div id="users" class="col s12">Users here</div>
        <div id="about" class="col s12">About here</div>
	  </div>

	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   	<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    </body>
  </html>
