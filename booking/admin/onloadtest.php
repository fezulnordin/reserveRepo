<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>untitled</title>
<script type="text/javascript">

onunload = function()
{
	var foo = document.getElementById('foo');
	self.name = 'fooidx' + foo.selectedIndex;
}

onload = function()
{
	var idx, foo = document.getElementById('foo');
	foo.selectedIndex = (idx = self.name.split('fooidx')) ?	idx[1] : 0;
}

</script>
</head>
<body>
<form>
<select id="foo" onchange="options[selectedIndex].value&&self.location.reload(true)"><!-- thank you, <font color='teal'>stereofrog</font> -->
<option value="" selected="selected">choose</option>
<option value=""></option>
<option value="something">blah 1</option>
<option value="something">blah 2</option>
<option value="something">blah 3</option>
<option value="something">blah 4</option>
<option value="something">blah 5</option>
</select>
</form>
</body>
</html>