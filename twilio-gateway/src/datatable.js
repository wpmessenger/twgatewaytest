$(document).ready(function () {

    // global variables
    var selectedRow, selectedTable;

    populateDataTable('twilio_numbers')
    populateDataTable('forwarding_numbers')

    var twilio_numbers = $('twilio_numbers').DataTable();
    var forwarding_numbers = $('forwarding_numbers').DataTable();

    $('#wpmp_twilio_number_frndly_name_form').submit(function (e) {
        e.preventDefault();
        $('input[name="wpmp_twilio_number_frndly_name_save"]').attr('disabled', true)
        $('input[name="wpmp_twilio_forwarding_num_frndly_name_save"]').attr('disabled', true)
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'queries_handler',
                data: $(this).serialize()
            },
            success: function (response) {
                populateDataTable(response.trim())
                messageFade('#wpmp_twilio_number_frndly_name_form');
            }
        });
    });

    $('#wpmp_twilio_forwarding_num_frndly_name_form').submit(function (e) {
        e.preventDefault();
        $('input[name="wpmp_twilio_number_frndly_name_save"]').attr('disabled', true)
        $('input[name="wpmp_twilio_forwarding_num_frndly_name_save"]').attr('disabled', true)
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'queries_handler',
                data: $(this).serialize()
            },
            success: function (response) {
                populateDataTable(response.trim())
                messageFade('#wpmp_twilio_forwarding_num_frndly_name_form');
            }
        });
    });

    $('#wpmp_twilio_number_update').submit(function (e) {
        e.preventDefault();
        $('body').css('overflow', 'hidden'); // Remove scroll effect
        $('input[name="wpmp_twilio_number_update"]').attr('disabled', true)
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'queries_handler',
                data: $(this).serialize()
            },
            success: function (response) {

                populateDataTable(selectedTable);

                $('#messageSav').fadeIn().delay(4000).fadeOut(function () {
                    $('body').css('overflow', 'auto'); // Restore scroll effect
                    // Hide the modal
                    $('#modalOverlay').addClass('hidden');
                    $('input[name="wpmp_twilio_number_update"]').attr('disabled', false);
                });

            }
        });
    });

    $(document).on('click', '.numDeleteBtn', function (e) {
        var num_id = $(this).attr('data-id');
        var dataTable = $(this).closest('table').attr('id');
        const dataRequest = {
            'requestType': 'deleteNum',
            'numberID': num_id
        }
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'queries_handler',
                data: dataRequest
            },
            success: function (response) {
                // console.log(response)
                populateDataTable(dataTable)
                $('body').css('overflow', 'hidden'); // Remove scroll effect
                $('#messageDel').fadeIn().delay(4000).fadeOut(function () {
                    $('body').css('overflow', 'auto'); // Restore scroll effect
                });
            }
        });
    });

    function messageFade(resetForm) {
        $(resetForm).trigger('reset');
        $('body').css('overflow', 'hidden'); // Remove scroll effect
        $('#messageSav').fadeIn().delay(4000).fadeOut(function () {
            $('body').css('overflow', 'auto'); // Restore scroll effect
            $('input[name="wpmp_twilio_number_frndly_name_save"]').attr('disabled', false)
            $('input[name="wpmp_twilio_forwarding_num_frndly_name_save"]').attr('disabled', false)
        });
    }

    function populateDataTable(dataTable) {
        let fetchType = (dataTable == 'twilio_numbers') ? 'numbers' : 'forwarding';
        const dataRequest = {
            'fetchType': fetchType
        }
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'queries_handler',
                data: dataRequest
            },
            success: function (response) {
                // console.log(response)
                var responseData = JSON.parse(response); // Parse the response as JSON
                if ($.fn.DataTable.isDataTable(`#${dataTable}`)) {
                    $(`#${dataTable}`).DataTable().destroy();
                }
                $(`#${dataTable}`).DataTable({
                    processing: true,
                    data: responseData.data
                });
            }
        });
    }

    $(document).on('click', '.modalOpenButton', function () {
        $('#tg_num_type_update').css('display', 'block')
        var row = $(this).closest('tr');
        var num_id = $(this).attr('data-id');
        var rowData = [];

        // Retrieve the data from each cell in the row
        row.find('td').each(function () {
            rowData.push($(this).text());
        });

        // set the row and datatable's information
        selectedRow = rowData[0];
        selectedTable = $(this).closest('table').attr('id');

        // Set the row data to the modal form fields
        $('#num_id').val(num_id);
        $('#wpmp_twilio_number_frndly_name_update').val(rowData[1]);
        $('#wpmp_twilio_from_number_update').val(rowData[2]);

        if (rowData[3] == 'whatsapp' || rowData[3] == 'sms') {
            // Set the row data to the modal form fields
            $('#tg_num_type_update option').each(function () {
                if ($(this).val() === rowData[3]) {
                    $(this).prop('selected', true);
                } else {
                    $(this).prop('selected', false);
                }
            });
        } else {
            $('#tg_num_type_update').css('display', 'none')
        }

        // Show the modal
        $('#modalOverlay').removeClass('hidden');
    });

    $(document).on('click', '.modalCloseButton', function () {
        // Hide the modal
        $('#modalOverlay').addClass('hidden');
    })
    
    $(document).on('click', '.modalSpecial', function () {
        // Show the modal
        $('#modalSpecial').removeClass('hidden');
    });
    $(document).on('click', '.modalSpecialCloseBtn', function () {
        // Hide the modal
        $('#modalSpecial').addClass('hidden');
    })
})

/** working on edit and delete buttons
  $('.edit-button').click(function(e) {
        e.preventDefault();
        
        var id = $(this).data('id');
        var tableId = $(this).closest('table').attr('id');
        
        // Perform AJAX request for edit functionality
        const dataRequest = {
            'requestType': 'editNum',
            'numberID': id
        }
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: 'queries_handler',
                data: dataRequest
            },
            success: function (response) {
                // console.log(response)
                var responseData = JSON.parse(response); // Parse the response as JSON

                $(`#${dataTable}`).DataTable({
                    processing: true,
                    data: responseData.data
                });
            }
        });
    });

  */