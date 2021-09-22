<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Rows</h1>
    
@for($i = 0 ; $i <= $rows ; $i++ )

    <div> {{$i}}</div>

@endfor
</body>
</html>