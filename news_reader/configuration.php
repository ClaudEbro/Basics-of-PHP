<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuration of flows</title>
    <style>
        label {
            display : inline-block;
            width : 10rem;
            margin : 1rem;
        }
    </style>
</head>
<body>
    <h1>Configuration of news</h1>
    <form method="post" action="processing-news.php">
        <label>Research</label>
        <input type="text" size ="80" name="keyword"><br>
        <label>Range of research</label>
        <select name="time">
            <option>At least one hour</option>
            <option>Today</option>
            <option>This week</option>
        </select><br>
        <label></label><input type="submit" value="Choose these parameters">
    </form>
</body>
</html>