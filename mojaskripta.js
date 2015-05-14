var boolIme=false;
var boolPoruka=false;
var boolMail=false;

function resetuj(){
	document.forms["mojaForma"]["ime"].value="";
	document.forms["mojaForma"]["mail"].value="";
	document.forms["mojaForma"]["naslov"].value="";
	document.forms["mojaForma"]["poruka"].value="";
	document.forms["mojaForma"]["ime"].style.background="#FFFFFF";
	document.forms["mojaForma"]["mail"].style.background="#FFFFFF";
	document.forms["mojaForma"]["poruka"].style.background="#FFFFFF";
	document.getElementById('uzv1').style.opacity=0;
	document.getElementById('uzv2').style.opacity=0;
	document.getElementById('uzv3').style.opacity=0;
	document.getElementById('alert1').innerHTML="";
	document.getElementById('alert2').innerHTML="";
	document.getElementById('alert3').innerHTML="";
	boolIme=false;
	boolPoruka=false;
}

function validateForm(){
	var b=document.forms["mojaForma"]["dugme"];
	var naslovValue=document.forms["mojaForma"]["naslov"].value;
//	if(naslovValue=="Tražim informaciju" && !boolMail) return false;
	if(boolIme && boolPoruka) return true;
	else return false;
	}


function provjeriIme(){
	var x=document.forms["mojaForma"]["ime"];
	var imeRegEx=/^[a-zA-ZčćžšđČĆŽŠĐ]+[ ][a-zA-ZčćžšđČĆŽŠĐ]+$/;
	var alertIme=document.getElementById("alert1");
	if(!imeRegEx.test(x.value)){
		x.style.background="#FFE6E6";
	 	document.getElementById('uzv1').style.opacity=1.0;
	 	boolIme=false;
	 	alertIme.innerHTML="Greška!";
	 	validateForm();
	}
	else{
		x.style.background="#EAFEEA";
		document.getElementById('uzv1').style.opacity=0;
		boolIme=true;
		alertIme.innerHTML="";
		validateForm();
	}									
}

function provjeriMail(){
	var x=document.forms["mojaForma"]["mail"];
	var mejlRegEx=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
	var alertMail=document.getElementById("alert2");
	if(!mejlRegEx.test(x.value)){
		x.style.background="#FFE6E6";
		document.getElementById('uzv2').style.opacity=1.0;
		alertMail.innerHTML="Pogrešan e-mail!";
		boolMail=false;
		
	}
	else{
		x.style.background="#EAFEEA";
		document.getElementById('uzv2').style.opacity=0;
		alertMail.innerHTML="";
		boolMail=true;
	}
}

function blankoZnakovi(string){
	for (var i = 0; i < string.length; i++) {
		if(string[i]!=' ') return true;
		return false;
	};
}

function provjeriPoruku(){
	var x=document.forms["mojaForma"]["poruka"];
	var alertPoruka=document.getElementById("alert3");
	if(x.value=="" || !blankoZnakovi(x.value)){
		x.style.background="#FFE6E6";
		document.getElementById('uzv3').style.opacity=1.0;
		boolPoruka=false;
		alertPoruka.innerHTML="Napišite poruku!";
		validateForm();
	}
	else{
		x.style.background="#EAFEEA";
		document.getElementById('uzv3').style.opacity=0;
		boolPoruka=true;
		alertPoruka.innerHTML="";
		validateForm();
	} 
} 