// function checkWidth(){
//     window.innerWidth;
// }
// function hideFaixa(){
//     if (checkWidth < 916){
//         document.getElementById("faixa").style.display = "none";
//     }else{
//         document.getElementById("faixa").style.display = "flex";
//     }
// }

window.addEventListener('resize', function(event){
    var newWidth = window.innerWidth;
    var newHeight = window.innerHeight; 
});

window.resize = event => {
    if (newWidth < 916){
                document.getElementById("faixa").style.display = "none";
            }else{
                document.getElementById("faixa").style.display = "flex";
            }
  };