$(document).ready(function() {
    function getStudent(val) {
        $.ajax({
            type: "POST",
            url: "get_student.php",
            data: 'classid=' + val,
            success: function (data) {
                $("#studentid").html(data);

            }
        });
        $.ajax({
            type: "POST",
            url: "get_student.php",
            data: 'classid1=' + val,
            success: function (data) {
                $("#subject").html(data);

            }
        });
    }
});