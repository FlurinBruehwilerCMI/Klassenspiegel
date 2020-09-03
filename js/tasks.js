$().ready(function () {
    $(".task-btn-open").each(function () {
        $(this).on("click", function (e) {
            e.preventDefault();
            buildModal($(this).val())
            $("#modal-task").modal("show");
        });
    });

    $("#task-add-btn").on("click", function (e) {
        e.preventDefault();
        addTask();
    })
});

function buildModal(id) {
    let data = {
        'id':id,
    };
    $.ajax({
        method:"POST",
        url:"https://" + window.location.hostname + "/php/getTask.php",
        data: data,
        timeout:5000,
        success: function (data) {
            $("#modal-task-content").html(data);
        },
        error: function (xhr, status, error) {
            $("#modal-task-content").html("Es ist ein Fehler aufgetreten. Versuche es später noch einmal.");
        }
    });
}

function addTask() {
    $("#task-add-success").html("");
    $("#task-add-error").html("");
    let data = {
        'title':$("#task-add-title").val(),
        'description':$("#task-add-description").val(),
        'date':$("#task-add-date").val(),
        'subject':$("#task-add-subject").val(),
        'category':$("#task-add-category").val()
    };
    $.ajax({
        method:"POST",
        url:"https://" + window.location.hostname + "/php/addTask.php",
        data: data,
        timeout:5000,
        success: function (data) {
            if (data == "200") {
                $("#task-add-success").html("Die Aufgabe wurde erfolgreich hinzugefügt!");
            } else
                $("#task-add-error").html("Es ist ein Fehler aufgetreten. Versuche es später noch einmal.");
        },
        error: function (xhr, status, error) {
            $("#task-add-error").html("Es ist ein Fehler aufgetreten. Versuche es später noch einmal.");
        }
    });
}