window.onload = function(){
    let url = location.href;

    let partner = document.querySelectorAll('.buttons-area');

    partner.forEach((item)=>{

        if(item.getAttribute('data-click') == url){

            item.classList.add('active');
        }


    });

    
}