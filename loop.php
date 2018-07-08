<!DOCTYPE html>
<html>
<head>
	<title>Javascript Loop</title>
	<script type="text/javascript">
		// var testArray = [1,2,3,4,5];
		// console.log(testArray);
		var newArray = [];
		newArray['one'] = 1;
		newArray['two'] = 2;
		newArray['three'] = 3;
		newArray['four'] = 4;
		newArray['five'] = 5;
		var arrayKeys = Object.keys(newArray);
		for(var i = 0; i < arrayKeys.length; i++){
			console.log(newArray[arrayKeys[i]]);
		}

		console.log('This is new changes!');
	</script>
</head>
<body>

</body>
</html>