document.addEventListener('DOMContentLoaded', function() {
    const contentVideosYoutube = document.querySelectorAll('.videos-novidades > iframe')
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
            contentVideosYoutube.forEach((video) => {
                video.style.width = '300px'
                video.style.height = '150px'
            });
        } else if (window.matchMedia("(max-width: 768px)").matches) {
            carouselContent.innerHTML = generateCarouselHTML(dadosContent, 2);
            contentVideosYoutube.forEach((video) => {
                video.style.width = '400px'
                video.style.height = '200px'
            });
        } else {
            carouselContent.innerHTML = generateCarouselHTML(dadosContent, 3);
            carouselContent.innerHTML = generateCarouselHTML(dadosContent, 2);
            contentVideosYoutube.forEach((video) => {
                video.style.width = '400px'
                video.style.height = '200px'
            });
        }
    };

    window.addEventListener('resize', updateCarousel);
    updateCarousel();

});


function ativaMenu() {
    const btnMenu = document.querySelector('.btn-menu')
    const contentMenuMobile = document.querySelector('.options-mobile')

    if(contentMenuMobile.classList.contains('menu-active')) {
        contentMenuMobile.classList.remove('menu-active')
        btnMenu.innerHTML = `<i class="bi bi-list"></i>`
    } else {
        btnMenu.innerHTML = `<i class="bi bi-x-lg"></i>`
        contentMenuMobile.classList.add('menu-active')
    }
}


function formatarNumeroCelular(input) {
    // Remove todos os caracteres que não são números
    let numeroLimpo = input.value.replace(/\D/g, '');

    // Limita o número de dígitos a 11
    if (numeroLimpo.length > 11) {
        numeroLimpo = numeroLimpo.slice(0, 11);
    }

    // Verifica se o número possui um formato de celular com DDD
    if (numeroLimpo.length >= 11) {
        numeroLimpo = numeroLimpo.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    } else {
        // Formato para números sem DDD
        numeroLimpo = numeroLimpo.replace(/^(\d{5})(\d{4})$/, '$1-$2');
    }

    // Atualiza o valor do input com o número formatado
    input.value = numeroLimpo;
}
