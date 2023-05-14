// TEXT TO SPEECH
$(document).ready(function () {
    var speak = document.getElementById('speak');
    var textarea = document.getElementById('textarea');
    var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    var recognition = new SpeechRecognition();
    speak.addEventListener('click', function () {
        recognition.start();
        speak.innerHTML = '...speaking';
    })

    recognition.onresult = function (e) {
        var transcript = e.results[0][0].transcript;
        textarea.innerHTML += transcript + ' ';
        speak.innerHTML = 'Click to speak';
    }
})

// SPEECH TO TEXT
$(document).ready(function () {
    let summary = document.getElementById('summary');
    let btnSpeech = document.getElementById('btnSpeech');

    btnSpeech.addEventListener("click", function () {
        let text = summary.textContent;
        let utterance = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utterance);
    });
})


// PROGRESSIVE STEP BAR
$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
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



















