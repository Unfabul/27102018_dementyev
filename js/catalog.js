class Product{
    constructor(name, price, imgSrc = null, id, sale){
        this.name = name;
        this.price = price;
        this.imgSrc = imgSrc;
        this.id = id;
        this.sale = sale;
    }
    renderProduct(el){
        let productEl = document.createElement('a');
        productEl.href = `/product/?id=${this.id}`;
        productEl.classList.add('product');

        if(this.sale > 0){
            productEl.classList.add('sale');
        }

        productEl.innerHTML = `
            <div class='product__img' style='background-image:url(${(this.imgSrc == null) ? '/images/no-photo.png' : this.imgSrc})'></div>
            <div class='product__name'>${this.name}</div>
            <div class='product__price'>${this.price - this.price * this.sale} руб.</div>
        `;

        el.appendChild(productEl);
    }
}

class Catalog{
    constructor(section){
        this.section = section;
        this.el = document.querySelector('.catalog');
        this.products = [];
    }
    addProductArray(productArray){
        this.products = productArray;
    }
    render(){
        this.products.forEach((productItem)=>{
            productItem.renderProduct(this.el);
        });
    }
    empty(){
        this.products = [];
        this.el.innerHTML = '';
    }
    preloadOn(){
        this.el.classList.add('preload');
    }
    preloadOff(){
        this.el.classList.remove('preload');
    }
    renderPagination(configPagination){
        let paginationEl = document.querySelector('.pagination');

        paginationEl.innerHTML = '';

        for(let i = 1; i <= configPagination.countPage; i++){
            console.log(i);
            let div = document.createElement('div');
            div.classList.add('pagination__item');

            if(configPagination.nowPage == i){
                div.classList.add('active');
            }

            div.innerHTML = i;
            div.setAttribute('data-page', i);

            paginationEl.appendChild(div);

            let that = this;
            div.addEventListener('click', function(){
                that.load(this.getAttribute('data-page'));
            });
        }
    }
    load(page = 1){
        this.preloadOn();
        let xhr = new XMLHttpRequest();
        xhr.open('GET', `/api/catalog_handler.php?section=${this.section}&page=${page}`);
        xhr.send();

        xhr.addEventListener('load', ()=>{
            let data = JSON.parse(xhr.responseText);
            console.log(data);
            this.renderPagination(data.pagination);
            this.empty();
            data.products.forEach((product)=>{
                console.log(product);
                // catalog.addProductArray([new Product(product)]);
                let newProduct = new Product(product.name, product.price, product.photo, product.id, product.sale);
                this.products.push(newProduct);
            });

            this.render();
            this.preloadOff();
        });
    }
}

let catalog = new Catalog('man');
// catalog.addProductArray([new Product('Кроссовки', 4500, null, 1), new Product('Сапоги', 7000, '/images/shoes.jpg', 2)]);
catalog.load();
// catalog.render();

// setTimeout(()=>{
//     // catalog.empty();
//     catalog.preloadOn();
// }, 2000);

// setTimeout(()=>{
//     catalog.preloadOff();
// }, 4000);


// let boots = new Product('Кроссовки', 4500);
// let shoes = new Product('Сапоги', 7000, '/images/shoes.jpg');

// let catalogEl = document.querySelector('.catalog');

// boots.renderProduct(catalogEl);
// shoes.renderProduct(catalogEl);

// console.dir(boots);