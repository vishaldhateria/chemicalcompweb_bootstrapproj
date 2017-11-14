<!DOCTYPE html>
<html>
<head>
	 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
	<title></title>
</head>
<body>
	<div class="container" style="border: solid 2px black;padding: 2em;">
		<h1 class="center">Chemical Segragated</h1>
<div class="row">
    <form class="col s12" action="upload.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
      </div>
      
      <div class="row">
      <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
		</div>
		</div>
      <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      <div class="row">
        <div class="input-field col s12">
<button type="button" class="center btn lg">SUBMIT</button>       
 </div>
      </div>
    </div>

    </form>
</div>
</div>
<script type="text/javascript">
	 $(document).ready(function() {
    $('select').material_select();
  });
</script>
</body>
</html>