
function loadTable(){
	var code=$('#roles').val();



$.ajax({
url:'http://localhost:8000/admin/ajaxData',
type:'POST',
headers:{'X-CSRF-TOKEN':$('#_token').val()},
data:'id='+code
}).done(function(datos){
	
	$('#nombre').val(datos.nombre);
	var data=datos.data;
	var tbody="";
	for(var key in data ){
		object=data[key];
		tbody+="<tr><td>"
				+object.id+"</td> <td>"
				+object.nombre+"</td></tr>"
	
	}
	$('#tbody').html(tbody);
	
});

}