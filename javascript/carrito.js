let mas = frmCar.mas;
let menos =  frmCar.menos;
let cantidad = frmCar.txtCant;

mas.addEventListener("click",()=>{
    let numstr = cantidad.value;
    let num = parseFloat(numstr);
    num++;
    cantidad.value = num;    
});
menos.addEventListener("click",()=>{
    let numstr = cantidad.value;
    let num = parseFloat(numstr);
    if(num == 1){
        return
    }else{
        num--;
        cantidad.value = num;
    }
})