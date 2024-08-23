<!-- Модальное окно -->
<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <div class="top">
            <h1>BASKET</h1>
            <button class="md-close">
                <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
        </div>
        <div class="modal_container">
            <div class="products">
                <div class="product">
                    <div class="image">
                        <img src="./assets/img/m2.jpg" alt="">
                    </div>
                    <div class="other">
                        <div class="name">
                            <div class="product_name">5.11® A/T™ Mid Boot</div>
                            <div class="colors">
                                <div class="color" style = "background: #D9D9D9;"></div>
                                <div class="color" style = "background: black;"></div>
                            </div>
                        </div>
                        <div class="price">
                            <div class="block">
                                <div class="original_price">€149.00</div>
                                <div class="discount_price">€112.00</div>
                            </div>
                            <div class="quantity_inner">        
                                <button class="bt_minus">-</button>
                                <input type="text" class="quantity" value="1" data-max-count="999">
                                <button class="bt_plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        </div>
        <div class="bot">
            <button id="modal_close"><span>continue shopping</span></button>
            <a href="basket.php"><span>to order</span></a>
        </div>
    </div>
</div>
<script>
    const modalCloseButton = document.getElementById('modal_close');
    const modal1 = document.getElementById('modal-1');

    modalCloseButton.addEventListener('click', function () {
        modal1.classList.remove('md-show');
    });
</script>
<!-- Конец модального окна -->

<div class="md-overlay"></div>