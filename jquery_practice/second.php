<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Demo</title>
    <script>
     $( document ).ready(function() {
        $( "a" ).click(function( event ) {
            alert( "The link will no longer take you to jquery.com" );
            event.preventDefault();
            //you can prevent the default behavior by calling event.preventDefault() in the event handler:
        });
    });
 
    </script>
</head>
<body>
    <a href="http://jquery.com/">jQuery</a>
    
    
</body>
</html>