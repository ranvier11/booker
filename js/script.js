$(document).ready(function() {
    var selectLoaded = false;


    $.ajax({
        url: 'rooms.php',
        type: 'POST',
        datatype: 'json',
        async: false,
        success: function(json) {

            tmp = $.parseJSON(json);


        }
    });
    $(document).ajaxSuccess(function() {
        console.log(tmp.length);
        for (var i = 0, len = tmp.length; i < len; i++) {
            $('#roomList').append('<li class="list-group-item">Pokój nr. ' + tmp[i].room_id + '</li>');

        }
    });

    // room select ajax-------------------------------------------------------------
    var roomsSelect = function() {
        if (selectLoaded === false) {
            var roomSelect = $('#roomSelect');
            var tmp = [];
            $.ajax({
                url: 'rooms.php',
                type: 'POST',
                datatype: 'json',
                success: function(json) {

                    tmp = $.parseJSON(json);

                    return tmp;
                }
            });
            $(document).ajaxSuccess(function() {
                for (var i = 0, len = tmp.length; i < len; i++) {
                    roomSelect.append(new Option(tmp[i].room_id, tmp[i].room_id));
                }
            });
            selectLoaded = true;
        }
    };

    var addEvent = function() {
        $.ajax({
            url: 'addEvent.php',
            type: 'POST',
            dataType: 'json',
            data: {

            }
        });
    };
    // calendar--------------------------------------------------------------------
    $('#calendar').fullCalendar({
        height: 600,
        defaultView: 'basicWeek',
        customButtons: {
            roomOne: {
                text: 'Pokój1',
                click: function() {
                    alert('clicked the custom button!');
                }
            },
            newEvent: {
                text: 'Dodaj +',
                click: function() {
                    roomsSelect();
                    $('#modal').modal();
                }
            }
        },
        header: {
            left: 'prev,next today newEvent',
            center: 'title',
            right: 'basicWeek,listWeek,month'
        },
        footer: {
            left: 'roomOne'
        },
        events: 'events.php',

    });

    //datepicker----------------------------------------------------------------------------
    //var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    var today = moment(new Date());

    $('#startDate').datepicker({

        locale: 'pl-pl',
        format: 'dd mmmm yyyy',
        value: today.format('LL'),
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: today,
        maxDate: function() {
            return $('#endDate').val();
        }
    });
    $('#endDate').datepicker({
        locale: 'pl-pl',
        format: 'dd mmmm yyyy',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: function() {
            return $('#startDate').val();
        }
    });

});