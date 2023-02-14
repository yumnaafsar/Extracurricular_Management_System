const eventContainer = [...document.querySelectorAll('.event-container')];

const preBtn = [...document.querySelectorAll('.pre-btn')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];

eventContainer.forEach((item, i) =>{
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})