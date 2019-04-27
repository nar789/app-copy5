function loaddata(){
	$.post("geturl.php",{},function(data,status){
		data=decodeURIComponent(data);
		var j=JSON.parse(data);
		for(var i=1;i<=j.length;i++)
		{
			$("#url"+i).val(j[i-1].url);
		}
	});
}

function update(idx){
	var url=$("#url"+idx).val();
	
	$.post("updateurl.php",{
		no:idx,
		url:url
	},function(data,status){
		alert(data);
	})
}

window.onload=loaddata();
