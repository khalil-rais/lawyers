var $=jQuery.noConflict();

$(document).ready(function(){	$firm_list = $("input[type=hidden][name=firm_mapping]");
	var firm_table = $firm_list.val();

	$("#wla-firm-search input[name=op]").attr("disabled", true);	$("#wla-firm-search--2 input[name=op]").attr("disabled", true);		var firm_table = $firm_list.val().split(/\|/g);
	var lista=[];
	for(i=0;i<firm_table.length;i++){
		firm_id = firm_table[i].split(/_/)[0];		country_id = firm_table[i].split(/_/)[1];		firm_name = firm_table[i].split(/_/)[2];		var firm = {firm_id:firm_id, country_id:country_id, firm_name:firm_name}; 		lista.push (firm);	}	
	$('#edit-firm').change(function(){
		if (this.value!=0){
			$("#wla-firm-search input[name=op]").attr("disabled", false);
			for(i=0;i<lista.length;i++){
				if (lista[i].firm_id ==this.value ){
					$("#edit-country").val(lista[i].country_id);
				}
			}			
		}
		else{
			$("#wla-firm-search input[name=op]").attr("disabled", true);
			$("#edit-country").val(0);
		}
	});		/*Identique avec la --2*/	$('#edit-firm--2').change(function(){		if (this.value!=0){			$("#wla-firm-search--2 input[name=op]").attr("disabled", false);			for(i=0;i<lista.length;i++){				if (lista[i].firm_id ==this.value ){					$("#edit-country--2").val(lista[i].country_id);				}			}					}		else{			$("#wla-firm-search--2 input[name=op]").attr("disabled", true);			$("#edit-country--2").val(0);		}	});			
	$('#edit-country').change(function(){	
		$("#edit-firm").empty();
		console.log (this.value);
		if (this.value!=0){
			$("#wla-firm-search input[name=op]").attr("disabled", false);
			for(i=0;i<lista.length;i++){
				if (lista[i].country_id ==this.value ){
					$("#edit-firm").append('<option value='+lista[i].firm_id+'>'+lista[i].firm_name+'</option>');
				}
			}
			if ($('#edit-firm').children('option').length >1 ){
				$("#edit-firm").append('<option value=0>Select Any</option>');
			}
		}
		else{
			$("#wla-firm-search input[name=op]").attr("disabled", true);
			$("#edit-firm").append('<option value=0>Select All</option>');
			for(i=0;i<lista.length;i++){
				if (!($("#edit-firm").children().text().match(lista[i].firm_name))){
					$("#edit-firm").append('<option value='+lista[i].firm_id+'>'+lista[i].firm_name+'</option>');
				}
			}			
		}
	});	/*Identique avec la --2*/	$('#edit-country--2').change(function(){			$("#edit-firm--2").empty();		console.log (this.value);		if (this.value!=0){			$("#wla-firm-search--2 input[name=op]").attr("disabled", false);			for(i=0;i<lista.length;i++){				if (lista[i].country_id ==this.value ){					$("#edit-firm--2").append('<option value='+lista[i].firm_id+'>'+lista[i].firm_name+'</option>');				}			}			if ($('#edit-firm--2').children('option').length >1 ){				$("#edit-firm--2").append('<option value=0>Select Any</option>');			}		}		else{			$("#wla-firm-search--2 input[name=op]").attr("disabled", true);			$("#edit-firm--2").append('<option value=0>Select All</option>');			for(i=0;i<lista.length;i++){				if (!($("#edit-firm--2").children().text().match(lista[i].firm_name))){					$("#edit-firm--2").append('<option value='+lista[i].firm_id+'>'+lista[i].firm_name+'</option>');				}			}					}	});
});