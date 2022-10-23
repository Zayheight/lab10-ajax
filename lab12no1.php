<html><head><meta charset="utf-8">
<script>
	var xmlHttp;

    function send() {
        xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = showResult;

        var a = document.getElementById("a1").value;
        var b = document.getElementById("a2").value;
        var c = document.getElementById("a3").value;
        var url= "add.php?a=" + a*30 + "&b=" + b*70 +"&c="+c*30;
       
       xmlHttp.open("GET", url);
       xmlHttp.send();   
   }
   function showResult() {
       if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
           document.getElementById("result").innerHTML = xmlHttp.responseText;
       }
   }
</script></head>
<body>
     
     มะม่วง กก.ละ 30บาท ขายได้ = <input type="text" id="a1">กก.<br>
     ส้ม กก.ละ 70บาท ขายได้ = <input type="text" id="a2">กก.<br>
     กล้วย หวี.ละ 30บาท ขายได้ = <input type="text" id="a3" onkeyup="send()">หวี.<br>
     
     <span id="result"></span>
</body></html>

