let buttonincludeimages = document.querySelectorAll('.no-gutters .buttons-area');

let partnerall = document.querySelectorAll('.About-all-hex .partnerall');


buttonincludeimages.forEach((item)=>{

    item.addEventListener('click',function(){

        buttonincludeimages.forEach(item=>{
            
            item.classList.remove('active');

        });

        item.classList.add('active');


        
        use();

        let databutton = item.querySelector('.content-btn');

        let finalselect =   databutton.firstElementChild.getAttribute('data-ask');

        console.log(finalselect);

        partnerall.forEach((item)=>{

            item.classList.remove('active');
        })
        
        document.querySelector(finalselect).classList.add('active');

    });

});


use();



function use(){

    buttonincludeimages.forEach((item)=>{

        if(item.classList.contains('active')){
            
        let click =  document.querySelectorAll(item.getAttribute('data-click'));
    
        click.forEach((item)=>{
    
            item.classList.add('d-flex');
        })
    
        }else{

            let spicific = document.querySelectorAll(item.getAttribute('data-click'));

            spicific.forEach((item)=>{
                
                item.classList.remove('d-flex');
    
            })
        }
    
    });
}




