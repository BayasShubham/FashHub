const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

function addtocart(cat,prd){
    let req=new XMLHttpRequest();
    req.onreadystatechange=function(){
        if(this.status==200 && this.readyState==4){
            alert(this.responseText)
        }
    }
    req.open("post","server.php?c="+cat +"&p="+prd,true)
    req.send()
}









