<?php include 'header.php'; ?>

            <main class="site__body">
                <div class="category-layout">
                    <div class="container">
                        <div class="row">                       
                            <div class="category-layout__filter col-lg-4 col-md-5">
                                <form class="block-filter">
                                    <div class="block-filter__tabs">
                                        <button class="button__filter-tab filter-tab--active">Продажа</button>
                                        <button class="button__filter-tab">Аренда</button>
                                    </div><!-- block-filter__tabs -->                            
                                    <div class="block-filter__prise-range">
                                        <h4 class="filter-title prise-range__title">Цена, EUR</h4>
                                        <div class="prise-range__inputs">
                                            <input type="text" class="input__range" placeholder="От">
                                            <input type="text" class="input__range" placeholder="До">
                                        </div>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Тип недвижимости</h4>
                                        
                                        <label class="filter-list__item">Таунхаус
                                            <input type="checkbox" checked="checked" name="types[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Дуплекс
                                            <input type="checkbox" name="types[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Дуплексы с выходом в сад
                                            <input type="checkbox" name="types[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Дома          <input type="checkbox" name="types[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Квартиры
                                            <input type="checkbox" name="types[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">6 вариант
                                            <input type="checkbox" name="types[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Город</h4>
                                        
                                        <label class="filter-list__item">Алания
                                            <input type="checkbox" name="city[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Анталия
                                            <input type="checkbox" name="city[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Северный Кипр
                                            <input type="checkbox" name="city[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Стамбул
                                            <input type="checkbox" name="city[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Район</h4>
                                        
                                        <label class="filter-list__item">Авсаллар
                                            <input type="checkbox" name="district[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Махмутлар
                                            <input type="checkbox" name="district[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Газипаша
                                            <input type="checkbox" name="district[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Кестель
                                            <input type="checkbox" name="district[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">5 вариант
                                            <input type="checkbox" name="district[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Рынок жилья</h4>
                                        
                                        <label class="filter-list__item">Вторичный фонд
                                            <input type="checkbox" name="market[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">На стадии строительства
                                            <input type="checkbox" name="market[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">Готовое новое
                                            <input type="checkbox" name="market[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">4 вариант
                                            <input type="checkbox" name="market[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">5 вариант
                                            <input type="checkbox" name="market[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Количество комнат</h4>
                                        
                                        <label class="filter-list__item">студия
                                            <input type="checkbox" name="rooms[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">1+1
                                            <input type="checkbox" name="rooms[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">2+1
                                            <input type="checkbox" name="rooms[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">3+1
                                            <input type="checkbox" name="rooms[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">4+1
                                            <input type="checkbox" name="rooms[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Год постройки</h4>
                                        
                                        <label class="filter-list__item">сдается через 0 - 3 года
                                            <input type="checkbox" name="year[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">не старше 5 лет
                                            <input type="checkbox" name="year[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">не старше 10 лет
                                            <input type="checkbox" name="year[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">не старше 15 лет
                                            <input type="checkbox" name="year[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">старше 15 лет
                                            <input type="checkbox" name="year[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Расстояние до моря</h4>
                                        
                                        <label class="filter-list__item">0 - 100 м (первая береговая линия)
                                            <input type="checkbox" name="distance[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">100 - 500 м
                                            <input type="checkbox" name="distance[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">500 - 1000 м
                                            <input type="checkbox" name="distance[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">1000 - 2000 м
                                            <input type="checkbox" name="distance[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">больше 2000 м
                                            <input type="checkbox" name="distance[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Этаж</h4>
                                        
                                        <label class="filter-list__item">не первый
                                            <input type="checkbox" name="floor[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">не первый, не последний
                                            <input type="checkbox" name="floor[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Меблировка</h4>
                                        
                                        <label class="filter-list__item">есть
                                            <input type="checkbox" name="interier[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">нет
                                            <input type="checkbox" name="interier[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Наличие крытого бассейна</h4>
                                        
                                        <label class="filter-list__item">есть
                                            <input type="checkbox" name="pool[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">нет
                                            <input type="checkbox" name="pool[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Количество санузлов</h4>
                                        
                                        <label class="filter-list__item">1 вариант
                                            <input type="checkbox" name="badhroom[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">2 вариант
                                            <input type="checkbox" name="badhroom[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">3 вариант
                                            <input type="checkbox" name="badhroom[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">4 вариант
                                            <input type="checkbox" name="badhroom[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">5 вариант
                                            <input type="checkbox" name="badhroom[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__checkbox-unit">
                                        <h4 class="filter-title">Отопление</h4>
                                        
                                        <label class="filter-list__item">1 вариант
                                            <input type="checkbox" name="heating[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">2 вариант
                                            <input type="checkbox" name="heating[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">3 вариант
                                            <input type="checkbox" name="heating[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">4 вариант
                                            <input type="checkbox" name="heating[]">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="filter-list__item">5 вариант
                                            <input type="checkbox" name="heating[]">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="block-filter__dropp">
                                        <a href="#" class="dropp-filter--btn">Сбросить фильтр</a>
                                    </div>
                                </form>
                            </div><!-- category-layout__filter -->
                            <div class="category-layout__content col-lg-8 col-md-7">
                                <div class="article-view__category-list">
                                    <div class="category-list"> 
                                        <div class="category-list__item">
                                            <a href="#" class="category-list__link category-list__link--active">Недвижимость от застройщика</a>
                                        </div>
                                        <div class="category-list__item">
                                            <a href="#" class="category-list__link">Недвижимость у моря</a>
                                        </div>
                                        <div class="category-list__item">
                                            <a href="#" class="category-list__link">Недорогая недвижимость</a>
                                        </div>
                                        <div class="category-list__item">
                                            <a href="#" class="category-list__link">Дома в Турции</a>
                                        </div>
                                        <div class="category-list__item">
                                            <a href="#" class="category-list__link">Вторичная недвижимость</a>
                                        </div>
                                        <div class="category-list__item">
                                            <a href="#" class="category-list__link">Элитная недвижимость</a>
                                        </div>
                                    </div>
                                </div><!-- article-view__category-list -->

                                <div class="article-view__options">
                                    <div class="view-option__legend">
                                        Найдено: <span>20</span>
                                    </div>
                                    <div class="view-option__control">
                                        <label for="view-options-sort">Сортировать:</label>
                                        <span>
                                            <select name="" class="view-options-sort">
                                                <option value="">От новых к старым</option>
                                                <option value="">От старых к новых</option>
                                            </select>
                                        </span>
                                    </div>
                                </div><!-- article-view__options -->
                                
                                <div class="article-view__list article-list">
                                    <div class="article-list__body row">
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist article-card__whishlist-avtive"></button>
                                                    <button class="article-card__top-sale">Хит-продаж</button>
                                                </div>
                                                
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_01.png" alt="Фото продукта 01"></a>   
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>1+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>60 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">105 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist"></button>
                                                </div>
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_02.png" alt="Фото продукта 02"></a>
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>3+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>120 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">380 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist article-card__whishlist-avtive"></button>
                                                    <button class="article-card__top-sale">Хит-продаж</button>
                                                </div>
                                                
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_01.png" alt="Фото продукта 03"></a>   
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>1+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>60 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">105 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist"></button>
                                                </div>
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_02.png" alt="Фото продукта 04"></a>
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>3+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>120 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">380 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist article-card__whishlist-avtive"></button>
                                                    <button class="article-card__top-sale">Хит-продаж</button>
                                                </div>
                                                
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_01.png" alt="Фото продукта 05"></a>   
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>1+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>60 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">105 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist"></button>
                                                </div>
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_02.png" alt="Фото продукта 06"></a>
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>3+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>120 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">380 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist article-card__whishlist-avtive"></button>
                                                    <button class="article-card__top-sale">Хит-продаж</button>
                                                </div>
                                                
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_01.png" alt="Фото продукта 07"></a>   
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>1+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>60 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">105 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist"></button>
                                                </div>
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_02.png" alt="Фото продукта 08"></a>
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>3+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>120 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">380 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist article-card__whishlist-avtive"></button>
                                                    <button class="article-card__top-sale">Хит-продаж</button>
                                                </div>
                                                
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_01.png" alt="Фото продукта 09"></a>   
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>1+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>60 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">105 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- article-list__item -->
                                        <div class="article-list__item col-lg-6 col-sm-12">
                                            <div class="article-card">
                                                <div class="article-card__badges-list">
                                                    <button class="article-card__whishlist"></button>
                                                </div>
                                                <div class="article-card__image">
                                                    <a href="#"><img src="assets/images/aticle_catalog_02.png" alt="Фото продукта 10"></a>
                                                </div>
                                                <div class="article-card__info">
                                                    <h3 class="article-card__title">
                                                        <a href="#">Меблированный дуплекс 5+1 для Вашей семьи в комплексе с крытым бассейном в Кестеле</a>
                                                    </h3>
                                                    <dl class="article-card__description">
                                                        <dt>Расположение:</dt>
                                                        <dd>Алания/Алания Центр</dd>
                                                            <br>
                                                        <dt>Комнаты:</dt>
                                                        <dd>3+1</dd>
                                                            <br>    
                                                        <dt>Площадь:</dt>
                                                        <dd>120 м²</dd>
                                                            <br>
                                                    </dl>
                                                </div>
                                                <div class="article-card__actions">
                                                    <div class="article-card__price">
                                                        <span>Цена от:</span>
                                                        <span class="price">380 000</span>
                                                        <span class="currency">EUR</span>
                                                    </div>
                                                    <div class="article-card__button">
                                                        <a href="#" class="readmore-btn">Подробнее</a>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div><!-- article-list__item -->
                                    </div>
                                </div><!-- article-view__list -->
                            </div><!-- category-layout__content -->
                        </div><!-- row -->
                        <div class="row">
                            <div class="col-12">  
                                <div class="pagination">
                                    <ul class="pagination__list">
                                        <li class="pagination__item"><a href="#" class="pagination__link">1</a></li>
                                        <li class="pagination__item"><a href="#" class="pagination__link pagination__link--active">2</a></li>
                                        <li class="pagination__item">...</li>
                                        <li class="pagination__item"><a href="#" class="pagination__link">25</a></li>
                                    </ul>
                                </div><!-- pagination -->
                            </div> 
                        </div>  
                    </div>   
                </div>
            </main><!-- site__body -->
            <section class="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-block">
                                <h2>Почему Турция инвестиционно привлекательная страна?
                                    </h2>
                                <p>Турция – самая светская в мире мусульманская, страна которая подходит по климату, географическому положению, досягаемости, менталитету и культуре практически любому иностранцу. Комфорт – пожалуй, именно так одним словом можно охарактеризовать Турцию, а не это ли главный аргумент в выборе страны для покупки недвижимости?</p>    
                                <p>Наслаждаться морем и солнцем более 300 дней в году, питаться органическими овощами и фруктами с грядки или ветки дерева, не переплачивать за зимнюю одежду и обувь, не коротать дни в долгих пробках – не о такой ли жизни мечтает каждый второй житель планеты? А что если к этому списку добавить отсутствие языкового барьера, возможности для получения качественного, котирующегося в Европе и США, образования, низкие налоги на недвижимость, доступные цены на продукты питания, доброжелательность и толерантность местного населения, то у Вас просто не остаётся другой альтернативы!</p>
                                <img src="/assets/images/image_1140.png" alt="image" class="text-block__image">
                                <p>Ни для кого не секрет, что недвижимость у моря с каждым годом набирает инвестиционную привлекательность и ее ценность постоянно растет. Средиземноморское побережье Турции может похвастаться многокилометровой линией песчаного и песчано-галечного пляжа и современными высокотехнологичными жилыми комплексами с инфраструктурой пятизвездочных отелей в непосредственной близости от моря.</p>
                                <p>Команда Liga Real Estate направит Ваши инвестиции в надежное русло, подберет варианты как инвестиционной жилой недвижимости у моря, так и коммерческую недвижимость, приносящую ежегодный гарантированный доход в евро.</p>
                            </div>                                                           
                        </div>
                    </div>
                </div>
            </section>

<?php include 'footer.php'; ?>