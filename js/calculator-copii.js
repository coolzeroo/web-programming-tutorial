function catFacAdunareaNumerelor(a, b) {
	console.info("primul numar este " + a);
	console.info("al 2-lea numar este " + b);
	var max = b;
	var min = a;
	if(a > b) {
		console.info(a + " a este mai mare ca " + b);
		max = a;
		min = b;
	}
    console.info("numarul cel mai mare este " + max);
	console.info("vom numara " + min + "degetele");
	
	for(min--; min >= 0 ; min --) {
		//aici vrem sa numaram
		//min = min -1
		//min -= 1;
		//min += -1
		//min--;
		max++;
		console.info("Avem " + max + " degetele, au ramas de numarat " + min + " degetele");
}
	return max;
}

 var rezultat;

 console.info(rezultat);

 rezultat = catFacAdunareaNumerelor(3, 5);

 rezultat = catFacAdunareaNumerelor(7, 2);


//variabile locale
//var rezultat = catFacAdunareaNumerelor(3, 5);
//console.info(rezultat);

//rezultat = catFacAdunareaNumerelor(7, 2);
//console.info(rezultat);
