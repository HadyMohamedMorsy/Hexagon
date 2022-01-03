// animation
let animation = bodymovin.loadAnimation({
    container : document.getElementById('anim'),
    rederer : 'svg',
    loop : true,
    autoplay : true,
    path : 'https://hexagon-eg.com/wp-content/themes/Hexagon/data.json'
})


setTimeout(() => {
    let anim = document.querySelector('.content-animation');

    anim.style.display = "none";
}, 3000);