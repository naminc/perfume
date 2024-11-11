function quickview_popup() {
    var window_size = parseFloat(jQuery('body').innerWidth());
    window_size += kt_get_scrollbar_width();
    if (window_size > 992) {
        $(document).on('click', '.quick-wiew-button', function () {
            var productId = $(this).data('id'); // Lấy id của sản phẩm
            
            // Gọi AJAX để lấy thông tin sản phẩm
            $.ajax({
                url: '/product/' + productId,
                type: 'GET',
                success: function (product) {
                    // Định dạng giá
                    let price = product.price;
                    let formattedPrice = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND', minimumFractionDigits: 0 }).format(price);
                    
                    // Xử lý nồng độ
                    let concentrationText = '';
                    switch (product.concentration.toLowerCase()) {
                        case 'edp':
                            concentrationText = 'Eau de Parfum';
                            break;
                        case 'edt':
                            concentrationText = 'Eau de Toilette';
                            break;
                        case 'edc':
                            concentrationText = 'Eau de Cologne';
                            break;
                        case 'p':
                            concentrationText = 'Parfum';
                            break;
                        default:
                            concentrationText = '';
                            break;
                    }

                    // Nội dung popup
                    var popupContent = `<div class="kt-popup-quickview ">
                        <div class="details-thumb">
                            <div class="slider-product slider-for">
                                <div class="details-item">
                                    <img src="${product.images}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="details-infor">
                            <h1 class="product-title">${product.name}</h1>
                            <div class="stars-rating">
                                <div class="star-rating">
                                    <span class="star-5"></span>
                                </div>
                                <div class="count-star">(5)</div>
                            </div>
                            <div class="availability">availability:
                                <a href="#">in Stock</a>
                            </div>
                            <div class="price">
                                <span id="priceElement">${formattedPrice}</span>
                            </div>
                            <div class="product-details-description">
                                ${product.description}
                            </div>
                            <div class="variations">
                                <div class="attribute attribute_color">
                                    <div class="color-text text-attribute">Nồng độ:
                                        <span class="concentration">${concentrationText}</span>
                                    </div>
                                </div>
                                <div class="attribute attribute_size">
                                    <div class="size-text text-attribute">Dung tích:</div>
                                    <div class="list-size list-item">
                                        <a href="#" class="active">${product.volume_ml}ml</a>
                                    </div>
                                </div>
                            </div>
                            <div class="group-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button">
                                        <a href="#">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="size-chart-wrapp">
                                    <div class="btn-size-chart">
                                        <a id="size_chart" href="{{ asset('assets/images/size-chart.jpg') }}" class="fancybox" target="_blank">View Size Chart</a>
                                    </div>
                                </div>
                                <div class="quantity-add-to-cart">
                                    <div class="quantity">
                                        <div class="control">
                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                            <input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">
                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                        </div>
                                    </div>
                                    <button class="single_add_to_cart_button button">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    
                    // Mở popup
                    $.magnificPopup.open({
                        items: {
                            src: popupContent,
                            type: 'inline'
                        },
                        callbacks: {
                            open: function() {
                                // Đảm bảo nồng độ hiển thị đúng
                                let concentrationElement = document.querySelector('.concentration');
                                if (concentrationElement) {
                                    concentrationElement.textContent = concentrationText;
                                }
                            }
                        }
                    });

                    slick_quickview_popup(); // Khởi tạo slider nếu cần
                },
                error: function () {
                    alert("Không thể tải thông tin sản phẩm.");
                }
            });

            return false;
        });
    }
}

function slick_quickview_popup() {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        infinite: true,
        prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        nextArrow: '<i class="fa fa-angle-right " aria-hidden="true"></i>',
    });
}

function kt_get_scrollbar_width() {
    var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
        $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
        inner = $inner[0],
        outer = $outer[0];
    jQuery('body').append(outer);
    var width1 = parseFloat(inner.offsetWidth);
    $outer.css('overflow', 'scroll');
    var width2 = parseFloat(outer.clientWidth);
    $outer.remove();
    return (width1 - width2);
}
