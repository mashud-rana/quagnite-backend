/*
Template Name:   - Admin & Dashboard Template
Author: ITclanBD
Website: https://ITclanBD.com/
Contact: ITclanBD@gmail.com
File: Table responsive Init Js File
*/

$(function() {
    $(".table-responsive").responsiveTable({
        addDisplayAllBtn: "btn btn-secondary"
    });

    $(".btn-toolbar [data-toggle=dropdown]").attr("data-bs-toggle", "dropdown");
});
