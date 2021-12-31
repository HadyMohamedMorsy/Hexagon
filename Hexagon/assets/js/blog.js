let specificclass = document.querySelector('.menu-item-612');
let specifiservices= document.querySelector('.menu-item-748');
let menuheader = document.querySelectorAll('.menu-header .nav-item')


    menuheader.forEach((item)=>{

        item.classList.remove('active');
    });

    specifiservices.classList.remove('active');

    specificclass.classList.add('active');

