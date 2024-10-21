$(document).ready(init);


function init(){

    let tbl=new DataTable('#tbl', {
        ajax: '/api/employees/',
        columns:[
            {data: 'ID'},
            {data: 'Nombre'},
            {data: 'Apellido'},
            {data: 'FechaNacimiento'},
            {data: 'Cargo'},
            {data: 'Salario'}
        ]
    });




    //var tblr= new DataTable('#tbl', {
    //});

    $('#anios').select2({
        ajax: {
            url: '/api/salaries',
            dataType: 'json'
        }
    });


    $('#anios').on('select2:select', function (e){
        var data = e.params.data;
        console.log(data.text);
        let pr=parseFloat(data.text);
        tbl.ajax.url('/api/reports/'+pr).load();
    })
}
