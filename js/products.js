let products = [{
        name: 'ENSURE BOT-12PZ 456ml',
        image1: './imagenes/unnamed-removebg-preview.png',
        image2: './imagenes/2_back_home_47_producto_advance_liquido_botella_chocolate_co-removebg-preview.png',
        old_price: '$58',
        curr_price: '$39.90'
    },
    {
        name: 'ELECTROLIT 456ml 12PZ',
        image1: './imagenes/PiSA-se-deslinda-de-medicamentos-contaminados-en-hospital-de-Tabasco-removebg-preview.png',
        image2: './imagenes/7501125144851-00-CH1200Wx1200H-removebg-preview.png',
        old_price: '$19.99',
        curr_price: '$16.59'
    },
    {
        name: 'GLUCOMETRO DX/20PZ',
        image1: './imagenes/png-clipart-blood-glucose-meters-blood-glucose-monitoring-blood-sugar-blood-lancet-onetouch-ultra-blood-miscellaneous-service-removebg-preview.png',
        image2: './imagenes/GLUCOMETRO-removebg-preview.png',
        old_price: '$1,700',
        curr_price: '$999.99'
    },
    {
        name: 'ENSURE LATA 876g.',
        image1: './imagenes/png-transparent-powdered-milk-dog-ensure-nutrient-milk-food-nutrition-eating-removebg-preview.png',
        image2: './imagenes/unnamed-removebg-preview.png',
        old_price: '$1,600',
        curr_price: '$1,199'
    },
    {
        name: 'ENALAPRIL 20g MEDIC.',
        image1: './imagenes/7501384543068-removebg-preview.png',
        image2: './imagenes/ENALAPRIL-removebg-preview.png',
        old_price: '$299.99',
        curr_price: '$199.99'
    },
    {
        name: 'FUROSEMIDA 40mg MEDIC',
        image1: './imagenes/desktop_aa39ef79-190d-4f78-84e1-03852a75941f-removebg-preview.png',
        image2: './imagenes/furosemida_40_mg_coaspharma-23027-1559932777-removebg-preview.png',
        old_price: '$356.20',
        curr_price: '$299.56'
    },

    {
        name: 'DIABETEX DIURETIC 456ml.',
        image1: './imagenes/a078e94949ee7b022edbb5b3081f412e-removebg-preview.png',
        image2: './imagenes/kisspng-diuretic-weight-loss-water-retention-dietary-suppl-weight-loss-pills-5b4f11ba54b8b8.429911711531908538347-removebg-preview.png',
        old_price: '$699.99',
        curr_price: '$599.00'
    },
    {
        name: 'FUROSEMIDA 40mg MEDIC',
        image1: './imagenes/desktop_aa39ef79-190d-4f78-84e1-03852a75941f-removebg-preview.png',
        image2: './imagenes/furosemida_40_mg_coaspharma-23027-1559932777-removebg-preview.png',
        old_price: '$356.20',
        curr_price: '$299.56'
    },
    {
        name: 'LLAVERO JEEP PLATA VIP',
        image1: './imagenes/a078e94949ee7b022edbb5b3081f412e-removebg-preview.png',
        image2: './imagenes/kisspng-diuretic-weight-loss-water-retention-dietary-suppl-weight-loss-pills-5b4f11ba54b8b8.429911711531908538347-removebg-preview.png',
        old_price: '$400',
        curr_price: '$359'
    },
]

let product_list = document.querySelector('#products')

renderProducts = (products) => {
    products.forEach(e => {
        let prod = `
            <div class="col-4 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="${e.image1}" alt="">
                        <img src="${e.image2}" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <a href="../product-detail.php" class="btn-flat btn-hover btn-shop-now">COMPRAR</a>
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
    })
}

renderProducts(products)
renderProducts(products)

let filter_col = document.querySelector('#filter-col')

document.querySelector('#filter-toggle').addEventListener('click', () => filter_col.classList.toggle('active'))

document.querySelector('#filter-close').addEventListener('click', () => filter_col.classList.toggle('active'))