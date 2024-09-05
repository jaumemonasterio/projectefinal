

let ap= document.getElementById("ap");
let div= document.getElementById("proves");
///let salt=document.createElement("br");

let id=0;
async function afegirsel(){
    let select=document.createElement("select");
    select.id="pro"+id;
    select.name= "pro"+id;

    let con = document.createElement("div");
   

    fetch('../includes/getprovin.php')
            .then(response => response.json())
            .then(data => { 
                //console.log(data);
                data.forEach(element => {
                    let opcio = document.createElement("option");
                    opcio.text = element.distancia +" " + element.estil;
                    opcio.value=element.id;
                    select.appendChild(opcio);
                                       
                });
            });

    let input=document.createElement("input");
    input.id="or"+id;
    input.name ="or"+id;
   con.appendChild(select);
   con.appendChild(input);
   let sexe=document.createElement("select");
    sexe.id="se"+id;
    sexe.name= "se"+id;
    fetch('../includes/sexin.php')
    .then(response => response.json())
    .then(data => { 
        //console.log(data);
        data.forEach(element => {
            let opcio = document.createElement("option");
            opcio.text = element.sexe;
            opcio.value=element.id;
            sexe.appendChild(opcio);
                               
        });
    });

    con.appendChild(sexe);

   div.appendChild(con);

   id++;

    // let opcio = document.createElement("option");
    // opcio.text = "Prova";
    // opcio.value="100ll";
    // select.appendChild(opcio);br
    // div.appendChild(select);



}

ap.onclick = function(){


    afegirsel();

};