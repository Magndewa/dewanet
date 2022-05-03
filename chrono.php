<?php
    $date = "2022-03-30 23:59:29";
?>
<div id="data"></div>

<input type="hidden" id="date" value="<?php echo $date; ?>" >

<script>
    function func() {
        var dateValue = document.getElementById("date").value;
        var date = Math.abs((new Date().getTime()/1000).toFixed(0));
        var date2 = Math.abs((new Date(dateValue).getTime()/1000).toFixed(0));
        var diff = date2-date;

        var days = Math.floor(diff/86400);

        document.getElementById("data").innerHTML= days + " days";
    }
    func();
</script>