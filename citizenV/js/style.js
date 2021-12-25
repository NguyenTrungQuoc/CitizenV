const $=document.querySelector.bind(document);
const $$=document.querySelectorAll.bind(document);

const Btnleft=$(".content_board-zin.left");
const Btnright=$(".content_board-zin.right");
const Imgheader=$$(".img_header");
const Boardimg=$(".content_board-img")
// var Dataindex=document.getAttribute("data-index")[1].value;
var index=0;
// console.log(Dataindex)
const Lenghtimgs=Imgheader.length;
var Widthimg=0;
Btnright.onclick=function(){
    index++;  
    setTimeout(() => {
        if(index<Lenghtimgs){
            Widthimg-=Imgheader[0].offsetWidth;
            Boardimg.style.transform=`translateX(${Widthimg}px)`;
        }
        else{
            index=Lenghtimgs-1;
        }
    }, 200);
}
Btnleft.onclick=function(){
    index--   
    setTimeout(() => {
        if(index>=0){
            Widthimg+=Imgheader[0].offsetWidth;
            Boardimg.style.transform=`translateX(${Widthimg}px)`;
        }
        else{
            index=0;
        }
    }, 200);
    
}
