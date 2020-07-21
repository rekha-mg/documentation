 
<html>
<head>
<title>jQuery Callback example</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#btnStart").click(function(){
        var div = $("div");
        div.animate({height: 600,width: 800}, 2000,function(){
            alert("Animation Finished !!");
        });
      });
    });
  </script>
 <!-- The example below has no callback parameter , and the alert box will be displayed before the animation effect is completed: 
 <script>
    $(document).ready(function() {
      $("#btnStart").click(function(){
        var div = $("div");
        div.animate({height: 600,width: 800}, 2000);
        alert("Animation Finished !!");
      });
    });
  </script>
  http://net-informations.com/jq/effects/callback.htm
-->
</head>
<body>
  <button id="btnStart">Start Animation</button>
  <div style="height:150;width:200;background:green;position:absolute;">
    jQuery Callback()
  </div>
</body>
</html>