function changeModels(val) {
	var Audi = ['100','200','50','60','80','A1','A2','A3','A4','A4 Allroad','A5','A6','A6 Allroad','A7','A8','Q2','Q3','Q5','Q7','Q8','Quattro','S3','S4','S5','S6','S7','S8','Rs3','Rs4','Rs5','Rs6','Rs7','Tt','E-Tron'];
	var BMW = ['220 D','225','228','230','235','240','315','316','318','320','323','324','325','328','330','KOSMOS','340','420','428','430','435','440','435','440','518','520','525','530','KOSMOSx2','540','545','550'];
	var Benz = ['C 160','C 180','C 200','C 220','C 230','C 240','C 250','C 270','C 280','E 200','E 220','E 230','E 240','E 250','E 260','E 270','E 280','E 300','E 320','E 350','E 400','E 420','E 430','E 450','S 250','S 280','S 300','S 320','S 350','S 400','S 420','S 430','S 450','S 500'];
	var Opel = ['Adam','Admiral','Agila','Ampera','Antara','Ascona','Astra','Calibra','Campo','Cascada','Combo','Commodore','Corsa','Crossland X','Frontera','Insignia','Kadett','Kapitaen','Karl','Manta','Meriva','Mokka','Monterey','Omega','Signum','Tigra','Vectra','Zafira'];
	var Seat = ['Alhambra','Altea','Arona','Arosa','Ateca','Cordoba','Cupra','Exeo','Fura','Ibiza','Inka','Leon','Malaga','Marbella','Mii','Ronda','Tarraco','Terra','Toledo','Vario'];
	var Skoda = ['100','1000','105','120','130','135','136','Citigo','Fabia','Favorit','Felicia','Forman','Karoq','Kodiaq','Octavia','Praktik','Rapid','Roomster','Scala','Superb','Yeti'];
	var VW = ['1200','1300','1302','1303','1500','1600','Alltrack','Amarok','Arteon','Atlas','Bora','Caddy','Corrado','Derby','Eos','Fox','Golf','Golf Plus','Golf Variant','Jetta','K 70','Karmann-ghia','Lupo','Multivan','New beetle','Passat','Phaeton','Polo','Rabbit','Santana','Scirocco','Sharan','Sportsvan','T-Cross','T-Roc','Taro','Tiguan','Touareg','Touran','Up','Vento'];
	var temp = [];
	var select = document.getElementById("car");
	var modelList = document.getElementById("model");
	if(val.localeCompare("all")==0){
		modelList.options.length = 0;
	}
	else{
		if(val.localeCompare("Audi")==0){
			temp = Audi.slice();
		}
		if(val.localeCompare("BMW")==0){
			temp = BMW.slice();
		}
		if(val.localeCompare("Mercedes-Benz")==0){
			temp = Benz.slice();
		}
		if(val.localeCompare("Opel")==0){
			temp = Opel.slice();
		}
		if(val.localeCompare("Seat")==0){
			temp = Seat.slice();
		}
		if(val.localeCompare("Skoda")==0){
			temp = Skoda.slice();
		}
		if(val.localeCompare("VW")==0){
			temp = VW.slice();
		}
		modelList.options.length =0;
		for(var i = 0; i < temp.length; i++) {
		    var opt = temp[i];
		    var el = document.createElement("option");
		    el.textContent = opt;
		    el.value = opt;
		    modelList.appendChild(el);
		}
	}
}