<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{title}}</title>
</head>
<body>
	<h1>{{title}}</h1>
	<p>{{description}}</p>
	<hr>
	<div class="posts-container">
		{{#each posts}}
			{{> post}}
		{{/each}}
	</div>
</body>
</html>
