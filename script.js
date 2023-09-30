

let y
let x 
let z



function plus(x,y){
    y=parseInt(prompt("please enter y"))
    x=parseInt(prompt("please enter x"))


     z=x+y

     if (z >= 10){
        console.log(  "Total is " ,  z)
     }
     else if(0<=z && z <10){
        console.log( "Total is less than 10")

     }
     else{
        console.log("total is less than 0")
     }
    
}

function minus(x,y){
     z=x-y
    
    console.log(  "Total is " ,  z)

    
}

