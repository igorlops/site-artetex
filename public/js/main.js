document.addEventListener('DOMContentLoaded', function() {

    const carouselContent = document.getElementById('carouselContent')
    const dadosContent = [
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt1",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt2",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt3",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt4",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt5",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt6",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt7",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt8",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        },
        {
            image:"https://miro.medium.com/v2/resize:fit:720/format:webp/1*g09N-jl7JtVjVZGcd-vL2g.jpeg",
            title:"Helena Svelt9",
            description:"Gostei muito dos tecidos, estou muito satisfeito com os produtos"
        }
    ];

    const generateCarouselHTML = (items, itemsPerSlide) => {
        let carouselHTML = '';
        for (let i = 0; i < items.length; i += itemsPerSlide) {
            const activeClass = i === 0 ? 'active' : '';
            const slideItems = items.slice(i, i + itemsPerSlide);
            carouselHTML += `
                <div class="carousel-item ${activeClass}">
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-start gap-5">
                            ${slideItems.map(item => `
                            <div class="coments-single" style="width: 30%;display: flex; flex-direction: column;justify-content: center; text-align:center;align-items: center" >
                                <img src="${item.image}" alt="${item.title}" style="border-radius:25px;width:200px;height:200px">
                                <div class="my-5">
                                    <h4 class="" style="font-weight: 100;color: #fff;font-size:30px;text-transform:uppercase;">${item.title}</h4>
                                    <p style="font-weight:100,font-size: 20px;text-align:left;color:#fff;">${item.description}</p>
                                </div>
                            </div>
                            `).join('')}
                        </div>
                    </div>
                </div>
            `;

        }
        return carouselHTML;
    };

    const updateCarousel = () => {
        if (window.matchMedia("(max-width: 576px)").matches) {
            carouselContent.innerHTML = generateCarouselHTML(dadosContent, 1);
        } else if (window.matchMedia("(max-width: 768px)").matches) {
            carouselContent.innerHTML = generateCarouselHTML(dadosContent, 2);
        } else {
            carouselContent.innerHTML = generateCarouselHTML(dadosContent, 3);
        }
    };

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
});
