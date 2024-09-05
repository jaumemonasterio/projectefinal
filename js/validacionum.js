

let telefon = document.getElementById("telefon");

telefon.addEventListener("keyup" , function(e){
 
    let sim = e.key;
 console.log(sim);
   let tel= telefon.value
    console.log("tel anterior"+tel);

  if(isNaN(sim) || sim.trim()==''){
    console.log("no num");
   let te=tel.length; //agafo la longitud del telefon
    tele=tel.slice(0,te-1); //elimino el darrer
    console.log("tel sense ultim caracter: "+tele)
    telefon.value=tel.slice(0,te-1); //elimino el darrer


  } else{
   //telefon.value+=sim
      console.log(sim)
  }

})