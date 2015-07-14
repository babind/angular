
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title>jQuery plugin: reverseText demonstration</title>
</head>
<body>

<h1>jQuery plugin: reverseText</h1>
<p>This jQuery plugin reverses all the text in the selected nodes.</p>

<ul>
	<li>This text will be reversed</li>
	<li>This text will not be reversed</li>
	<li>reversed</li>
	<li>not reversed</li>
</ul>

<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/reversetext.js"></script>
<script type="text/javascript">
// reverse even-numbered LI tag text
$("ul li:even").reverseText();
</script>

</body>
</html>