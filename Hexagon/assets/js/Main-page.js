let uploadfile  =  document.querySelector('.Browse');
let upload      =  document.querySelector('.upload');

uploadfile.addEventListener('click',function(){

    upload.click();
});

let parentelementsImg = document.querySelectorAll('.parent-elements .img');
let white = document.querySelector('.white');

window.addEventListener('load',function(){
        parentelementsImg.forEach(function(item) {
            item.style.transform = "translate(0,0)";
    });

    white.style.backgroundColor = "transparent";
    white.style.zIndex  = "0";
});

let specificinput = document.querySelector('.specific-input');

specificinput.setAttribute('disabled', true);


let count = 0;


let carouselimages = document.querySelectorAll('.carousel-images img');


let right = document.querySelector('.right');

let left = document.querySelector('.left');

let curoselpointer = document.querySelectorAll('.curosel-pointer .pointer');


right.addEventListener('click',function(){

    carouselimages.forEach((item)=>{

         item.classList.remove('active');
    });

    curoselpointer.forEach((item)=>{

        item.classList.remove('active');

    });

    count++;

    if(count > carouselimages.length - 1){

        count = 0;
    }

    carouselimages[count].classList.add('active');

    curoselpointer[count].classList.add('active');


});

left.addEventListener('click',function(){

    carouselimages.forEach((item)=>{

        item.classList.remove('active');
   })

   curoselpointer.forEach((item)=>{

        item.classList.remove('active');

    });

    count--;

    if(count < 0){

        count =  carouselimages.length - 1;
    }


    carouselimages[count].classList.add('active');

    curoselpointer[count].classList.add('active');



});


curoselpointer.forEach((item)=>{

    item.addEventListener('click',function(){

            curoselpointer.forEach((item)=>{

                item.classList.remove('active');
    
            });


            item.classList.add('active');


            carouselimages.forEach((item)=>{

                item.classList.remove('active');
           })


            carouselimages[item.getAttribute('date-images')].classList.add('active');


    });


});

setInterval(() => {

    right.click();

}, 3000);




let animationscroll = document.querySelectorAll('.animation-scroll');


window.addEventListener('scroll',()=>{

    animationscroll.forEach((item)=>{

        let contentPosition = item.getBoundingClientRect().top;

        let screenposition = window.innerHeight;

        if(contentPosition < screenposition){

            item.classList.add('active');

        }else{

            item.classList.remove('active');
        }

    });
});

function myFunction() {
    var elmnt = document.getElementById("content");
    elmnt.scrollIntoView({
        behavior: 'smooth'
    });
  }

let parentelements = document.querySelectorAll('.parent-elements .img');


parentelements.forEach((item)=>{

    let finalselectimges = item.querySelector('.click');


    finalselectimges.addEventListener('click',function(){

        let linkhere = finalselectimges.parentElement.getAttribute('data-link');

        if(linkhere == "Home"){

            document.querySelector('.spicif-home').style.display = "block";

            setTimeout(() => {

                document.getElementById('header').style.display = "none";
                
            }, 1000);

            myFunction();

        }else{

            window.open(linkhere);
        }



        
        

    })

})


function setactive(x){
    
    x.parentElement.classList.add('active');

}

function moveactiive(x){

    x.parentElement.classList.remove('active');
}

let arrclass = ['.one','.two','.three'];

arrclass.forEach((item)=>{

    let selected = document.querySelectorAll(item);

    selected.forEach((item)=>{


        let select = item.querySelector('.header-images');

        item.addEventListener('click',function(){

            select.click();
        });

    })



})