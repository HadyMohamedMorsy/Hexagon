let meunuActive = document.querySelectorAll('.navbar-nav li');

    meunuActive.forEach((item)=>{
    
        if(item.classList.contains("current-menu-item")){

            meunuActive.forEach((item)=>{

                item.classList.remove('active');

            })

            document.querySelector('.current-menu-item').classList.add('active');

        }



        
        
    });

    let href = String(location.href);


    if(href.includes("categories")){

        meunuActive.forEach((item)=>{

            item.classList.remove('active');

        });

        document.querySelector('.menu-item-748').classList.add('active');

    }

    if(href.includes("interior")){

        meunuActive.forEach((item)=>{

            item.classList.remove('active');

        });

        document.querySelector('.menu-item-748').classList.add('active');

    }

    if(href.includes("exterior")){

        meunuActive.forEach((item)=>{

            item.classList.remove('active');

        });

        document.querySelector('.menu-item-748').classList.add('active');

    }

    if(href.includes("construction-soulutions")){

        meunuActive.forEach((item)=>{

            item.classList.remove('active');

        });

        document.querySelector('.menu-item-748').classList.add('active');

    }







