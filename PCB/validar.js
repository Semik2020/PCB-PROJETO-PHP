function validar(){  
	var teste = ['1','2','3','4','5','6','7','8','9','10','11','12']

	for (var i = 0; i <= 12; i++) {
	 	if(document.getElementById(teste[i]).value == ""){
   		alert("Esse campo é obrigatório " + i)
   		return false
   }
 } 
   
}  