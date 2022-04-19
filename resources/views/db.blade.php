<html>
<head>
<title>Product database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<h1>Product Details</h1>

</head>
<body>
<div>
<a href="{{URL::to('/')}}" class="btn btn-success">Add product</a>
</div>
<table class="container">



	<thead>
		<tr>
      <th><h1>ID</h1></th>
      <th><h1>Product</h1></th>
			<th><h1>Gender</h1></th>
			<th><h1>Color</h1></th>
			<th><h1>Size</h1></th>
			<th><h1>Price</h1></th>
		</tr>
	</thead>
	<tbody>
@foreach($user_info as $v_user)   
    @if($v_user->product == "shirt") 		
		<tr>
      <td>{{$v_user->id}}</td>
      <td>{{$v_user->product}}</td>
			<td>{{$v_user->gender}}</td>
			<td>{{$v_user->color}}</td>
			<td>{{$v_user->size}}</td>
			<td>{{$v_user->price}}</td>
      <td>
      <a href="{{URL::to('/edit_user/'.$v_user->id)}}" class="btn btn-info">Edit</a>
        <a href="{{URL::to('/delete_user/'.$v_user->id)}}" class="btn btn-danger">Delete</a>
      </td>
		</tr>
    @else
    <tr>
      <td>{{$v_user->id}}</td>
      <td>{{$v_user->product}}</td>
			<td>--------</td>
			<td>{{$v_user->color}}</td>
			<td>{{$v_user->screw_size}}</td>
			<td>{{$v_user->price}}</td>
      <td>
        <a href="{{URL::to('/edit_user/'.$v_user->id)}}" class="btn btn-info">Edit</a>
        <a href="{{URL::to('/delete_user/'.$v_user->id)}}" class="btn btn-danger">Delete</a>
      </td>
		</tr>
    @endif
		
@endforeach()   
	</tbody>
</table>

</body>





<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#8593ab;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}
div
{
  padding-left: 70px;
  height: 1.5em;
}
.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1.2em;
  text-align: left;
  color: white;
}

.container td {
	  font-weight: normal;
	  font-size: 1.1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}
a:link {
  background-color: transparent;
  text-decoration: none;
}
.container {
	  text-align: left;
	  overflow: hidden;
	  width: 90%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}


.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}


/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}



@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
