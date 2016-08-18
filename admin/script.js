$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
		lengthMenu: [
			[ 10, 25, 50, -1 ],
			[ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
			'pageLength',
            
			{
				extend: 'copyHtml5',
				key: '1',
				titleAttr: 'Press 1 From KeyBoard'
			},
			 {
                extend: 'excelHtml5',
				key: '2',
				titleAttr: 'Press 2 From KeyBoard',
                title: 'ICT FEST PARTICIPANT INFORMATION'
            },
            {
                extend: 'csvHtml5',
				key: '3',
				titleAttr: 'Press 3 From KeyBoard',
                title: 'ICT FEST PARTICIPANT INFORMATION'
            },
			 {
                extend: 'pdfHtml5',
				key: '4',
				titleAttr: 'Press 4 From KeyBoard',
                title: 'ICT FEST PARTICIPANT INFORMATION',
				orientation: 'landscape'
            },
            {
                extend: 'print',
				key: '5',
				titleAttr: 'Press 5 From KeyBoard',
                title: 'ICT FEST PARTICIPANT INFORMATION'
            }
			
        ]
    } );
} );