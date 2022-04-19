<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Adding Product</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body>

	 <form method="POST" action="{{ url('save_info') }}">
		{{ csrf_field() }}
		<h1>Product adding</h1>

		<fieldset>
		<label for="product">Select Product</label>
		  <select id="product" name="product">
			<option value="shirt">Shirt</option>
			<option value="screw_driver">Screw Driver</option>
		  </select>

		  <div id="gender" style="display:none;">
		  <label for="gender">Gender:</label>
		  <select name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
		  </select>
          </div>

		  <label for="color">Color:</label>
		  <select id="color" name="color">
			<option value="black">Black</option>
			<option value="white">White</option>
		  </select>

		 <div id="size" style="display:none">
		  <label for="size">Size:</label>
		  <select name="size">
			<option value="m_size">M</option>
			<option value="l_size">L</option>
			<option value="xl_size">XL</option>
		  </select>
         </div>

         <div id="size_s" style="display:none;">
		  <label for="size_s">Size:</label>
		  <select name="screw_size">
			<option value="12 Inch">12 Inch</option>
			<option value="10 Inch">10 Inch</option>
		  </select>
         </div>

		  <label for="price">Price</label>
		  <input type="integer" id="" name="price" placeholder="Enter Price">


		</fieldset>

		  <button type="submit">Submit</button>
	  </form>

	</body>
	<script>
	$(document).ready(function(){
		  $("#size").show()
		  $("#gender").show()
		  $("#size_s").hide()
	})
	$('#product').on('change',function(){
		if( $(this).val()==="screw_driver"){
		$("#size_s").show()
		$("#size").hide()
		$("#gender").hide()
		}
	   else{
		  $("#size_s").hide()
		  $("#size").show()
		  $("#gender").show()
		}
	});

	  </script>
















<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #a4aba4;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="integer"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #191970;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
button:hover
{
	background-color: #228b22;
	cursor: pointer;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
	max-width: 480px;
  }

}
</style>


</html>
