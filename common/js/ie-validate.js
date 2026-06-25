// Function to check browser less than IE 9
var location_path = "/browser-upgrade/";
var ie = document.documentMode;
/*var ie = (function(){
	var undef,
	v = 3,
	div = document.createElement('div'),
	all = div.getElementsByTagName('i');
	while (
		div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
		all[0]
	);
	return v > 4 ? v : undef;
}());*/
if(ie != undefined && ie < 9){
	if(window.location.pathname != location_path){
		window.location.href = location_path;
	}
}/*else{
	if(window.location.pathname == location_path){
		window.location.href = "/";
	}
}*/