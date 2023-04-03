$(document).ready(function () {
    filtrar_todo();
})

function filtrar_todo() {
    $.ajax({
        url: "./controller/producto.php?op=listar",
        method: "POST",
        dataType: "html",
        success: function (data) {
            $("#listproductos").html(data);
        }
    })
}