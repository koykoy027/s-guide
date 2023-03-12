function selectTypesOfComplain(val) {
    if (val === "Others") {

        $('[name="others_type_of_complain"]').css("display", "flex")
        $('[name="others_type_of_complain"]').val("")


    }
    else {
        $('[name="others_type_of_complain"]').css("display", "none")
    }

}

function selectComplainant(val) {
    if (val === "Student") {
        $('[name="others_complainant"]').css("display", "none")
        $('[name="guardian_name"]').val("")
        $('[name="guardian_relationship"]').val("")
    }
    else {
        $('[name="others_complainant"]').css("display", "flex")
    }

}

function offenseMinorOthers(val) {
    if (val === "others") {
        $('#offense-minor-11').css("display", "block")
    }
    else {
        $('#offense-minor-11').css("display", "none")
    }
}
function offenseMajorOthers(val) {
    if (val === "others") {
        $('#offense-major-20').css("display", "block")
    }
    else {
        $('#offense-major-20').css("display", "none")
    }
}

function validation() {
    if ($('#firstname').val().length == 0) {
        $('#firstname').css("border", "1px solid red")
        $('#alert-firstname').css("display", "block")
        $('#alert-lastname').css("display", "none")
        $('#lastname').css("border", "1px solid #ccc")
    }
    else if ($('#lastname').val().length == 0) {
        $('#lastname').css("border", "1px solid red")
        $('#alert-lastname').css("display", "block")
        $('#alert-firstname').css("display", "none")
        $('#firstname').css("border", "1px solid #ccc")
    }
    else {
        // show button
        $('#table-validation').css("display", "block")
        // show table
        $('#btn-validation').css("display", "block")
        //hide alert
        $('#alert-firstname').css("display", "none")
        $('#alert-lastname').css("display", "none")
        $('#firstname').css("border", "1px solid #ccc")
        $('#lastname').css("border", "1px solid #ccc")
    }
}

function contactInformation() {
    //ADD CLASS
    $('#btn-contact-information').addClass("btn-secondary")
    //SHOW FORM
    $('#form-contact-information').css("display", "block")
    //HIDE FORM
    $('#form-guardian-information').css("display", "none")
    // REMOVE CLASS
    $('#btn-guardian-information').removeClass("btn-secondary")

}

function guardianInformation() {
    //ADD CLASS
    $('#btn-guardian-information').addClass("btn-secondary")
    //SHOW FORM
    $('#form-guardian-information').css("display", "block")
    //HIDE FORM
    $('#form-contact-information').css("display", "none")
    // REMOVE CLASS
    $('#btn-contact-information').removeClass("btn-secondary")
}

function offenseType(val) {
    if ($('#type-of-offense') === 'Minor offense') {
        console.log(val)
        $('#minor-offense').css("display", "block")
        $('#major-offense').css("display", "none")

    }
    else {
        console.log(val)
        $('#minor-offense').css("display", "none")
        $('#major-offense').css("display", "block")
    }
}














$(document).ready(function () {
    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next-step").click(function () {

        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();

        $("#progressbar li").eq($("fieldset")
            .index(nextGfgStep)).addClass("active");

        nextGfgStep.show();
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;

                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous-step").click(function () {

        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();

        $("#progressbar li").eq($("fieldset")
            .index(currentGfgStep)).removeClass("active");

        previousGfgStep.show();

        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;

                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function () {
        return false;
    })
});

$(document).ready(function () {
    $('#generalTable').DataTable({


        dom: 'Bfrtip',
        buttons: [{
            extend: 'copyHtml5',
            attr: {
                title: 'Copy',
                id: 'copyButton',
                class: 'btn btn-primary btn-sm'
            }
        },
        {
            extend: 'excelHtml5',
            attr: {
                title: 'Excel',
                id: 'button',
                class: 'btn btn-success btn-sm'
            }
        },
        {
            extend: 'csvHtml5',
            attr: {
                title: 'CSV',
                id: 'button',
                class: 'btn btn-warning btn-sm'
            }
        },
        {
            extend: 'pdfHtml5',
            attr: {
                title: 'PDF',
                id: 'button',
                class: 'btn btn-danger btn-sm'
            }
        }
        ],

        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,

    });
    $('div.dataTables_filter input').addClass('px-2 mx-2');
    $('div.dataTables_filter input').attr('placeholder', 'Search here...');
});



















