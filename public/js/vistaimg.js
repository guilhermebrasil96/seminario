
let vista = (event)=>{
    
    let leer_img = new FileReader();
       leer_img.readAsDataURL(event.target.files[0]);
    let id_img = document.getElementById('img-foto');
     leer_img.onload = ()=>{
    
        
        if(leer_img.readyState == 2){
    
            id_img.src = leer_img.result
    
        }
     
    
     }
    
    }
    