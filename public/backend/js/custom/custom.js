const updateForm = document.querySelector('#update-form-id')
const updatebtn = document.querySelectorAll('#update-btn')
const updateName = document.querySelector('#update-form-name')
const updateDesc = document.querySelector('#update-form-desc')
const updatePrice = document.querySelector('#update-form-price')
const updateCategory = document.querySelectorAll('#update-form-category option')
const updateBrand = document.querySelectorAll('#update-form-brand option')
const updateContent = document.querySelector('#update-form-content')
const updateImage = document.querySelector('#update-form-image')
const checkSectionProduct = document.querySelector('#kt_content').classList.contains('product-list');


updatebtn.forEach((e) => {
    e.addEventListener('click', () => {
        const idCategoryProduct = e.querySelector('#id_product').getAttribute('value');
        const nameCategoryProduct = e.querySelector('#name_product').getAttribute('value');
        const descCategoryProduct = e.querySelector('#desc_product').getAttribute('value');

        updateForm.setAttribute('value', idCategoryProduct)
        updateName.setAttribute('value', nameCategoryProduct)
        updateDesc.innerText = descCategoryProduct

        if (checkSectionProduct) {
            const CategoryProduct = e.querySelector('#category_product').getAttribute('value');
            const BrandProduct = e.querySelector('#brand_product').getAttribute('value');
            const priceProduct = e.querySelector('#price_product').getAttribute('value');
            const imageProduct = e.querySelector('#image_product').getAttribute('value');
            const contentProduct = e.querySelector('#content_product').getAttribute('value');
            console.log(priceProduct);
            updateCategory.forEach(function(cate) {
                if (cate.innerText.trim() == CategoryProduct) {
                    cate.selected = 'selected'
                }
            })
            updateBrand.forEach(function(brand) {
                    if (brand.innerText.trim() == BrandProduct) {
                        brand.selected = 'selected'
                    }
                })
                // {{url('uploads/product/'.$pro->product_image)}} /uploads/product/blog-post-167.jpeg
            updatePrice.setAttribute('value', priceProduct)
            updateContent.setAttribute('value', contentProduct)
            updateImage.setAttribute('src', "/uploads/product/" + imageProduct)
        }
    })
})