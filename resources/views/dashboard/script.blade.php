<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        GetData();
        GetData2();
        GetData3();
    });

    function GetData() {
        var url = 'https://api.thingspeak.com/channels/2057444/feeds.json?key=80IYYB0RIS50P98T&results=1';
        $.ajax({
            url: url,
            type: 'GET',
            contentType: "application/json",
            success: function(data, textStatus, xhr) {
                $.each(data, function(i, item) {
                    if (i == 'feeds') {
                        var ubound = item.length;
                        $('#txtField1').val(item[ubound - 1].field1);
                        var field1Value = item[ubound - 1].field1;
                        var lastUpdatedTime = new Date(item[ubound - 1].created_at);
                        var currentTime = new Date();
                        $('#txtUpdatedTime1').text(getTimeAgo(currentTime, lastUpdatedTime));

                        if (field1Value > 30 || field1Value < 26) {
                            showToast('dangerToast');
                        } else {
                            hideToast();
                        }
                    }
                });
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });

        setTimeout(GetData, 5000);
    }

    function GetData2() {
        var url = 'https://api.thingspeak.com/channels/2057444/feeds.json?key=80IYYB0RIS50P98T&results=1';
        $.ajax({
            url: url,
            type: 'GET',
            contentType: "application/json",
            success: function(data, textStatus, xhr) {
                $.each(data, function(i, item) {
                    if (i == 'feeds') {
                        var ubound = item.length;
                        $('#txtField2').val(item[ubound - 1].field2);
                        var field2Value = item[ubound - 1].field2;
                        var lastUpdatedTime = new Date(item[ubound - 1].created_at);
                        var currentTime = new Date();
                        $('#txtUpdatedTime2').text(getTimeAgo(currentTime, lastUpdatedTime));

                        if (field2Value > 9 || field2Value < 6.5) {
                            showToast('dangerToast2');
                        } else {
                            hideToast();
                        }

                    }
                });
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });

        setTimeout(GetData2, 5000);
    }

    function GetData3() {
        var url = 'https://api.thingspeak.com/channels/2057444/feeds.json?key=80IYYB0RIS50P98T&results=1';
        $.ajax({
            url: url,
            type: 'GET',
            contentType: "application/json",
            success: function(data, textStatus, xhr) {
                $.each(data, function(i, item) {
                    if (i == 'feeds') {
                        var ubound = item.length;
                        $('#txtField3').val(item[ubound - 1].field3);
                        var field3Value = item[ubound - 1].field3;
                        var lastUpdatedTime = new Date(item[ubound - 1].created_at);
                        var currentTime = new Date();
                        $('#txtUpdatedTime3').text(getTimeAgo(currentTime, lastUpdatedTime));

                        if (field3Value > 1000000
                         || field3Value < 4000) {
                            showToast('dangerToast3');
                        } else {
                            hideToast();
                        }
                    }
                });
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });

        setTimeout(GetData3, 5000);
    }

    function getTimeAgo(currentTime, lastUpdatedTime) {
        var timeDifference = Math.round((currentTime - lastUpdatedTime) / 1000); // Perbedaan waktu dalam detik

        if (timeDifference < 60) {
            return timeDifference + ' seconds ago';
        } else if (timeDifference < 3600) {
            var minutes = Math.floor(timeDifference / 60);
            return minutes + ' minutes ago';
        } else if (timeDifference < 86400) {
            var hours = Math.floor(timeDifference / 3600);
            return hours + ' hours ago';
        } else {
            var days = Math.floor(timeDifference / 86400);
            return days + ' days ago';
        }
    }

    function showToast(toastId) {
        var toast = document.getElementById(toastId);
        toast.classList.remove('hide');
        toast.classList.add('show');
    }

    function hideToast(toastId) {
        var toast = document.getElementById(toastId);
        toast.classList.remove('show');
        toast.classList.add('hide');
    }
</script>
