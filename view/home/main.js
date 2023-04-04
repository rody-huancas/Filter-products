$(document).ready(function () {
    filtrar_todo();

    $.ajax({
        url: "./controller/producto.php?op=categoria",
        dataType: "html",
        success: function (data) {
            $("#listcategoria").html(data);

            $(".filtrodetalle").click(function () {
                filtrar_todo();
            })
        }
    })

    $("#txtnombre").on("input", function () {
        filtrar_todo();
    })

    // Ataque
    var slider = new Slider("#txtprecio", {});
    var initialValue = $("#txtprecio").data("slider-value");
    $("#sliderValue").text(initialValue);
    $("#txtprecio").on("change", function (slideEvt) {
        $("#sliderValue").text(slideEvt.value.newValue);
        filtrar_todo();
    })
})

function filtrar_todo() {

    var categoria = getCheckedValues("categorias");
    var nombre = $("#txtnombre").val();
    var precio = $("#txtprecio").val();

    $.ajax({
        url: "./controller/producto.php?op=listar",
        method: "POST",
        dataType: "html",
        data: {
            categoria: categoria,
            nombre: nombre,
            precio: precio
        },
        success: function (data) {
            $("#listproductos").html(data);
        }
    })

}


function getCheckedValues(name) {
    var array = [];
    $("input[name='" + name + "']").each(function () {
        if ($(this).is(":checked")) array.push($(this).val())
    });

    return array;
}
