function ucitajStranicu(stranica){
				var x=new XMLHttpRequest();
				x.onreadystatechange=function(){
					if(x.readyState==4 && x.status==200){
						document.open();
						document.write(x.responseText);
						document.close();
					}
				}	
				x.open("GET", stranica, true);
				x.send();
false;
                                				
			}