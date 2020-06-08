<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
.search{
height:40px; 
width:320px;
border: 2px solid lightgreen;
border-radius: 100px;
font-size:20px;
text-align:center;
}
.searching{
position:absolute;
top:300px;
left:500px;
}
.submit{
  background-color: lightgrey;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 100px;
}
</style>
</head>
<body>
<form action="search.php" method="post">
<div class="searching">
<input type="text" name="q" class="search"/><br/>
<input type="submit" class="submit" value="Search">
</div>
</form>
</body>
</html>
