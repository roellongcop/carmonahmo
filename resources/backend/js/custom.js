$(function() {
       $('.btn-print-dots').on('click', function() {
        document.title='\u200E';
        $('#dots-form').printThis();
    })

    $('.btn-print-dots-tb-treatment').on('click', function() {
        document.title='\u200E';
        $('#dots-tb-treatment-form').printThis();
    })

    $('.btn-print-opd').on('click', function() {
        document.title='\u200E';
        $('#dots-opd-form').printThis();
    })  

    $('.btn-print-water-lab').on('click', function() {

        document.title='\u200E';
        $('#water-lab-form').printThis();
    })      
     
    $('.btn-print-fecalysis').on('click', function() {
        $('#fecalysis-form').printThis()
    })

    $('#btn-logout').on('click', function() {
    	$('#frm-logout').submit();
    });


    $('#user-birthday').on('change', function() {
    	var birthday = $(this).val();
    	$.ajax({
    		url: base_url + 'user/compute-age',
    		data: {birthday : birthday},
    		cache: 'false',
    		method: 'post',
    		success: (response => {
    			$('#user-age').val(response);
    		})
    	})
    });

    // $( "#user-birthday" ).datepicker();

    
    $('#department-user_id').on('change', function() {
        $('.spiner-example').show();
        var id = $(this).val();
        $('#user-detail').modal('show');
        $.ajax({
            url: base_url + 'user/detail',
            data: {id : id},
            method: 'get',
            dataType: 'html',
            success: (response => {
                $('#user-detail .modal-body').html(response);
                $('.spiner-example').hide();
            })
        })
    })
    

    

    function createSerial(limit = 10) {
        var key = "QWERTYUIOPASDFJGNBMXCLCK";
        var serial = "";
        for (var i = 1; i <= limit; i++) {
            serial += key.charAt(Math.floor(Math.random() * key.length));
        }
        return serial
    }
    
  

    $('.create-serial').on('click', function() {
        $('#user-authkey').val(createSerial());
    });



    $('.data tbody tr').on('click', function() {
        window.location.href = $(this).data('key');
    });


    $('.btn-approved').on('click', function() {
        var id = $(this).data('key');
        swal({
            title: "Approved Reservation?",
            text: "Please confirm action. ",
            type: "success",
            showCancelButton: true,
            confirmButtonColor: "#337ab7",
            confirmButtonText: "Yes, Approved it!",
            closeOnConfirm: true
        }, function () {
            $.ajax({
                url: base_url + "appointment/approved" ,
                method: "get",
                data: {id: id},
                dataType: 'text',
                success: (response => {
                    swal({
                        title: "Approved! ",
                        text: "Reservation was Approved!",
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#337ab7",
                        confirmButtonText: "Done",
                        closeOnConfirm: true
                    }, function () {
                        $('.btn-approved').hide('slow');
                        $('.label-warning').addClass('label-primary');
                        $('.label-primary').removeClass('label-warning');
                        $('.label-primary').text('Approved')
                    });
                })
            });
        });

    });
    
    $( "#datepicker2" ).datepicker({ 
        minDate: 1,
        buttonImageOnly: true, // True if the image appears alone, false if it appears on a button
        hideIfNoPrevNext: true, // True to hide next/previous month links
        //gotoCurrent: true, // True if today link goes back to current selection instead
        changeMonth: true, // True if month can be selected directly, false if only prev/next
        changeYear: true, // True if year can be selected directly, false if only prev/next
        showOtherMonths: true, // True to show dates in other months, false to leave blank
        selectOtherMonths: true, // True to allow selection of dates in other months, false for
        showWeek: true, // True to show week of the year, false to not show it
        showButtonPanel: true, // True to show button panel, false to not show it
        autoSize: true, // True to size the input for the date format, false to leave as is
    });


    try {
        $('.data').DataTable( {'ordering'    : false,});
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green'
        });
    } catch(err) {

    }
    

    $('.btn, a, .data tbody tr').tooltip();

});