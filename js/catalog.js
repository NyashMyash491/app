 let PRODUCTS_NAMES = ['product1', 'product2', 'product3', 'product4', 
 'product5', 'product6', 'product7', 'product8','product9']
 let PRICES = [100, 150, 200, 250, 300, 350, 400, 450, 500]
 let IDS = [0, 1, 2, 3, 4, 5, 6, 7,8]
 let IMGS = ['static/img/mango_product1.png','static/img/mango_product2.png','static/img/mango_product3.png',
 'static/img/mango_product4.png','static/img/mango_product5.png','static/img/mango_product6.png',
 'static/img/mango_product7.png','static/img/mango_product8.png','static/img/mango_product9.png']

 let catalog = {
    items: [],
    container: '.mango_people_product',
    cart: null,
    construct (cart) {
        this.cart = cart
        this._init ()
    },
    _init () {
        this._shuffle(IMGS)
        this._handleData ()
        this.render ()
        this._handleEvents ()
    },
    _random(n) {
        return Math.floor(Math.random() * Math.floor(n));
    },
    _shuffle (imgs) {
        for (let i = 0; i < imgs.length; i++) {
            let j = this._random(imgs.length);
            let k = this._random(imgs.length);
            let t = imgs[j];
            imgs[j] = imgs[k];
            imgs[k] = t;
          }
          return imgs;
    },
    _handleEvents () {
        document.querySelector (this.container).addEventListener ('click', (evt) => {
            if (evt.target.name === 'buy-btn') {
                this.cart.addProduct (evt.target)
            }
        })
    },
    _handleData () {
        for (let i = 0; i < IDS.length; i++) {
            this.items.push (this._createNewProduct (i))
        }
    },
    _createNewProduct (index) {
        return {
            product_name: PRODUCTS_NAMES [index],
            price: PRICES [index],
            id_product: IDS [index],
            img: IMGS [index]
        }
    },
    render () {
        let str = ''
        this.items.forEach (item => {
            str += `
            <div class="mango_person mango_person_product">
            <a href="singlepage.php"><button class="add__btn"><img class="mango_image" src="${item.img}" alt="${item.product_name}"></button></a>
            <div class="product_name">
                    <div class="mango_text">${item.product_name}</div>
                    <p class="mango_red">$<span class="item__price">${item.price}</span></p>
                    <button 
                        class="buy-btn" 
                        name="buy-btn"
                        data-name="${item.product_name}"
                        data-price="${item.price}"
                        data-id="${item.id_product}"
                        >Add to cart</button>
                </a>
            </div>
        </div>
            `
        })
        document.querySelector(this.container).innerHTML = str
     }
 }

 let cart = {
    items: [],
    total: 0,
    sum: 0,
    container: '.drop_cart',
    quantityBlock: document.querySelector ('#quantity'),
    priceBlock: document.querySelector ('#price'),
    construct () {
        this._init ()
    },
    _init () {
        this._handleEvents ()
    },
    _handleEvents () {
        document.querySelector (this.container).addEventListener ('click', (evt) => {
            if (evt.target.name === 'del-btn') {
                this.deleteProduct (evt.target)
            }
        })
    },
    addProduct (product) {
        let id = product.dataset['id']
        let find = this.items.find (product => product.id_product === id)
        if (find) {
            find.quantity++
        } else {
            let prod = this._createNewProduct (product, id)
            this.items.push (prod)
        }
         
        this._checkTotalAndSum ()
        this.render ()
    },
    _createNewProduct (prod, index) {
        return {
            product_name: prod.dataset['name'],
            price: prod.dataset['price'],
            id_product: prod.dataset['id'],
            quantity: 1,
            img: IMGS [index],
        }
    },
    deleteProduct (product) {
        let id = product.dataset['id']
        let find = this.items.find (product => product.id_product === id)
        if (find.quantity > 1) {
            find.quantity--
        } else {
            this.items.splice (this.items.indexOf(find), 1)
        }
         
        this._checkTotalAndSum ()
        this.render ()
    },
    
    _checkTotalAndSum () {
        let qua = 0
        let pr = 0
        this.items.forEach (item => {
            qua += item.quantity
            pr += item.price * item.quantity
        })
        this.total = qua
        this.sum = pr
    },
    render () {
        let itemsBlock = document.querySelector (this.container).querySelector ('.drop_flex_c')
        let str = ''
        this.items.forEach (item => {
            str += `
            <div class="cart-item" data-id="${item.id_product}">
            <img class="cart__img" width="100px", height="130px" src="${item.img}" alt="${item.product_name}">
                    <div class="product-desc">
                            <div class="item_text">
                                <h1 class="item_h1">${item.product_name}</h1>
                                    <div class="number_price">
                                        <span class="">${item.quantity}</span>
                                        <span class="x">x</span>
                                        <span class="">${item.price}</span>
                                        <div class="del__btns">
                                        <button name="del-btn" class="cross" onclick="checkCross()" data-id="${item.id_product}">&times</button>
                                    </div>
                                    </div>
                            </div>
                    </div>
                </div>
                    `
        })

        let str1 = ''
        if(str) {
            str1 += `
            <a href="checkout.php">
                        <div class="cart_button">Check Out</div>
                    </a>
                    <a href="cart.php">
                        <div class="go_to_cart">GO TO CART</div>
                    </a>
            `
        }

        itemsBlock.innerHTML = str + str1
        this.quantityBlock.innerText = this.total
        this.priceBlock.innerText = this.sum
    }
 }
 catalog.construct (cart)
 cart.construct ()