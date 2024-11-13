@extends('layouts.app')

@section('content')
<div class="main-content main-content-details single no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Home</a>
                        </li>
                        <li class="trail-item">
                            <a href="#">{{ $nuocHoa->loaiNuocHoa->name }}</a>
                        </li>
                        <li class="trail-item trail-end active">
                     {{ $nuocHoa->name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-details full-width col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="details-product">
                        <div class="details-thumd">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom" data-zoom-image="{{ $nuocHoa->images }}"
                                     src="{{ $nuocHoa->images }}" alt="img">
                                
                            </div>
                           
                        </div>
                        <div class="details-infor">
                            <h1 class="product-title">
                           {{ $nuocHoa->name }}   [{{ $nuocHoa->volume_ml }}ml]
                            </h1>
                            <div class="stars-rating">
                                <div class="star-rating">
                                    <span class="star-5"></span>
                                </div>
                                <div class="count-star">
                                    (7)
                                </div>
                            </div>
                            <div class="availability">
                                availability:
                                <a href="#">in Stock</a>
                            </div>
                            <div class="price">
                                <span style="color:red;">{{ number_format($nuocHoa->price, 0, ',', '.') }} VND</span>
                            </div>
                            <div class="product-details-description">
                                <ul>
                                    <li>Vestibulum tortor quam</li>
                                    <li>Imported</li>
                                    <li>Art.No. 06-7680</li>
                                </ul>
                            </div>
                            <div class="variations">
                            <div class="attribute attribute_color">
                                    <div class="color-text text-attribute">Nồng độ:
                                        <span class="concentration">@if($nuocHoa->concentration == 'edp')
            Eau de Parfum
        @elseif($nuocHoa->concentration == 'edt')
            Eau de Toilette
        @elseif($nuocHoa->concentration == 'edc')
            Eau de Cologne
        @elseif($nuocHoa->concentration == 'p')
            Parfum
        @else
            <!-- Để trống nếu không có nồng độ -->
        @endif</span>
                                    </div>
                                </div>
                                <div class="attribute attribute_size">
                                    <div class="size-text text-attribute">Dung tích:</div>
                                    <div class="list-size list-item">
                                        <a href="#" class="active">{{ $nuocHoa->volume_ml }}ml</a>
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
                                        <a id="size_chart" href="assets/images/size-chart.jpg" class="fancybox">View
                                            Size Chart</a>
                                    </div>
                                </div>
                                <div class="quantity-add-to-cart">
                                    <div class="quantity">
                                        <div class="control">
                                            <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                            <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                   class="input-qty qty" size="4">
                                            <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                        </div>
                                    </div>
                                    <button class="single_add_to_cart_button button">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-details-product">
                        <ul class="tab-link">
                            <li class="active">
                                <a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Descriptions </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" aria-expanded="true" href="#information">Information </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" aria-expanded="true" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-container">
                            <div id="product-descriptions" class="tab-panel active">
                                <p>
                                    Quisque quis ipsum venenatis, fermentum ante volutpat, ornare enim.
                                    Phasellus molestie risus non aliquet cursus.
                                    Integer
                                    vestibulum mi lorem, id hendrerit ante lobortis non.
                                    Nunc ante ante, lobortis non pretium non, vulputate vel nisi.
                                    Maecenas dolor elit, fringilla nec turpis ac, auctor vulputate nulla. Phasellus sed
                                    laoreet velit.
                                </p>
                                <p>
                                    Proin fringilla urna vel mattis euismod.
                                    Etiam sodales, massa non tincidunt iaculis, mauris libero scelerisque justo, ut
                                    rutrum lectus urna sit amet quam.
                                    Nulla maximus vestibulum mi vitae accumsan.
                                </p>
                            </div>
                            <div id="information" class="tab-panel">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Size</td>
                                        <td> XS / S / M / L</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>White/ Black/ Teal/ Brown</td>
                                    </tr>
                                    <tr>
                                        <td>Properties</td>
                                        <td>Colorful Dress</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="reviews" class="tab-panel">
                                <div class="reviews-tab">
                                    <div class="comments">
                                        <h2 class="reviews-title">
                                            1 review for
                                            <span>Glorious Eau</span>
                                        </h2>
                                        <ol class="commentlist">
                                            <li class="conment">
                                                <div class="conment-container">
                                                    <a href="#" class="avatar">
                                                        <img src="assets/images/avartar.png" alt="img">
                                                    </a>
                                                    <div class="comment-text">
                                                        <div class="stars-rating">
                                                            <div class="star-rating">
                                                                <span class="star-5"></span>
                                                            </div>
                                                            <div class="count-star">
                                                                (1)
                                                            </div>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="author">Cobus Bester</strong>
                                                            <span>-</span>
                                                            <span class="time">June 7, 2013</span>
                                                        </p>
                                                        <div class="description">
                                                            <p>Simple and effective design. One of my favorites.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="review_form_wrapper">
                                        <div class="review_form">
                                            <div class="comment-respond">
                                                <span class="comment-reply-title">Add a review </span>
                                                <form class="comment-form-review">
                                                    <p class="comment-notes">
                                                        <span class="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked
                                                        <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <label>Your rating</label>
                                                        <p class="stars">
                                        						<span>
                                        							<a class="star-1" href="#"></a>
                                        							<a class="star-2" href="#"></a>
                                        							<a class="star-3" href="#"></a>
                                        							<a class="star-4" href="#"></a>
                                        							<a class="star-5" href="#"></a>
                                        						</span>
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-comment">
                                                        <label>
                                                            Your review
                                                            <span class="required">*</span>
                                                        </label>
                                                        <textarea title="review" id="comment" name="comment" cols="45"
                                                                  rows="8"></textarea>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <label>
                                                            Name
                                                            <span class="">*</span>
                                                        </label>
                                                        <input title="author" id="author" name="author" type="text"
                                                               value="">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label>
                                                            Email
                                                            <span class="">*</span>
                                                        </label>
                                                        <input title="email" id="email" name="email" type="email"
                                                               value="">
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                               value="Submit">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: left;"></div>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="product-detail">
    <h1>{{ $nuocHoa->name }}</h1>
    <img src="{{ $nuocHoa->images }}" alt="{{ $nuocHoa->name }}">
    <p>Giá: {{ number_format($nuocHoa->price, 0, ',', '.') }} VND</p>
    <p>Mô tả: {{ $nuocHoa->description }}</p>
    <p>Nồng độ: {{ $nuocHoa->concentration }}</p>
    <p>Dung tích: {{ $nuocHoa->volume_ml }} ml</p>
</div> -->
@endsection
