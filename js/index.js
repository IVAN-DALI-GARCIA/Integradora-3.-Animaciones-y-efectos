let slide_index = 0
let slide_play = true
let slides = document.querySelectorAll('.slide')

hideAllSlide = () => {
    slides.forEach(e => {
        e.classList.remove('active')
    })
}

showSlide = () => {
    hideAllSlide()
    slides[slide_index].classList.add('active')
}

nextSlide = () => slide_index = slide_index + 1 === slides.length ? 0 : slide_index + 1

prevSlide = () => slide_index = slide_index - 1 < 0 ? slides.length - 1 : slide_index - 1

// pause slide cuando esta en hover slider

document.querySelector('.slider').addEventListener('mouseover', () => slide_play = false)

// habilitar slide cuando mouse sale de slider
document.querySelector('.slider').addEventListener('mouseleave', () => slide_play = true)

// slider control

document.querySelector('.slide-next').addEventListener('click', () => {
    nextSlide()
    showSlide()
})

document.querySelector('.slide-prev').addEventListener('click', () => {
    prevSlide()
    showSlide()
})

showSlide()
    //pruebas
    // setInterval(() => {
    //     if (!slide_play) return
    //     nextSlide()
    //     showSlide()
    // }, 3000);

//render products se duplican en banner

let products = [{
        name: 'COCINA MEDITERRANEA',
        image1: './images/DIA-DE-LA-DIETA-MEDITERRANEA.jpeg',
        image2: './images/imagene-de-comida.jpg',
        old_price: '$58',
        curr_price: '$39.90'
    },
    {
        name: 'COCINA MEXICANA',
        image1: './images/índice.png',
        image2: './images/P01_Tamales_pulacles.png',
        old_price: '$19.99',
        curr_price: '$16.59'
    },
    {
        name: 'COCINA ITALIANA',
        image1: './images/fitnes food 2.jpg',
        image2: './images/siete-claves-para-ofrecer-platos-saludables-atractivos-a-los-comensales.jpg',
        old_price: '$1,700',
        curr_price: '$999.99'
    },
    {
        name: 'COCINA JAPONESA',
        image1: './images/istockphoto-648595276-612x612.jpg',
        image2: './images/comida-japonesa.jpg',
        old_price: '$1,600',
        curr_price: '$1,199'
    },
    {
        name: 'POSTRES FRIOS',
        image1: './images/avatar_d89178bc9207804_908ba1b0b1e81bf086dd2d6ee67d4571ac281adb.png',
        image2: './images/43120216_m-696x464.jpg',
        old_price: '$299.99',
        curr_price: '$199.99'
    },
    {
        name: 'PASTELES SABORES',
        image1: './images/logo_favicon_cocina_facil.png',
        image2: './images/postres.jpg',
        old_price: '$356.20',
        curr_price: '$299.56'
    },
    {
        name: 'ENSADAS FIT',
        image1: './images/95825094-menú-de-barra-de-ensaladas-logotipo-emblema-y-símbolo-composición-de-letras-con-imagen-de-boceto-de-.webp',
        image2: './images/cdn-3.expansion.mx.webp',
        old_price: '$699.99',
        curr_price: '$599.00'
    },
]

let product_list = document.querySelector('#latest-products')
let best_product_list = document.querySelector('#best-products')

products.forEach(e => {
    let prod = `
        <div class="col-3 col-md-6 col-sm-12">
            <div class="product-card">
                <div class="product-card-img">
                    <img src="${e.image1}" alt="">
                    <img src="${e.image2}" alt="">
                </div>
                <div class="product-card-info">
                    <div class="product-btn">
                        <button class="btn-flat btn-hover btn-shop-now">TOMAR AHORA</button>
                        <button class="btn-flat btn-hover btn-cart-add">
                            <i class='bx bxs-cart-add'></i>
                        </button>
                        <button class="btn-flat btn-hover btn-cart-add">
                            <i class='bx bxs-heart'></i>
                        </button>
                    </div>
                    <div class="product-card-name">
                        ${e.name}
                    </div>
                    <div class="product-card-price">
                        <span><del>${e.old_price}</del></span>
                        <span class="curr-price">${e.curr_price}</span>
                    </div>
                </div>
            </div>
        </div>
    `

    product_list.insertAdjacentHTML("beforeend", prod)
    best_product_list.insertAdjacentHTML("afterbegin", prod)
})