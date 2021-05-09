<html>

<head>
	<title>{page_title}</title>	
</head>
<body>
	{page_heading | lower}
	<p>
	{price | local_currency(INR)}
	</br>
	{dateStart | date(D m, Y)}
	</br>	
	<ul>
		{subjects}
			<li>{sub | upper}</li>
		{/subjects}
	</ul>
	</p>
</body>

</html>